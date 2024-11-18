<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\MediaController;
use App\Http\Controllers\frontend\LocationController;

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\logo_clientController;
use App\Http\Controllers\backend\service_backendController;
use App\Http\Controllers\backend\advertisingController;
use App\Http\Controllers\backend\quoteController;
use Illuminate\Support\Facades\Route;
use App\Models\Service;
use App\Models\ServiceCategories;


// Back End

Route::get('/login', [adminController::class, 'login']);
Route::get('/admin', [adminController::class, 'admin']);



Route::get('/admin/logoClient', [logo_clientController::class, 'logoClient']);
Route::get('/admin/advertising', [advertisingController::class, 'advertising_show']);
Route::get('/admin/quote/view', [quoteController::class, 'quote_show']);

// frontend

