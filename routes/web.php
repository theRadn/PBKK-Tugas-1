<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/agent/{tema?}', [PageController::class, 'agent'])->name('agent.idea');
Route::get('/hitung/{a?}/{b?}/{operation?}', [CalculatorController::class, 'calculate'])->name('calculator');

Route::prefix('dashboard')->name('dashboard.')->group(function(){
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/mahasiswa/{nrp}', [PageController::class, 'mahasiswaDetail'])
        ->where('nrp', '[0-9]{10}')
        ->name('mahasiswa.detail');
});

Route::fallback(function () {
    return view('errors.404');
});

