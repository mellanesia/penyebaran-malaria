<?php

// VISITOR CONTROLLERS

use App\Http\Controllers\Dasbor\PesanController;
use App\Http\Controllers\Visitor\BerandaController;

// DASBOR CONTROLLERS
use App\Http\Controllers\DasborController;

// OTHER CONTROLLERS
use App\Http\Controllers\UserController;

// OTHER CLASSES
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\App;


/*
|--------------------------------------------------------------------------
| VISITOR
|--------------------------------------------------------------------------
*/

// Mengalihkan he alamat beranda
Route::get('/', function () {
    return redirect('/beranda');
});

// BERANDA
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

// HALAMAN

/*
| HALAMAN
| menampilkan halaman secara detail berdasarkan slug
| halaman dipasang secara manual menggunakan manajemen url/link halaman
*/
Route::get('/halaman', [BerandaController::class, 'halamanIndex'])->name('halaman');
Route::get('/halaman/{slug}', [BerandaController::class, 'halamanShow'])->name('halaman.slug');

/*
| BERITA
| - menampilkan semua berita
| - menampilkan berita berdasarkan slug
| - menampilkan berita berdasarkan kategori
*/

// - menampilkan semua berita
Route::get('/berita', [BerandaController::class, 'beritaIndex'])->name('berita');

// - menampilkan berita berdasarkan slug
Route::get('/berita/{slug}', [BerandaController::class, 'beritaShow'])->name('berita.slug');

// - menampilkan berita berdasarkan kategori
Route::get('/berita/kategori/{kategori}', [BerandaController::class, 'beritaKategori'])->name('berita.kategori.slug');

// Json berita
Route::post('/berita-json', [BerandaController::class, 'beritaJson'])->name('berita-json');


/*
| KONTAK
| menampilkan halaman kontak
|
*/

Route::get('/kontak', [BerandaController::class, 'kontak'])->name('kontak');




Auth::routes([
    'register' => false
]);


/*
| CK EDITOR
|
*/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::group(['prefix' => '/dasbor', 'middleware' => ['web', 'auth']], function () {

        Route::get('/', [DasborController::class, 'index'])->name('dasbor');

        // ADMIN
        Route::group(['middleware' => ['role:administrator']], function () {


        });

    });

require_once 'dasbor.php';

