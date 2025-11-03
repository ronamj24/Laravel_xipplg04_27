<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\StudentController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::prefix('admin')->name('admin.')->group(function () {
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');  <-- KOMENTAR DULU
    Route::resource('students', StudentController::class);
});