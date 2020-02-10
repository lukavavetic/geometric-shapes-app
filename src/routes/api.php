<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TriangleController;
use App\Http\Controllers\CircleController;

Route::get('/triangle/{a}/{b}/{c}', [TriangleController::class, 'calculate']);
Route::get('/circle/{radius}', [CircleController::class, 'calculate']);