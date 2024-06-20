<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;
use App\Parameter;
class ServiceController extends Controller
{
    public function service(){
        // return 123;
        return view('frontend.service'); 
    }
 
    public function pharmaceutical(){
        return view('frontend.pharmaceutical');
    }
    public function watertesting(){
        return view('frontend.water-testing');
    }
    public function quote(){
        return view('frontend.quote'); 
    }
    public function testparameter(){
        return view('frontend.test-parameter');
    }
    public function foodtesting(){
        return view('frontend.food-testing');
    }
    public function analysisfeesforfood(){
        return view('frontend.food-analysis'); 
    }
    public function physicoanalysis(){
        return view('frontend.physico-analysis');
    }
    public function analysisfees(){
        return view('frontend.analysis-fees'); 
    }
    
}
