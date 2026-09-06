<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/project-idea', [PageController::class, 'project'])->name('project');
Route::get('/hitung/{a?}/{b?}/{operation?}', [CalculatorController::class, 'calculate'])->name('calculator');
