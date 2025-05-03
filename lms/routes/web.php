<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard route dengan middleware role
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route khusus untuk setiap role, dengan middleware 'role'
Route::middleware(['auth', 'role:siswa'])->get('/dashboard/siswa', [SiswaController::class, 'index']);
Route::middleware(['auth', 'role:guru'])->get('/dashboard/guru', [GuruController::class, 'index']);
Route::middleware(['auth', 'role:admin'])->get('/dashboard/admin', [AdminController::class, 'index']);

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
