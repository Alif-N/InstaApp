<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Halaman login & register hanya bisa diakses guest (belum login)
Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/', [LoginController::class, 'login'])->name('login.process');

    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.process');
});

// Logout hanya untuk user yang sudah login
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

// Area setelah login (home/dashboard)
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home'); // silakan buat home.blade.php
    })->name('home');
});

