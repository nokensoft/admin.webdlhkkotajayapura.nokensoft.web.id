<?php

// CONTROLLERS
use App\Http\Controllers\Frontend\HalamanController;
use App\Http\Controllers\Frontend\BeritaController;
use App\Http\Controllers\Frontend\LinkTerkaitController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PengajuanPertanyaanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;

// MODELS
use App\Models\Berita\Berita;
use App\Models\LinkTerkait;
use App\Models\LayananOnline;
use App\Models\InformasiLingkungan;

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
Route::get('/beranda', function () {

    // data berita di halaman beranda
    $beritas = Berita::orderBy('id','desc')->where('status','publish')->paginate(6);
    
    // data link terkait di halaman beranda
    $linkTerkaits = LinkTerkait::orderBy('id','desc')->where('status','publish')->paginate();
    
    // data layanan online di halaman beranda
    $layananOnlines = LayananOnline::orderBy('id','desc')->where('status','publish')->paginate();
    
    // data informasi lingkungan di halaman beranda
    $informasiLingkungans = InformasiLingkungan::orderBy('id','desc')->where('status','publish')->paginate();

    return  view('frontend.index', compact('beritas', 'linkTerkaits', 'layananOnlines', 'informasiLingkungans'));

});

// HALAMAN
Route::get('/halaman/{method}', [HalamanController::class, 'show'])->name('halaman.method');

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

