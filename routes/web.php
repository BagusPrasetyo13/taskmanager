<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard');
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

// NEW TASK
Route::get('/new-task', [TaskController::class, 'index'])->name('index-task');
Route::post('/new-task', [TaskController::class, 'store'])->name('add-task');
