<?php 

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\SliderController;
use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | SLIDER
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

    Route::controller(SliderController::class)->group(function(){

        // index
        Route::get('slider','index')
            ->name('dasbor.slider');

        // draft
        Route::get('slider/draft','draft')
            ->name('dasbor.slider.draft');

        // create
        Route::get('slider/create','create')
            ->name('dasbor.slider.create');

        // store
        Route::post('slider','store')->name('dasbor.slider.store');

        // show / detail
        Route::get('slider/{id}/detail','show')
            ->name('dasbor.slider.show');

        // edit
        Route::get('slider/{id}/edit','edit')
            ->name('dasbor.slider.edit');

        // update
        Route::put('slider/{id}','update')
            ->name('dasbor.slider.update');

        // destroy
        Route::delete('slider/{id}','destroy')
            ->name('dasbor.slider.destroy');

        // trash
        Route::get('slider/trash','trash')
            ->name('dasbor.slider.trash');

        // restore
        Route::post('slider/restore/{id}','restore')
            ->name('dasbor.slider.restore');
        
        // delete
        Route::delete('slider/delete/{id}','delete')
            ->name('dasbor.slider.delete');
            
    });