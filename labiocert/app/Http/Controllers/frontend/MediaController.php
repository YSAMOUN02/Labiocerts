<?php

namespace App\Http\frontend\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function media(){
        return view('frontend.media'); 
    }
}
