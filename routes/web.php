<?php

use App\Http\Controllers\Frontend\HalamanController;
use App\Http\Controllers\Frontend\BeritaController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanPertanyaanController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Models\Berita\Berita;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {

    $beritas = Berita::orderBy('id','desc')->where('status','publish')->paginate(6);

    return  view('frontend.index', compact('beritas'));

});

// HALAMAN
Route::get('/halaman/{method}', [HalamanController::class, 'show'])->name('halaman.method');

// BERITA
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.slug');

Route::post('/pengajuan', [PengajuanPertanyaanController::class, 'pengajuanPertanyaanStore'])->name('app.pengajuan.store');



Auth::routes([
    'register' => false
]);

Route::group(['prefix' => '/dasbor', 'middleware' => ['web', 'auth']], function () {

        Route::get('/', [HomeController::class, 'index'])->name('dasbor');

        // ADMIN
        Route::group(['middleware' => ['role:administrator']], function () {
            Route::resource('pengguna', UserController::class);

        });

        // EDITOR
        Route::group(['middleware' => ['role:editor']], function () {


        });

        // AUTHOR
        Route::group(['middleware' => ['role:author']], function () {


        });


});






require_once 'app.php';

