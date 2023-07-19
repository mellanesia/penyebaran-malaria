<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\DistrikController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | distrik
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () { 
    
        Route::controller(DistrikController::class)->group(function(){

            // index
            Route::get('distrik','index')
                ->name('dasbor.distrik');

            // tambah
            Route::get('distrik/tambah','create')
                ->name('dasbor.distrik.tambah');

            // store / proses tambah
            Route::post('distrik','store')
                ->name('dasbor.distrik.store');

            // detail
            Route::get('distrik/detail/{id}','show')
                ->name('dasbor.distrik.detail');

            // ubah
            Route::get('distrik/ubah/{id}','edit')
                ->name('dasbor.distrik.ubah');

            // update / proses ubah
            Route::put('distrik/update/{id}','update')
                ->name('dasbor.distrik.update');

            // destroy / proses hapus
            Route::delete('distrik/{id}','destroy')
                ->name('dasbor.distrik');
        });
    });
