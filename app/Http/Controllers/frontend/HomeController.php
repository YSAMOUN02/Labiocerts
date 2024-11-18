<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\clientlogo;
use App\Models\slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function homepage(){
        $slide = slide::all();


        $client_logo = clientlogo::orderby('id','desc')
        ->select('thumbnail','link')
        ->get();
        return view('frontend.homepage',['client_logo' => $client_logo, 'slide' => $slide]);
    }
    public function welcomelabiocert(){
        return view('frontend.welcome-labio');
    }
}
