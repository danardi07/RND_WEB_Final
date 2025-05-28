<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyekController;
use App\Http\Controllers\LayananController;


/*
|--------------------------------------------------------------------------
| Public Routes (Frontend)
|--------------------------------------------------------------------------
*/

Route::get('/', fn() => redirect()->route('welcome'));
Route::view('/welcome', 'welcome')->name('welcome');
Route::get('/home', fn() => view('home'))->name('home');
Route::get('/tentang', fn() => view('tentang'))->name('about');
Route::get('/kontak', fn() => view('kontak'))->name('kontak');



/*
|--------------------------------------------------------------------------
| Authentication Routes (Custom Auth)
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Admin Routes (Protected by Auth)
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {


    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('proyek', ProyekController::class)->except(['index', 'show']);
        Route::resource('layanan', LayananController::class)->except(['index', 'show']);
    });
});
