<?php

use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\ArtikelController;
use App\Http\Controllers\admin\GambarArtikelController;
use App\Http\Controllers\admin\HalamanController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\AlbumController;
use App\Http\Controllers\admin\FotoController;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\admin\SistemController;
use App\Http\Controllers\admin\PersonController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ProductController;


Route::prefix('app')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.pages.beranda');
    });

    // Route::get('/beranda', function () {
    //     return view('admin.pages.beranda');
    // });
    Route::get('/artikel', function () {
        return view('admin.pages.artikel.list');
    });
    Route::get('/artikel/create', function () {
        return view('admin.pages.artikel.form');
    });

    // Route::resource('roles', RoleController::class)->name('app.roles');
   // Route::resource('users', UserController::class);
    // Route::resource('products', ProductController::class)->name('app.products');


    Route::controller(UserController::class)->group(function(){
        Route::get('users','index')->name('app.users');
        Route::get('users/draft','draft')->name('app.users.draft');
        Route::get('users/create','create')->name('app.users.create');
        Route::post('users','store')->name('app.users.store');
        Route::get('users/{id}/edit','edit')->name('app.users.edit');
        Route::put('users/{id}','update')->name('app.users.update');
        Route::delete('users/{id}','destroy')->name('app.users.destroy');
        Route::get('users/trash','trash')->name('app.users.trash');
        Route::post('users/restore/{id}','restore')->name('app.users.restore');
        Route::delete('users/delete/{id}','delete')->name('app.users.delete');
    });







   Route::controller(SliderController::class)->group(function(){
    Route::get('slider','index')->name('app.slider');
    Route::get('slider/draft','draft')->name('app.slider.draft');
    Route::get('slider/create','create')->name('app.slider.create');
    Route::post('slider','store')->name('app.slider.store');
    Route::get('slider/{id}/edit','edit')->name('app.slider.edit');
    Route::put('slider/{id}','update')->name('app.slider.update');
    Route::delete('slider/{id}','destroy')->name('app.slider.destroy');
    Route::get('slider/trash','trash')->name('app.slider.trash');
    Route::post('slider/restore/{id}','restore')->name('app.slider.restore');
    Route::delete('slider/delete/{id}','delete')->name('app.slider.delete');
});





Route::controller(KategoriController::class)->group(function(){
    Route::get('kategori','index')->name('app.kategori');
    Route::get('kategori/draft','draft')->name('app.kategori.draft');
    Route::get('kategori/create','create')->name('app.kategori.create');
    Route::post('kategori','store')->name('app.kategori.store');
    Route::get('kategori/{id}/edit','edit')->name('app.kategori.edit');
    Route::put('kategori/{id}','update')->name('app.kategori.update');
    Route::delete('kategori/{id}','destroy')->name('app.kategori.destroy');
    Route::get('kategori/trash','trash')->name('app.kategori.trash');
    Route::post('kategori/restore/{id}','restore')->name('app.kategori.restore');
    Route::delete('kategori/delete/{id}','delete')->name('app.kategori.delete');
});



Route::controller(ArtikelController::class)->group(function(){
    Route::get('artikel','index')->name('app.artikel');
    Route::get('artikel/draft','draft')->name('app.artikel.draft');
    Route::get('artikel/create','create')->name('app.artikel.create');
    Route::post('artikel','store')->name('app.artikel.store');
    Route::get('artikel/{id}/edit','edit')->name('app.artikel.edit');
    Route::put('artikel/{id}','update')->name('app.artikel.update');
    Route::delete('artikel/{id}','destroy')->name('app.artikel.destroy');
    Route::get('artikel/trash','trash')->name('app.artikel.trash');
    Route::post('artikel/restore/{id}','restore')->name('app.artikel.restore');
    Route::delete('artikel/delete/{id}','delete')->name('app.artikel.delete');
});


Route::controller(GambarArtikelController::class)->group(function(){
    Route::get('artikel/{id}/gambar','index')->name('app.artikel.gambar');


    Route::post('artikel/gambar','store')->name('app.artikel.gambar.store');

    Route::put('artikel/gambar/{id}/primary','update')->name('app/artikel/gambar/primary');
    Route::delete('artikel/gambar/{id}/destroy','destroy')->name('app.artikel.gambar.destroy');

});


Route::controller(HalamanController::class)->group(function(){
    Route::get('halaman','index')->name('app.halaman');
    Route::get('halaman/draft','draft')->name('app.halaman.draft');
    Route::get('halaman/create','create')->name('app.halaman.create');
    Route::post('halaman','store')->name('app.halaman.store');
    Route::get('halaman/{id}/edit','edit')->name('app.halaman.edit');
    Route::put('halaman/{id}','update')->name('app.halaman.update');
    Route::delete('halaman/{id}','destroy')->name('app.halaman.destroy');
    Route::get('halaman/trash','trash')->name('app.halaman.trash');
    Route::post('halaman/restore/{id}','restore')->name('app.halaman.restore');
    Route::delete('halaman/delete/{id}','delete')->name('app.halaman.delete');
});


