<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class quoteController extends Controller
{

    public function quote_show(){
        return view('backend.quote-req');
    }
}
