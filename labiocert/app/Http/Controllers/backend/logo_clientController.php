<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class logo_clientController extends Controller
{
    public function logoClient(){
        return view('backend.client-logo');
    }
}
