<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\
{
    AuthController,
    DashboardController,
    BarangController,
    TempatController
};

Route::get('/', function () {
    return redirect('/login');
});

// Route Login & Logout
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('postlogin');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Route Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route Barang
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');

// Route Tempat
Route::get('/tempat', [TempatController::class, 'index'])->name('tempat.index');