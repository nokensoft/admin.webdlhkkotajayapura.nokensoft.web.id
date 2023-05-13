<?php

use App\Http\Controllers\admin\SliderController;
use App\Http\Controllers\admin\ArtikelController;
use App\Http\Controllers\admin\GambarArtikelController;
use App\Http\Controllers\admin\HalamanController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\AlbumController;
use App\Http\Controllers\Admin\Berita\BeritaController;
use App\Http\Controllers\Admin\Berita\KategoriBeritaController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\admin\FotoController;
use App\Http\Controllers\Admin\PengaturanControlller;
use App\Http\Controllers\admin\VideoController;
use App\Http\Controllers\admin\SistemController;
use App\Http\Controllers\admin\PersonController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\PengajuanPertanyaanController;



Route::prefix('app')->middleware('auth')->group(function () {


    Route::get('/artikel', function () {
        return view('admin.pages.artikel.list');
    });
    Route::get('/artikel/create', function () {
        return view('admin.pages.artikel.form');
    });



    Route::controller(PengaturanControlller::class)->group(function(){

        Route::get('pengaturan','index')->name('app.pengaturan');
        Route::get('pengaturan/{id}/detail','show')->name('app.pengaturan.show');
        Route::get('pengaturan/{id}/ubah','edit')->name('app.pengaturan.edit');
        Route::put('pengaturan/update/{id}','update')->name('app.pengaturan.update');

    });

    Route::controller(PengajuanPertanyaanController::class)->group(function(){

        Route::get('pengajuan','index')->name('app.pengajuan');
        Route::get('pengajuan/{id}/detail','show')->name('app.pengajuan.show');
        Route::delete('pengajuan/{id}','destroy')->name('app.pengajuan.destroy');
        Route::get('pengajuan/trash','trash')->name('app.pengajuan.trash');
        Route::post('pengajuan/restore/{id}','restore')->name('app.pengajuan.restore');
        Route::delete('pengajuan/delete/{id}','delete')->name('app.pengajuan.delete');

    });

    Route::controller(FaqController::class)->group(function(){
        Route::get('faq','index')->name('app.faq');
        Route::get('faq/draft','draft')->name('app.faq.draft');
        Route::get('faq/create','create')->name('app.berita.create');
        Route::post('faq','store')->name('app.faq.store');
        Route::get('faq/{id}/edit','edit')->name('app.faq.edit');
        Route::get('faq/{id}/detail','show')->name('app.faq.show');
        Route::put('faq/update/{id}','update')->name('app.faq.update');
        Route::delete('faq/{id}','destroy')->name('app.faq.destroy');
        Route::get('faq/trash','trash')->name('app.faq.trash');
        Route::post('faq/restore/{id}','restore')->name('app.faq.restore');
        Route::delete('faq/delete/{id}','delete')->name('app.faq.delete');
    });

    Route::controller(BeritaController::class)->group(function(){
        Route::get('berita','index')->name('app.berita');
        Route::get('berita/draft','draft')->name('app.berita.draft');
        Route::get('berita/create','create')->name('app.berita.create');
        Route::post('berita','store')->name('app.berita.store');
        Route::get('berita/{id}/edit','edit')->name('app.berita.edit');
        Route::get('berita/{id}/detail','show')->name('app.berita.show');
        Route::put('berita/{id}','update')->name('app.berita.update');
        Route::delete('berita/{id}','destroy')->name('app.berita.destroy');
        Route::get('berita/trash','trash')->name('app.berita.trash');
        Route::post('berita/restore/{id}','restore')->name('app.berita.restore');
        Route::delete('berita/delete/{id}','delete')->name('app.berita.delete');
    });

    Route::controller(KategoriBeritaController::class)->group(function(){
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
    Route::get('halaman/{id}/detail','show')->name('app.halaman.show');
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
