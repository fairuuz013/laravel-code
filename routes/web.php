<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::resource('/Home', \App\Http\Controllers\HomeController::class, );




//PREFIX
Route::get('login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::prefix('admin')->group(function () {
    Route::resource('dashboard', App\Http\Controllers\Admin\DashboardController::class);
});

Route::post('action-login', [\App\Http\Controllers\LoginController::class,  'actionLogin'])->name('action-login');


Route::get('belajar-laravel', [Admin\App\Http\Controllers\BelajarController::class, 'index']);



























// tambah routes
Route::get('penjumlahan', [\App\Http\Controllers\BelajarController::class, 'tambah'])->name('penjumlahan');
Route::post('store-tambah', [\App\Http\Controllers\BelajarController::class, 'storeTambah'])->name('store-tambah');

// kurang routes
Route::get('pengurangan', [\App\Http\Controllers\BelajarController::class, 'kurang'])->name('pengurangan');
Route::post('store-kurang', [\App\Http\Controllers\BelajarController::class, 'storeKurang'])->name('store-kurang');

// kali routes
Route::get('perkalian', [\App\Http\Controllers\BelajarController::class, 'kali'])->name('perkalian');
Route::post('store-kali', [\App\Http\Controllers\BelajarController::class, 'storekali'])->name('store-kali');


// bagi routes
Route::get('pembagian', [\App\Http\Controllers\BelajarController::class, 'bagi'])->name('pembagian');
Route::post('store-bagi', [\App\Http\Controllers\BelajarController::class, 'storeBagi'])->name('store-bagi');



