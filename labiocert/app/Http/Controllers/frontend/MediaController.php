<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function media(){
        return view('frontend.media'); 
    }
    public function events(){
        return view('frontend.events');
    }
    public function news(){
        return view('frontend.news');
    }
    public function newyear(){
        return view('frontend.event-one'); 
    }
    public function launchofKEM(){
        return view('frontend.event-two'); 
    }
    public function kinal(){
        return view('frontend.event-three');
    }
    public function ppmandconfirel(){
        return view('frontend.ppm-confirel'); 
    }
}