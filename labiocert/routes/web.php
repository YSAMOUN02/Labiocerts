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

Route::post('/admin/service/submit', [service_backendController::class, 'service_submit']);
Route::get('/admin/service', [service_backendController::class, 'service_show']);
Route::put('/admin/service/update/{id}', [service_backendController::class, 'service_update']);
Route::delete('/admin/service/delete/{id}', [service_backendController::class, 'destroy']);
Route::get('/admin/service/category/{service_id}', [service_backendController::class, 'showServiceCategory']);

Route::post('/admin/service/categorysubmit', [service_backendController::class,'category_submit']);
Route::get('/admin/service/service-category/{service_id}', [service_backendController::class, 'category_show'])->name('backend.service-category'); 
Route::put('/admin/service/categoryupdate/{id}', [service_backendController::class, 'category_update']);
Route::delete('/admin/service/categorydelete/{id}', [service_backendController::class, 'category_destroy']);

Route::get('/admin/logoClient', [logo_clientController::class, 'logoClient']);
Route::get('/admin/advertising', [advertisingController::class, 'advertising_show']);
Route::get('/admin/quote/view', [quoteController::class, 'quote_show']);

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


