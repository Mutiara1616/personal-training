<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Homepage route
Route::get('/', function () {
    return view('welcome');
})->name('home'); 

Route::get('/catalog', function () {
    return view('katalog.katalog');
})->name('catalog');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register']);