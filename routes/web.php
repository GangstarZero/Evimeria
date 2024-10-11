<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)
    ->group(function () {
        Route::get('/login', 'loginPage')->name('login');
    });
