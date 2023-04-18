<?php

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

// Route::redirect('/register', '/login');
//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth','web']], function() {
   
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);


});






require_once 'app.php';

