<?php

use App\Http\Controllers\Frontend\Auth\ForgotPasswordController;
use App\Http\Controllers\Frontend\Auth\LoginController;
use App\Http\Controllers\Frontend\Auth\LogoutController;
use App\Http\Controllers\Frontend\Auth\RegisterController;
use App\Http\Controllers\Frontend\Auth\ResetPasswordController;
use App\Http\Controllers\Frontend\Home\HomeController;
use App\Http\Controllers\Frontend\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'login'])->name('login.post');

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('register', [RegisterController::class, 'register'])->name('register.post');

Route::prefix('password')->group(function(){
    Route::get('verify-email', [ForgotPasswordController::class, 'index'])->name('password.email');
    Route::post('verify-email', [ForgotPasswordController::class, 'sendMail'])->name('password.email.send');
    Route::get('reset/{token}', [ResetPasswordController::class, 'index'])->name('password.reset');
    Route::post('reset', [ResetPasswordController::class, 'reset_password'])->name('password.store');
});

Route::middleware('auth')->group(function(){

    Route::get('logout', [LogoutController::class, 'index'])->name('logout');

    Route::prefix('profile')->group(function(){
        Route::get('', [ProfileController::class, 'index'])->name('profile');
    });

});