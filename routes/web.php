<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CondominiumController;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});


// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Dashboard
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
         ->name('dashboard.index');
});


// Condominiums
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/condominiums', [CondominiumController::class, 'index'])
         ->name('condominiums.index');
    Route::get('/condominiums/details', [CondominiumController::class, 'details'])
         ->name('condominiums.details');
});


// Employees
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/employees', [EmployeeController::class, 'index'])
         ->name('employees.index');
});


require __DIR__.'/auth.php';
