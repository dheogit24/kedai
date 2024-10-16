<?php

use Illuminate\Support\Facades\Route;

// Route halaman login
Route::get('/', function () {
    return view('pages.auth.auth-login');
});

// Route halaman register (tidak perlu middleware auth)
Route::get('register', function () {
    return view('auth.auth-register', ['type_menu' => 'register']);
})->name('register');

// Route yang memerlukan autentikasi (hanya bisa diakses jika sudah login)
Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard', ['type_menu' => 'home']);
    })->name('home');
});
