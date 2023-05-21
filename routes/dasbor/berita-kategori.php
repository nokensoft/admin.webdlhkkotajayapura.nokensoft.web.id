<?php 

// DASBOR CONTROLLERS
use App\Http\Controllers\Author\KategoriController;

/*
    |--------------------------------------------------------------------------
    | KATEGORI
    | 
    | index
    | draft
    | create
    | store
    | show
    | edit
    | update
    | destroy
    | trash
    | restore
    | delete
    |--------------------------------------------------------------------------
    */

    Route::controller(KategoriController::class)->group(function(){

        // index
        Route::get('kategori','index')
            ->name('dasbor.kategori');

        // draft
        Route::get('kategori/draft','draft')
            ->name('dasbor.kategori.draft');

        // create
        Route::get('kategori/create','create')
            ->name('dasbor.kategori.create');

        // store
        Route::post('kategori','store')
            ->name('dasbor.kategori.store');

        // show
        Route::get('kategori/{id}/show','show')
            ->name('dasbor.kategori.show');

        // edit
        Route::get('kategori/{id}/edit','edit')
            ->name('dasbor.kategori.edit');

        // update
        Route::put('kategori/{id}','update')
            ->name('dasbor.kategori.update');

        // destroy
        Route::delete('kategori/{id}','destroy')
            ->name('dasbor.kategori.destroy');

        // trash
        Route::get('kategori/trash','trash')
            ->name('dasbor.kategori.trash');

        // restore
        Route::post('kategori/restore/{id}','restore')
            ->name('dasbor.kategori.restore');
        
        // delete
        Route::delete('kategori/delete/{id}','delete')
            ->name('dasbor.kategori.delete');
            
    });