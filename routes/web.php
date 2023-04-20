<?php

use App\Http\Controllers\Admin\Berita\BeritaController;
use App\Http\Controllers\Admin\Berita\KategoriBeritaController;
use App\Http\Controllers\admin\UserController as AdminUserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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
    if(Auth::check()){
        return redirect()->route('dashboard');
    }else{
        return  view('auth.login');
    }
});

Auth::routes([
    'register' => false
]);

Route::group(['prefix' => '/dashboard', 'middleware' => ['web', 'auth']], function () {

        Route::get('/', [HomeController::class, 'index'])->name('dashboard');

        Route::resource('roles', RoleController::class);
        // Route::resource('users', UserController::class);
        Route::resource('products', ProductController::class);

        // Peran ADMIN
        Route::group(['middleware' => ['role:administrator']], function () {
            Route::resource('users', UserController::class);
            Route::resource('categories-news', KategoriBeritaController::class)->except('show');
            Route::resource('news', BeritaController::class);
        });

        // Peran editor
        Route::group(['middleware' => ['role:editor']], function () {
            Route::resource('categories-news', KategoriBeritaController::class)->except('show');
            Route::resource('news', BeritaController::class);

        });

        // Peran author
        Route::group(['middleware' => ['role:author']], function () {
            Route::resource('news', BeritaController::class);

        });


});






require_once 'app.php';

