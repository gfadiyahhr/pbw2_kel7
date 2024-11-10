<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('landingPage');
});

Route::get('/telkozy', function () {
    return view('admin/dashboard');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/forgot-password', function () {
    return view('forgot_password');
})->name('forgot-password');

Route::post('/send_password_reset', [ForgotPasswordController::class, 'sendResetLinkEmail']);

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [RegisterController::class, 'register']);

Route::get('/beranda_pencari', function () {
    return view('beranda_pencari');
});