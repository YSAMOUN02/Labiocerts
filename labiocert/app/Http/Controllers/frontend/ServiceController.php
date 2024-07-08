<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;
use App\Parameter;
use App\Models\Service;
use App\Models\ServiceParameter;
use App\Models\service_categories;
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
        $services = Service::all();
        $services_category = service_categories::all();
        $services_parameter = ServiceParameter::all();
        return view('frontend.test-parameter', compact('services', 'services_category', 'services_parameter'));
    }
    public function foodtesting(){
        return view('frontend.food-testing');
    }
    public function analysisfeesforfood(){
        $services = Service::all();
        $services_category = service_categories::all(); 
        $services_parameter = ServiceParameter::all();
        return view('frontend.food-analysis', compact('services', 'services_category', 'services_parameter')); 
       
    }
    public function physicoanalysis(){
        $services = Service::all();
        $services_category = service_categories::all(); 
        $services_parameter = ServiceParameter::all();
        return view('frontend.physico-analysis', compact('services', 'services_category', 'services_parameter'));
    }
    public function analysisfees(){
        $services = Service::all();
        $services_category = service_categories::all(); 
        $services_parameter = ServiceParameter::all();
        return view('frontend.analysis-fees', compact('services', 'services_category', 'services_parameter')); 
    }
    
}
