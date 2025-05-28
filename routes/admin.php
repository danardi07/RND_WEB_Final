
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProyekController as AdminProyekController;
use App\Http\Controllers\Admin\LayananController as AdminLayananController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('proyek', AdminProyekController::class);
    Route::resource('layanan', AdminLayananController::class);
});
