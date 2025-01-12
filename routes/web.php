<?php

use App\Http\Controllers\halamanBeranda;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

Route::get('/register', function () {
    return view('register'); 
})->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.post');

Route::get('/', [halamanBeranda::class, 'index'])->name('home');
Route::get('/search', function () {
    // Proses pencarian kost
})->name('search');

Route::get('/forgot-password', function () {
    return view('forgot-password');
})->name('password.request');

Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink'])->name('password.email');

Route::get('/search', function () {
    return view('search');
})->name('search');


Route::get('/', function () {
    return view('welcome');
});
