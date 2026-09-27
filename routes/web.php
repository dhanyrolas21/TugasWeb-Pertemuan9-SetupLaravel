<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// 3 Route Custom (Requirement 4)
Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);

// Bonus Route Parameter
Route::get('/hello/{nama?}', [PageController::class, 'hello']);