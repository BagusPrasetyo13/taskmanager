<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index']);
});

// LOGIN
Route::get('/login', [AuthController::class, 'loginIndex'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthController::class, 'loginStore'])
    ->name('loginStore');

// REGISTER
Route::get('/register', [AuthController::class, 'registerIndex'])
    ->name('auth.register');
Route::post('/register', [AuthController::class, 'registerStore'])
    ->name('registerStore');

// LOGOUT
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
