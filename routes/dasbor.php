<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dasbor\KelurahanController;
use App\Http\Controllers\Dasbor\RwController;

Route::prefix('dasbor')->middleware('auth')->group(function () {


/*
| Kelurahan
|
|
*/
    Route::controller(KelurahanController::class)->group(function(){
        Route::get('kelurahan','index')->name('dasbor.kelurahan.index');
        Route::get('kelurahan/create','create')->name('dasbor.kelurahan.create');
        Route::post('kelurahan/store','store')->name('dasbor.kelurahan.store');
        Route::get('kelurahan/{id}/show','show')->name('dasbor.kelurahan.show');
        Route::get('kelurahan/{id}/edit','edit')->name('dasbor.kelurahan.edit');
        Route::put('kelurahan/{id}','update')->name('dasbor.kelurahan.update');
        Route::delete('kelurahan/{id}','destroy')->name('dasbor.kelurahan.destroy');
    });

/*
| RW
|
|
*/
    Route::controller(RwController::class)->group(function(){
        Route::get('rw','index')->name('dasbor.rw.index');
        Route::get('rw/create','create')->name('dasbor.rw.create');
        Route::post('rw/store','store')->name('dasbor.rw.store');
        Route::get('rw/{id}/show','show')->name('dasbor.rw.show');
        Route::get('rw/{id}/edit','edit')->name('dasbor.rw.edit');
        Route::put('rw/{id}','update')->name('dasbor.rw.update');
        Route::delete('rw/{id}','destroy')->name('dasbor.rw.destroy');
    });

    require_once 'dasbor/pengguna.php';
    require_once 'dasbor/siswa.php';
    require_once 'dasbor/distrik.php';
    // require_once 'dasbor/kelurahan.php';
    // require_once 'dasbor/rw.php';
});
