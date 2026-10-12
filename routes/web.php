<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PsController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\PembayaranController;

Route::view('/', 'customer.index')->name('home');



/*
|--------------------------------------------------------------------------
| Login
|--------------------------------------------------------------------------
*/

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');


/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');


/*
|--------------------------------------------------------------------------
| Halaman setelah login
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Dashboard
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | Pelanggan
    |--------------------------------------------------------------------------
    */

    Route::resource('pelanggan', PelangganController::class)
        ->except(['create', 'show']);

    Route::get('/pelanggan/create', [PelangganController::class, 'create'])
        ->name('pelanggan.create');

    Route::get('/pelanggan/{pelanggan}', [PelangganController::class, 'show'])
        ->name('pelanggan.show');


    /*
    |--------------------------------------------------------------------------
    | PlayStation
    |--------------------------------------------------------------------------
    */

    Route::resource('ps', PsController::class);


    /*
    |--------------------------------------------------------------------------
    | Rental
    |--------------------------------------------------------------------------
    */

    Route::get('/rentals', [RentalController::class, 'index'])->name('rentals.index');

Route::get('/rentals/create', [RentalController::class, 'create'])
    ->name('rentals.create');

Route::post('/rentals', [RentalController::class, 'store'])
    ->name('rentals.store');

Route::put('/rentals/{p}/selesai', [RentalController::class, 'selesai'])
    ->name('rentals.selesai');

    


    /*
    |--------------------------------------------------------------------------
    | Pembayaran
    |--------------------------------------------------------------------------
    */

    Route::get('/pembayaran', [PembayaranController::class, 'index'])
        ->name('pembayaran.index');

    Route::get('/pembayaran/{p}', [PembayaranController::class, 'create'])
        ->name('pembayaran.create');

    Route::post('/pembayaran/{p}', [PembayaranController::class, 'store'])
        ->name('pembayaran.store');

});