<?php

// DASBOR CONTROLLERS
use App\Http\Controllers\Dasbor\KelurahanController;

use Illuminate\Support\Facades\Route;

/*
    |--------------------------------------------------------------------------
    | kelurahan
    |--------------------------------------------------------------------------
    */
    Route::group(['middleware' => ['role:administrator']], function () { 
    
        Route::controller(KelurahanController::class)->group(function(){

            // index
            Route::get('kelurahan','index')
                ->name('dasbor.kelurahan');

            // tambah
            Route::get('kelurahan/tambah','create')
                ->name('dasbor.kelurahan.tambah');

            // store / proses tambah
            Route::post('kelurahan','store')
                ->name('dasbor.kelurahan.store');

            // detail
            Route::get('kelurahan/detail/{id}','show')
                ->name('dasbor.kelurahan.detail');

            // ubah
            Route::get('kelurahan/ubah/{id}','edit')
                ->name('dasbor.kelurahan.ubah');

            // update / proses ubah
            Route::put('kelurahan/update/{id}','update')
                ->name('dasbor.kelurahan.update');

            // destroy / proses hapus
            Route::delete('kelurahan/{id}','destroy')
                ->name('dasbor.kelurahan');

        });
    });
