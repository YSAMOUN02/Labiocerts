<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{

    
    public function login(){
        // return 123 ;

        return view('backend.login');
    }
    public function admin(){
        return view('backend.dashboard-admin');
    }
}