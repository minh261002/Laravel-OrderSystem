<?php

use App\Http\Controllers\Backend\Auth\AdminProfileController;
use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    route::get('login', [AuthController::class, 'index'])->name('admin.login');
    route::post('login', [AuthController::class, 'login'])->name('admin.login.post');

    Route::middleware(['admin.auth', 'admin.role'])->group(function(){
        Route::get('', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');

        Route::prefix('profile')->group(function () {
            Route::get('', [AdminProfileController::class, 'index'])->name('admin.profile');
        });
    });
});