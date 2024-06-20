<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function homepage(){
        // return 123;
        return view('frontend.homepage');
    }
    public function welcomelabiocert(){
        return view('frontend.welcome-labio');
    }
}
