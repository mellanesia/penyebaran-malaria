<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dasbor')->middleware('auth')->group(function () {

    require_once 'dasbor/distrik.php';
    require_once 'dasbor/kelurahan.php';
    require_once 'dasbor/rw.php';
    require_once 'dasbor/pengguna.php';
    
});
