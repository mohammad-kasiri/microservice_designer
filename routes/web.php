<?php

use Illuminate\Support\Facades\Route;

Route::get('/',     [\App\Http\Controllers\FunctionalityController::class, 'index']);
Route::post('/add', [\App\Http\Controllers\FunctionalityController::class, 'add']);
