<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDO;

class LocationController extends Controller
{
    public function location(){

        return view('frontend.location'); 
      
    }
}
