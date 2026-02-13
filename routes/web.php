<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\MainController::class, 'home'])->name('home');
Route::post('/generate-exercises', [App\Http\Controllers\MainController::class, 'generateExercises'])->name('generate-exercises');
Route::get('/print-exercises', [App\Http\Controllers\MainController::class, 'printexercises'])->name('print-exercises');
Route::get('/export-exercises', [App\Http\Controllers\MainController::class, 'exportExercises'])->name('export-exercises');