<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ServiceController; 
use App\Http\Controllers\frontend\MediaController;
use App\Http\Controllers\frontend\LocationController;

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\advertisingController;
use App\Http\Controllers\backend\logo_clientController;
use App\Http\Controllers\backend\quoteController;
use App\Http\Controllers\backend\service_backendController;

use Illuminate\Support\Facades\Route;





// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'homepage']);
Route::get('/service', [ServiceController::class, 'service']);
Route::get('/media', [MediaController::class, 'media']);
Route::get('/location', [LocationController::class, 'location']);


// Backend 

Route::get('/login', [adminController::class, 'login']);
Route::get('/admin', [adminController::class, 'admin']);
Route::get('/admin/service', [service_backendController::class, 'service_show']);
Route::get('/admin/service/category', [service_backendController::class, 'service_category']);
Route::get('/admin/service/category/parameter', [service_backendController::class, 'service_parameter']);
Route::get('/admin/logoClient', [logo_clientController::class, 'logoClient']);

Route::get('/admin/advertising', [advertisingController::class, 'advertising_show']);

Route::get('/admin/quote/view', [quoteController::class, 'quote_show']);