<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;

Route::inertia('/', 'Welcome')->name('home');
Route::get('/hitung/{a?}/{b?}/{operation?}', [CalculatorController::class, 'calculate'])->name('calculator');
