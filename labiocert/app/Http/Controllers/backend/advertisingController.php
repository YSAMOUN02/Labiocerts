<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class advertisingController extends Controller
{
    public function advertising_show(){
        return view('backend.advertising');
    }
}
