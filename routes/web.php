<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Models\Katalog;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\PaymentHistoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\CertificateController;

// Homepage route
Route::get('/', function () {
    $katalogs = \App\Models\Katalog::where('is_active', true)  // Tambahkan where clause ini
        ->orderBy('tanggal_mulai', 'asc')
        ->take(5)
        ->get();
    
    $feedbacks = \App\Models\Feedback::with('member')
        ->where('type', 'training')
        ->latest()
        ->take(8)
        ->get();
            
    return view('welcome', compact('katalogs', 'feedbacks'));
})->name('home');

Route::get('/catalog', function () {
    $katalogs = Katalog::where('is_active', true)
        ->orderBy('tanggal_mulai', 'asc')
        ->get();
    return view('katalog.katalog', compact('katalogs'));
})->name('catalog');

Route::get('/catalog/{slug}', function ($slug) {
    $katalog = Katalog::where('slug', $slug)->firstOrFail();
    return view('katalog.detail', compact('katalog'));
})->name('catalog.detail');

Route::middleware(['auth:member'])->group(function () {
    Route::get('/catalog/{slug}/negotiation', function ($slug) {
        $katalog = Katalog::where('slug', $slug)->firstOrFail();
        return view('katalog.detail', compact('katalog'));
    })->name('catalog.negotiation');
});

// Payment routes

Route::get('/payment/success', function() {
    return view('payment.success');
})->name('payment.success')->middleware('auth:member');

Route::get('/payment/history', [PaymentHistoryController::class, 'index'])
    ->name('payment.history')
    ->middleware('auth:member');

// Download certificate route
Route::get('/certificate/{payment}/download', [CertificateController::class, 'download'])
    ->name('certificate.download')
    ->middleware(['auth:member']);

Route::get('/certificate/{payment}/download-all', [CertificateController::class, 'downloadAll'])
    ->name('certificate.download-all')
    ->middleware(['auth:member']);

// View certificate route
Route::get('/certificate/claim/{payment}', [CertificateController::class, 'showClaimForm'])
    ->name('certificate.claim')
    ->middleware(['auth:member']);

// Add this route to handle the certificate claim form submission
Route::post('/certificate/claim/{payment}', [CertificateController::class, 'processClaim'])
    ->name('certificate.process-claim')
    ->middleware(['auth:member']);

Route::get('/certificate/{payment}/show', [CertificateController::class, 'show'])
    ->name('certificate.show')
    ->middleware(['auth:member']);

Route::post('/certificate/{payment}/show', [CertificateController::class, 'show'])
    ->name('certificate.show')
    ->middleware(['auth:member']);

Route::get('/payment/{katalog_id}', function ($katalog_id) {
    $katalog = App\Models\Katalog::findOrFail($katalog_id);
    return view('payment.payment', compact('katalog'));
})->name('payment')->middleware('auth:member');

Route::post('/payment', [PaymentController::class, 'store'])
    ->name('payment.store')
    ->middleware('auth:member');

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

Route::get('/reset-password', [ResetPasswordController::class, 'create'])
    ->name('password.reset');

Route::post('/reset-password', [ResetPasswordController::class, 'reset'])
    ->name('password.update');

Route::middleware(['auth:member'])->group(function () {
    Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
});
