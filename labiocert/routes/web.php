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
Route::get('/welcomelabiocert', [HomeController::class, 'welcomelabiocert']); 
Route::get('/service', [ServiceController::class, 'service']);
Route::get('/service/pharmaceutical', [ServiceController::class,'pharmaceutical']);
Route::get('/service/pharmaceutical/quote', [ServiceController::class, 'quote']);
Route::get('/service/pharamaceutial/testparameter', [ServiceController::class, 'testparameter']); 
Route::get('/service/foodtesting', [ServiceController::class,'foodtesting']);
Route::get('/service/foodtesting/analysisfeesforfood', [ServiceController::class, 'analysisfeesforfood']); 
Route::get('/service/foodtesting/physicoanalysis', [ServiceController::class, 'physicoanalysis']); 
Route::get('/service/watertesting', [ServiceController::class,'watertesting']);
Route::get('/services/watertesting/analysisfees', [ServiceController::class,'analysisfees']);

Route::get('/media', [MediaController::class, 'media']);
Route::get('/media/events',[MediaController::class,'events']);
Route::get('/media/news',[MediaController::class, 'news']);
Route::get('/media/newyear',[MediaController::class,'newyear']);
Route::get('/media/launchofKEM', [MediaController::class,'launchofKEM']);
Route::get('/media/kinal', [MediaController::class,'kinal']);
Route::get('/media/ppmandconfirel',[MediaController::class,'ppmandconfirel']);
Route::get('/location', [LocationController::class, 'location']);

