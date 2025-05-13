<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\NotificationController;

Route::post('/notify', [NotificationController::class, 'send']);
Route::post('/register', [CustomerController::class, 'register']);
Route::post('/login', [CustomerController::class, 'login']);


Route::get('/test-api', function () {
    return response()->json(['message' => 'Test API']);
});
