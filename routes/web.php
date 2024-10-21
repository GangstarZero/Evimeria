<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\ApplyJobController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CompanyDashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    if (Auth::check()) {
        Auth::logout();
    }
    return view('index');
})->name('home');

Route::controller(AuthController::class)
    ->group(function () {
        // Login
        Route::get('/login', 'loginPage')->name('login');
        Route::post('/login-user', 'loginUser')->name('auth.login-user');

        // Register
        Route::get('/register', 'registerPage')->name('auth.register');
        Route::post('/register-user', 'registerUser')->name('auth.register-user');

        // logout
        Route::post('/logout', 'logout')->name('auth.logout');
    });

Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)
        ->name('dashboard.')
        ->group(function () {
            Route::get('/dashboard', 'index')->name('home');
        });
});

Route::controller(JobController::class)
    ->name('job.')
    ->group(function () {

        // page
        Route::get('job', [JobController::class, 'indexPage'])->name('indexPage');
        Route::get('job/add', [JobController::class, 'addPage'])->name('addPage');
        Route::get('job/{id}', [JobController::class, 'detailPage'])->name('detailPage');

        // api route
        Route::post('api/job', [JobController::class, 'insertJob'])->name('api.add');
    });

Route::get('/title', [TitleController::class, 'getAllTitle'])->name('title.getAll');

Route::post('/apply_job', [ApplyJobController::class, 'insertApplyJob'])->name('apply_job.add');

Route::middleware(['auth:company'])->name('company.')->group(function () {
    Route::get('/company/dashboard', [CompanyDashboardController::class, 'index'])->name('home');
});
