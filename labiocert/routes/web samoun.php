<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ServiceController; 
use App\Http\Controllers\frontend\MediaController;
use App\Http\Controllers\frontend\LocationController;

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\logo_clientController;
use App\Http\Controllers\backend\service_backendController;
use App\Http\Controllers\backend\advertisingController;
use App\Http\Controllers\backend\media_backendController;
use App\Http\Controllers\backend\quoteController;
use Illuminate\Support\Facades\Route;




// Back End

Route::get('/login', [adminController::class, 'login']);
Route::get('/admin', [adminController::class, 'admin']);
Route::get('/admin/service', [service_backendController::class, 'service_show']);
Route::get('/admin/service/category', [service_backendController::class, 'service_category']);
Route::get('/admin/service/category/parameter', [service_backendController::class, 'service_parameter']);
Route::get('/admin/logoClient', [logo_clientController::class, 'logoClient']);

Route::get('/admin/advertising', [advertisingController::class, 'advertising_show']);

Route::get('/admin/quote/view', [quoteController::class, 'quote_show']);
Route::get('/admin/media/add', [media_backendController::class, 'media_add']);
Route::post('/admin/media/submit', [media_backendController::class, 'media_add_submit']);





// frontend

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


