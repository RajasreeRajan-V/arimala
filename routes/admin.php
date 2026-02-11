<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

use Illuminate\Support\Facades\Route;

Route::name('admin.')->group(function () {
    Route::post("/do-login", [LoginController::class,'doLogin'])->name('do.login');
    Route::middleware(['auth:admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
        
        Route::resource('about-us', AboutUsController::class);
        Route::resource('services', ServicesController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('contactus', ContactusController::class);

        Route::post('/contact-us/{id}/reply',  [ContactUsController::class, 'reply'] )->name('contactus.reply');

        Route::resource('departments', DepartmentsController::class);
        Route::resource('doctors', DoctorController::class);
        Route::resource('careers', CareerController::class);

        Route::resource('reviews', ReviewController::class);
        Route::resource('blogs', BlogController::class);
});
});