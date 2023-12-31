<?php

use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Ruta para la página web (Ruta de inicio)
Route::get('/', [CategoryController::class, 'index'])->name('webClinica.index');

//Ruta pdf
Route::get('/paciente', [PatientController::class, 'reportePDF'])->name('paciente.pdf');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
