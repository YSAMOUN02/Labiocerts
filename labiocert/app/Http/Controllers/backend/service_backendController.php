<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class service_backendController extends Controller
{

    public function service_show(){
    
        return view('backend.service');
    }


    public function service_category(){
        return view('backend.service-category');
    }

    public function service_parameter(){
        // return 123;
        return view('backend.service-parameter');
    }
}