Route::controller(BannerController::class)->group(function(){
    Route::get('banner','index')->name('app.banner');
    Route::get('banner/draft','draft')->name('app.banner.draft');
    Route::get('banner/create','create')->name('app.banner.create');
    Route::post('banner','store')->name('app.banner.store');
    Route::get('banner/{id}/edit','edit')->name('app.banner.edit');
    Route::put('banner/{id}','update')->name('app.banner.update');
    Route::delete('banner/{id}','destroy')->name('app.banner.destroy');
    Route::get('banner/trash','trash')->name('app.banner.trash');
    Route::post('banner/restore/{id}','restore')->name('app.banner.restore');
    Route::delete('banner/delete/{id}','delete')->name('app.banner.delete');
});



Route::controller(AlbumController::class)->group(function(){
    Route::get('album','index')->name('app.album');
    Route::get('album/draft','draft')->name('app.album.draft');
    Route::get('album/create','create')->name('app.album.create');
    Route::post('album','store')->name('app.album.store');
    Route::get('album/{id}/edit','edit')->name('app.album.edit');
    Route::put('album/{id}','update')->name('app.album.update');
    Route::delete('album/{id}','destroy')->name('app.album.destroy');
    Route::get('album/trash','trash')->name('app.album.trash');
    Route::post('album/restore/{id}','restore')->name('app.album.restore');
    Route::delete('album/delete/{id}','delete')->name('app.album.delete');
});


Route::controller(FotoController::class)->group(function(){
    Route::get('album/{id}/foto','index')->name('app.album.foto');


    Route::post('album/foto','store')->name('app.album.foto.store');

    Route::put('album/foto/{id}/primary','update')->name('app/album/foto/primary');
    Route::delete('album/foto/{id}/destroy','destroy')->name('app.album.foto.destroy');

});



Route::controller(VideoController::class)->group(function(){
    Route::get('video','index')->name('app.video');
    Route::get('video/draft','draft')->name('app.video.draft');
    Route::get('video/create','create')->name('app.video.create');
    Route::post('video','store')->name('app.video.store');
    Route::get('video/{id}/edit','edit')->name('app.video.edit');
    Route::put('video/{id}','update')->name('app.video.update');
    Route::delete('video/{id}','destroy')->name('app.video.destroy');
    Route::get('video/trash','trash')->name('app.video.trash');
    Route::post('video/restore/{id}','restore')->name('app.video.restore');
    Route::delete('video/delete/{id}','delete')->name('app.video.delete');
});

Route::controller(SistemController::class)->group(function(){
    Route::get('sistem','index')->name('app.sistem');
    Route::get('sistem/logo','logo')->name('app.sistem.logo');
    Route::get('sistem/icon','icon')->name('app.sistem.icon');
    Route::put('sistem/icon/{id}','updateicon')->name('app.sistem.icon.update');
    Route::put('sistem/logo/{id}','updatelogo')->name('app.sistem.logo.update');

    Route::get('sistem/{id}/edit','edit')->name('app.sistem.edit');
    Route::put('sistem/{id}','update')->name('app.sistem.update');


});


Route::controller(PersonController::class)->group(function(){
    Route::get('person','index')->name('app.person');
    Route::get('person/draft','draft')->name('app.person.draft');
    Route::get('person/create','create')->name('app.person.create');
    Route::post('person','store')->name('app.person.store');
    Route::get('person/{id}/edit','edit')->name('app.person.edit');
    Route::put('person/{id}','update')->name('app.person.update');
    Route::delete('person/{id}','destroy')->name('app.person.destroy');
    Route::get('person/trash','trash')->name('app.person.trash');
    Route::post('person/restore/{id}','restore')->name('app.person.restore');
    Route::delete('person/delete/{id}','delete')->name('app.person.delete');
});



Route::controller(RoleController::class)->group(function(){
    Route::get('role','index')->name('app.role');
    Route::get('role/draft','draft')->name('app.role.draft');
    Route::get('role/create','create')->name('app.role.create');
    Route::post('role','store')->name('app.role.store');
    Route::get('role/{id}/edit','edit')->name('app.role.edit');
    Route::put('role/{id}','update')->name('app.role.update');
    Route::delete('role/{id}','destroy')->name('app.role.destroy');
    Route::get('role/trash','trash')->name('app.role.trash');
    Route::post('role/restore/{id}','restore')->name('app.role.restore');
    Route::delete('role/delete/{id}','delete')->name('app.role.delete');
});









});
