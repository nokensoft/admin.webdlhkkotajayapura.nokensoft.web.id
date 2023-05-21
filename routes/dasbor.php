<?php 

Route::prefix('dasbor')->middleware('auth')->group(function () {

    require 'dasbor/berita.php';
    require 'dasbor/berita-kategori.php';
    require 'dasbor/halaman.php';
    require 'dasbor/link-terkait.php';

});
    