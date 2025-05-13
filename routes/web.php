<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('register', function () {
    return view('auth.register');
})->name('register');

Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('register', [CustomerController::class, 'register']);
Route::post('login', [CustomerController::class, 'login']);
