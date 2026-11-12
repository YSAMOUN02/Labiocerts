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
use App\Http\Controllers\frontend\quote_clientController;
use App\Http\Controllers\backend\userController;
use App\Http\Controllers\backend\website_infoController;

use App\Models\ClientLogo;

use Illuminate\Support\Facades\Route;

Route::get('/login', [adminController::class, 'login'])->name('login');
Route::POST('/admin/login/submit', [adminController::class, 'login_submit']);
//////////////////////////////////////////////////// Back End/////////////////////////////////////////////////////////////////////////
    Route::middleware(['auth'])->group(function () {

            // Dashboard
            Route::get('/admin', [adminController::class, 'admin']);
            Route::get('/admin/logout', [adminController::class, 'logout']);

            // Advertising
            Route::get('/admin/advertising', [advertisingController::class, 'advertising_show']);

            // Quote
            Route::get('/admin/quote/view', [quoteController::class, 'quote_show']);  // View all quote DATA
            Route::get('/admin/quote/view/page={page}', [quoteController::class, 'quote_show_page']);   // View Quote by Page
            Route::get('/admin/quote/mark/all', [quoteController::class, 'mark_all']);   // Mark all unread message


            Route::get('/admin/quote/view/quote_no={id}', [quoteController::class, 'view_quote']);  // View Quote Detail
            Route::post('/admin/quote/mail/change', [quoteController::class, 'change_quote_reciever']);  // Change mail Distination
            Route::post('/admin/quote/delete', [quoteController::class, 'delete_quote']);  // Change mail Distination



            // Service ?????????????????????????????????????
            Route::delete('/admin/service/delete/{id}', [service_backendController::class, 'destroy']);




            Route::get('/admin/service={service_id}/category={category_id}/list={mainlist_id}', [service_backendController::class, 'service_view']);              //All Service



            // Mian List Add
            Route::post('/admin/service/mainlist/add/submit', [service_backendController::class, 'add_mainList']);

             // Mian List Add
             Route::post('/admin/service/sublist/add/submit', [service_backendController::class, 'add_subList']);

            // Category Add .
            Route::post('/admin/service/category/add/submit', [service_backendController::class, 'add_category']);

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
            Route::put('/admin/logoClient/update/{id}', [logo_clientController::class, 'update']);


            Route::get('/admin/user/list', [userController::class, 'list_user']);   // Go to add view
            Route::post('/admin/user/delete/submit', [userController::class, 'delete_user']);   // Go to add view
            Route::get('/admin/user/update/id={id}', [userController::class, 'update_user']);   // Go to add view

            // Website Info
            Route::get('/webinfo', [website_infoController::class, 'website_info']);


            // USER
            Route::get('/admin/user/add', [userController::class, 'add_user']);   // Go to add view
            Route::POST('/admin/user/add/submit', [userController::class, 'user_add_submit']);   // Submit add
            Route::POST('/admin/user/update/submit', [userController::class, 'user_update_submit']);   // Submit add

    });


/////////////////////////////////////// frontend////////////////////////////////////////////////////////////////////////
Route::get('/', [HomeController::class, 'homepage']);
Route::get('/welcomelabiocert', [HomeController::class, 'welcomelabiocert']);

// All service
Route::get('/service', [ServiceController::class, 'service']);
// Service each
Route::get('/service/{id}', [ServiceController::class, 'service_detail']);




Route::get('/service/pharmaceutical/quote', [ServiceController::class, 'quote']);

Route::get('/service/category/{id}', [ServiceController::class, 'service_detail']);


Route::get('/service={service_id}/detail/category={category_id}', [ServiceController::class, 'parameter_detail']);


Route::get('/service/detail/{category}/{id}', [ServiceController::class, 'service_parameter_view']);



Route::get('/services/watertesting/analysisfees', [ServiceController::class, 'analysisfees']);
Route::get('/media', [MediaController::class, 'media']);
Route::get('/media/events', [MediaController::class, 'events']);
Route::get('/media/news', [MediaController::class, 'news']);
Route::get('/media/newyear', [MediaController::class, 'newyear']);
Route::get('/media/kinal', [MediaController::class, 'kinal']);
Route::get('/media/ppmandconfirel', [MediaController::class, 'ppmandconfirel']);
Route::get('/location', [LocationController::class, 'location']);
Route::post('/contact/sending', [LocationController::class, 'contact_send'])->middleware('throttle:5,1'); // Contact form (email only)

// Media Detail
Route::get('/media/page={id}', [MediaController::class, 'media_detail']);

Route::post('/quote/sending', [quote_clientController::class, 'quote_send']);


Route::get('/video', [HomeController::class, 'video_view']);














