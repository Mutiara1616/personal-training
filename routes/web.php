<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PaymentController;  // Tambahkan ini
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Models\Katalog;


// Homepage route
Route::get('/', function () {
    return view('welcome');
})->name('home'); 

Route::get('/catalog', function () {
    $katalogs = Katalog::orderBy('tanggal_mulai', 'asc')->get();
    return view('katalog.katalog', compact('katalogs'));
})->name('catalog');

Route::get('/catalog/{slug}', function ($slug) {
    $katalog = Katalog::where('slug', $slug)->firstOrFail();
    return view('katalog.detail', compact('katalog'));
})->name('catalog.detail');

// Payment routes
Route::get('/payment', function () {
    return view('payment.payment');
})->name('payment');

Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');

Route::get('/payment/success', function() {
    return view('payment.success');
})->name('payment.success');

Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');

// Auth routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Ganti route password reset yang ada dengan yang berikut
Route::get('/reset-password', [ResetPasswordController::class, 'create'])
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');
