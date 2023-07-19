<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\RwController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | rw
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () { 
    
        Route::controller(RwController::class)->group(function(){

            // index
            Route::get('rw','index')
                ->name('dasbor.rw.index');

            // tambah
            Route::get('rw/tambah','create')
                ->name('dasbor.rw.tambah');

            // store / proses tambah
            Route::post('rw','store')
                ->name('dasbor.rw.store');

            // show
            Route::get('rw/detail/{id}','show')
                ->name('dasbor.rw.detail');

            // ubah
            Route::get('rw/ubah/{id}','edit')
                ->name('dasbor.rw.ubah');

            // update / proses ubah
            Route::put('rw/update/{id}','update')
                ->name('dasbor.rw.update');

            // destroy / proses hapus
            Route::delete('rw/{id}','destroy')
                ->name('dasbor.rw');

        });
    });
