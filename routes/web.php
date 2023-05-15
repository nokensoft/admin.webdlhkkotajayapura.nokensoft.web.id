<?php

use App\Http\Controllers\Frontend\HalamanController;
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
    $berita = Berita::orderBy('id','desc')->where('status','publish')->paginate(6);
    return  view('frontend.index',compact('berita'));
});

Route::get('/halaman/{method}', [HalamanController::class, 'index'])->name('halaman.method');
Route::post('/pengajuan', [PengajuanPertanyaanController::class, 'pengajuanPertanyaanStore'])->name('app.pengajuan.store');



Auth::routes([
    'register' => false
]);

Route::group(['prefix' => '/dasbor', 'middleware' => ['web', 'auth']], function () {

        Route::get('/', [HomeController::class, 'index'])->name('dashboard');

        // Route::resource('roles', RoleController::class);
        // Route::resource('users', UserController::class);
        // Route::resource('products', ProductController::class);

        // Route::resource('kategori-berita', KategoriBeritaController::class)->except('show');
        // Route::resource('berita', BeritaController::class);

        // Peran ADMIN
        Route::group(['middleware' => ['role:administrator']], function () {
            Route::resource('pengguna', UserController::class);

        });

        // Peran editor
        Route::group(['middleware' => ['role:editor']], function () {


        });

        // Peran author
        Route::group(['middleware' => ['role:author']], function () {


        });


});






require_once 'app.php';

