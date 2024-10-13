<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::controller(AuthController::class)
    ->name('auth.')
    ->group(function () {
        // Login
        Route::get('/login', 'loginPage')->name('login');

        // Register
        Route::get('/register', 'registerPage')->name('register');
        Route::post('/register-user', 'registerUser')->name('register-user');
    });
