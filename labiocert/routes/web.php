<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ServiceController; 
use App\Http\Controllers\frontend\MediaController;
use App\Http\Controllers\frontend\LocationController;

use App\Http\Controllers\backend\adminController;
use App\Http\Controllers\backend\logo_clientController;
use App\Http\Controllers\backend\service_backendController;
use App\Http\Controllers\backend\advertisingController;
use App\Http\Controllers\backend\category_mediaController;
use App\Http\Controllers\backend\media_backendController;
use App\Http\Controllers\backend\quoteController;
use App\Models\Media;
use Illuminate\Support\Facades\Route;

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




// Back End

Route::get('/login', [adminController::class, 'login']);
Route::get('/admin', [adminController::class, 'admin']);

// Services
Route::get('/admin/service', [service_backendController::class, 'service_show']);
// Route::get('/admin/service/category', [service_backendController::class, 'service_category']);
// Route::get('/admin/service/category/parameter', [service_backendController::class, 'service_parameter']);
// Route::post('/admin/service', [service_backendController::class, 'store']);
// Route::put('/admine/service/{id}', [service_backendController::class, 'update']);
// Route::delete('/admin/service/{id}', [service_backendController::class, 'destroy']);
// Route::post('/admin/service/submit', [service_backendController::class, 'service_submit']);

// Route::put('/admin/service/update/{id}', [service_backendController::class, 'service_update']);
// Route::delete('/admin/service/delete/{id}', [service_backendController::class, 'destroy']);
// Route::get('/admin/service/category/{service_id}', [service_backendController::class, 'showServiceCategory']);




// Advertising
Route::get('/admin/advertising', [advertisingController::class, 'advertising_show']);


// Quote
Route::get('/admin/quote/view', [quoteController::class, 'quote_show']);


// Media
Route::get('/admin/media/add', [media_backendController::class, 'media_add']);
Route::post('/admin/media/submit', [media_backendController::class, 'media_add_submit']);
Route::get('/admin/media/list', [media_backendController::class, 'media_show']);
Route::get('/admin/media/update/{id}', [media_backendController::class, 'media_update']);
Route::post('/admin/media/update/submit', [media_backendController::class, 'media_update_submit']);
Route::post('/admin/media/delete/submit', [media_backendController::class, 'media_delete']);

Route::get('/admin/media/slide/list', [media_backendController::class, 'slide_list']);  //Slide View
Route::post('/admin/media/slide/submit', [media_backendController::class, 'slide_add']);  // Add Slide
Route::post('/admin/media/slide/update/submit', [media_backendController::class, 'slide_update']);  // Add Slide
Route::post('/admin/media/slide/delete/submit', [media_backendController::class, 'slide_delete']);
// Category Media

Route::get('/admin/media/category/id={id}', [category_mediaController::class, 'media_category']);                //view
Route::post('/admin/media/category/add/submit', [category_mediaController::class, 'media_category_add']);        //Add  AND  Update
Route::post('/admin/media/category/delete/submit', [category_mediaController::class, 'media_category_delete']);  //Delete


// Logo Client
Route::get('/admin/logoClient/{id}', [logo_clientController::class, 'logoClient']);                         //view
Route::post('/admin/client/logo/add/submit', [logo_clientController::class, 'logo_client_add_submit']);     //Add  AND  Update
Route::post('/admin/logo_client/delete/submit', [logo_clientController::class, 'logo_client_delete_submit']);  //delete
 

// frontend





Route::post('/admin/service/categorysubmit', [service_backendController::class,'category_submit']);
Route::get('/admin/service/service-category/{service_id}', [service_backendController::class, 'category_show'])->name('backend.service-category'); 
Route::put('/admin/service/categoryupdate/{id}', [service_backendController::class, 'category_update']);
Route::delete('/admin/service/categorydelete/{id}', [service_backendController::class, 'category_destroy']);

Route::get('/admin/logoClient', [logo_clientController::class, 'logoClient']);
Route::get('/admin/advertising', [advertisingController::class, 'advertising_show']);
Route::get('/admin/quote/view', [quoteController::class, 'quote_show']);


Route::get('/media/page={id}', [MediaController::class, 'media_detail']);

