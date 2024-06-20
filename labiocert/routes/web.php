<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ServiceController; 
use App\Http\Controllers\frontend\MediaController;
use App\Http\Controllers\frontend\LocationController;

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\logo_clientController;
use App\Http\Controllers\backend\service_backendController;

use Illuminate\Support\Facades\Route;





// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'homepage']);
Route::get('/service', [ServiceController::class, 'service']);
Route::get('/media', [MediaController::class, 'media']);
Route::get('/location', [LocationController::class, 'location']);


