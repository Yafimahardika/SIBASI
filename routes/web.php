<?php

use App\Http\Controllers\NasabahController;
use App\Http\Controllers\ProfileController;
use App\Models\Nasabah;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// =============================================================
Route::get('/nasabah', [NasabahController::class, 'index'])->name('nasabah.index');

Route::get('/nasabah/tambah', [NasabahController::class, 'tambah'])->name('nasabah.tambah');

Route::post('/nasabah/store', [NasabahController::class, 'store'])->name('nasabah.store');
// =============================================================

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
