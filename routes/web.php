<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Tambahkan route POST untuk login
Route::post('/login', [LoginController::class, 'login'])->name('login.store');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register'])->name('register.store');