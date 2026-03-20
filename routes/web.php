<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\finalgo\dashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleAuthController;

// Redirect root ke login
Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware('guest.token')->group(function () {
    Route::get('/login', [AuthController::class, 'viewLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'viewRegister'])->name('register-view');
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    Route::get('/forgot-password', [AuthController::class, 'forgot'])->name('forgot');
    Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])->name('send-reset-link');

    Route::get('/reset-password', [AuthController::class, 'resetView'])->name('reset');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('reset-password');

    Route::post('/auth/google', [GoogleAuthController::class, 'login'])
        ->name('google.login');
});


Route::middleware('token.auth')->group(function () {
    Route::get('/dashboard', [dashboard::class, 'index'])->name('dashboard');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
