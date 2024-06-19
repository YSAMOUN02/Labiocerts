<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ServiceController; 
use App\Http\Controllers\frontend\MediaController;
use App\Http\Controllers\frontend\LocationController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'homepage']);
Route::get('/service', [ServiceController::class, 'service']);
Route::get('/media', [MediaController::class, 'media']);
Route::get('/location', [LocationController::class, 'location']);

