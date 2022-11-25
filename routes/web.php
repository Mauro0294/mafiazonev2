<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index']);

// Authentication Routes
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login-request', [AuthController::class, 'loginRequest'])->name('loginRequest'); 
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register-request', [AuthController::class, 'registerRequest'])->name('registerRequest'); 
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth');




