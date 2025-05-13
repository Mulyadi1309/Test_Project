<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [CustomerController::class, 'showRegisterForm'])->name('register');
Route::post('register', [CustomerController::class, 'register']);

Route::get('/login', [CustomerController::class, 'showLoginForm'])->name('login');
Route::post('login', [CustomerController::class, 'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
