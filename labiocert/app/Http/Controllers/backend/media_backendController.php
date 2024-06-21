<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class media_backendController extends Controller
{

    public function media_add(){
        return view('backend.add-media');
    }

    public function media_add_submit(Request $request){
        return $request;
    }
}
