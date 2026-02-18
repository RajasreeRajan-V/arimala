<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CareerAapplicationController;

// Route::get('/', function () {
//     return view('customer.index');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboardS');



Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/service', [UserController::class, 'service'])->name('service');
Route::get('/gallery', [UserController::class, 'gallery'])->name('gallery');
// Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/doctors', [UserController::class, 'doctors'])->name('doctors');
Route::get('/departments', [UserController::class, 'departments'])->name('departments');


Route::resource('ContactUs', ContactUsController::class);

Route::resource('apply', CareerAapplicationController::class);

Route::get("/career", [UserController::class, 'career'])->name('career');

require __DIR__.'/auth.php';
