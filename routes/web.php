<?php

// VISITOR CONTROLLERS
use App\Http\Controllers\Visitor\HalamanController;
use App\Http\Controllers\Visitor\BeritaController;
use App\Http\Controllers\Visitor\BerandaController;

// OTHER CONTROLLERS
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanPertanyaanController;
use App\Http\Controllers\UserController;

// OTHER CLASSES
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () { 
    // alihkan ke halaman beranda
    return redirect('/beranda'); 
});

// BERANDA
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

// HALAMAN

/*
| HALAMAN
| menampilkan halaman secara detail berdasarkan slug
| halaman dipasang secara manual menggunakan manajemen url/link halaman
*/
Route::get('/halaman', [HalamanController::class, 'index'])->name('halaman');
Route::get('/halaman/{slug}', [HalamanController::class, 'show'])->name('halaman.slug');

/*
| BERITA
| 1) menampilkan semua berita
| 2) menampilkan berita berdasarkan slug
| 3) menampilkan berita berdasarkan kategori
*/

// 1) menampilkan semua berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');

// 2) menampilkan berita berdasarkan slug
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.slug');

// 3) menampilkan berita berdasarkan kategori
Route::get('/berita/kategori/{kategori}', [BeritaController::class, 'kategori'])->name('berita.kategori.slug');




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

