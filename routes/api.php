<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CustomerController;

Route::post('/notify', [NotificationController::class, 'send']);
Route::post('/register', [CustomerController::class, 'register']);
Route::post('/login', [CustomerController::class, 'login']);
