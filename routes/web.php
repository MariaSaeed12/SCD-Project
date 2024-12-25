<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\DoctorsController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\AdminController; // Add AdminController import
use App\Http\Controllers\SearchController;  // Add AdminController import


// Home page route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Contact page route
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// About page route
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Doctors page route
Route::get('/doctors', [DoctorsController::class, 'index'])->name('doctors');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/search', [SearchController::class, 'search'])->name('search');


// Admin dashboard route with middleware
Route::middleware(['auth', 'admin'])->group(function () {  // Protect admin routes with 'auth' and 'admin' middleware
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
});

// Dashboard route with middleware
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes with middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

// Authentication routes
require __DIR__.'/auth.php';
