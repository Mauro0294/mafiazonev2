<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrimeController;

Route::get('/', [HomeController::class, 'index'])->name('index');

// Authentication Routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login-request', [AuthController::class, 'loginRequest'])->name('loginRequest'); 
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register-request', [AuthController::class, 'registerRequest'])->name('registerRequest'); 
Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');

// Crime Routes
Route::get('/misdaad', [CrimeController::class, 'misdaad'])->name('misdaad')->middleware('auth');
Route::post('/misdaad/{crimeId}', [CrimeController::class, 'misdaadRequest'])->name('misdaadRequest')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');




