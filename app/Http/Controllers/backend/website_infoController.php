<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class website_infoController extends Controller
{

    public function website_info(){
        return view('backend.web-info');
    }
}
