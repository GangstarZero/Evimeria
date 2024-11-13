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

// GUEST
Route::get('/', function () {
    if (Auth::check()) {
        Auth::logout();
    }
    return view('index');
})->name('home');

Route::controller(JobController::class)
    ->name('job.')
    ->group(function () {
        Route::get('job', 'guestIndexPage')->name('guestIndexPage');
        Route::get('job/{id}', 'guestDetailPage')->name('guestDetailPage');
    });

Route::controller(AuthController::class)
    ->group(function () {
        // Login
        Route::get('/login', 'loginPage')->name('login');
        Route::post('/login-user', 'loginUser')->name('auth.login-user');

        // Register
        Route::get('/register/user', 'registerPage')->name('auth.registerUserPage');
        Route::post('/register-user', 'registerUser')->name('auth.register-user');
        Route::get('/register/company', 'registerCompanyPage')->name('auth.registerCompanyPage');
        Route::post('/register-company', 'registerCompany')->name('auth.register-company');


        // logout
        Route::post('/logout', 'logout')->name('auth.logout');
    });

Route::get('/title', [TitleController::class, 'getAllTitle'])->name('title.getAll');

Route::post('/apply_job', [ApplyJobController::class, 'insertApplyJob'])->name('apply_job.add');
Route::put('/apply_job', [ApplyJobController::class, 'updateApplyJob'])->name('apply_job.edit');

// USER
Route::middleware(['auth'])->group(function () {
    Route::controller(DashboardController::class)
        ->name('dashboard.')
        ->group(function () {
            Route::get('user/dashboard', 'index')->name('home');
        });

    Route::controller(JobController::class)
        ->name('job.')
        ->group(function () {
            Route::get('user/job', 'userIndexPage')->name('userIndexPage');
            Route::get('user/job/{id}', 'userDetailPage')->name('userDetailPage');
        });

    Route::get('/history', [ApplyJobController::class, 'historyPage'])->name('apply_job.historyPage');
});

// COMPANY
Route::middleware(['auth:company'])->name('company.')->group(function () {
    Route::controller(JobController::class)
        ->name('job.')
        ->group(function () {
            Route::get('company/job', 'companyIndexPage')->name('indexPage');
            Route::get('company/job/add', 'companyAddPage')->name('addPage');
            Route::get('company/job/{id}', 'companyDetailPage')->name('detailPage');

            // api route
            Route::post('api/job', 'insertJob')->name('api.insert');
            Route::delete('api/job/{id}', 'deleteJob')->name('api.delete');
        });
});
