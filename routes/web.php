<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('/');
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('daftar', [LoginController::class, 'daftar'])->name('daftar');

//login
Route::post('DaftarStore', [LoginController::class, 'store'])->name('DaftarStore');
Route::post('LoginStore', [LoginController::class, 'Loging'])->name('LoginStore');
Route::post('Logout', [LoginController::class, 'Logout'])->name('logout');

//user login
Route::prefix('/User')->middleware(['AuthMiddleware'])->group(function () {
Route::get('Home', [UserController::class, 'index'])->name('userHome');
});

//admin login
Route::prefix('SuperAdmin')->middleware(['SuperAdminMiddleware'])->group(function () {
    Route::get('Home', [SuperAdminController::class, 'index'])->name('SuperAdminHome');
});
