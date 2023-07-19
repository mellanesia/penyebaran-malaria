<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\DistrikController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | distrik
    |
    | index
    | draft
    | tambah
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
    Route::group(['middleware' => ['role:administrator']], function () { 
    
        Route::controller(DistrikController::class)->group(function(){

            // index
            Route::get('distrik','index')
                ->name('dasbor.distrik');

            // draft
            Route::get('distrik/draft','draft')
                ->name('dasbor.distrik.draft');

            // create
            Route::get('distrik/create','create')
                ->name('dasbor.distrik.create');

            // store
            Route::post('distrik','store')
                ->name('dasbor.distrik.store');

            // show
            Route::get('distrik/show/{id}','show')
                ->name('dasbor.distrik.show');

            // edit
            Route::get('distrik/edit/{id}','edit')
                ->name('dasbor.distrik.edit');

            // update
            Route::put('distrik/update/{id}','update')
                ->name('dasbor.distrik.update');

            // destroy
            Route::delete('distrik/{id}','destroy')
                ->name('dasbor.distrik.destroy');
        });
    });
