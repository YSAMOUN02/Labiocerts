<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Categories;
use App\Models\Media;
use App\Parameter;
use App\Models\Service;
use App\Models\ServiceParameter;
use App\Models\service_categories;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function service(){
        // return 123;
        return view('frontend.service'); 
    }
 
    public function pharmaceutical(){
        $last = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
        ->with([
            'image' => function($query) {
                $query->select('post_id', 'name')->limit(1);
            }
        ])
        ->limit(3)
        ->orderby('id','desc')
        ->get();
        $collection_lastest = new Collection();

        foreach ($last as $item) {
            $collection_lastest->push((object)[
                'id'=>$item->id,
                'title' => $item->title,
                'created_at' => $item->created_at,
                'image' => $item->image ? $item->image->name : null,
               
            ]);
        }

        return view('frontend.pharmaceutical',['collection_lastest' => $collection_lastest]);
    }
    public function watertesting(){
        $last = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
        ->with([
            'image' => function($query) {
                $query->select('post_id', 'name')->limit(1);
            }
        ])
        ->limit(3)
        ->orderby('id','desc')
        ->get();
        $collection_lastest = new Collection();

        foreach ($last as $item) {
            $collection_lastest->push((object)[
                'id'=>$item->id,
                'title' => $item->title,
                'created_at' => $item->created_at,
                'image' => $item->image ? $item->image->name : null,
               
            ]);
        }

        return view('frontend.water-testing',['collection_lastest' => $collection_lastest]);
    }
    public function quote(){
        $last = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
        ->with([
            'image' => function($query) {
                $query->select('post_id', 'name')->limit(1);
            }
        ])
        ->limit(3)
        ->orderby('id','desc')
        ->get();
        $collection_lastest = new Collection();

        foreach ($last as $item) {
            $collection_lastest->push((object)[
                'id'=>$item->id,
                'title' => $item->title,
                'created_at' => $item->created_at,
                'image' => $item->image ? $item->image->name : null,
               
            ]);
        }
        return view('frontend.quote',['collection_lastest' => $collection_lastest]); 
    }
    public function testparameter(){
        $services = Service::all();
        $services_category = service_categories::all();
        $services_parameter = ServiceParameter::all();
        return view('frontend.test-parameter', compact('services', 'services_category', 'services_parameter'));
    }
    public function foodtesting(){
        $last = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
        ->with([
            'image' => function($query) {
                $query->select('post_id', 'name')->limit(1);
            }
        ])
        ->limit(3)
        ->orderby('id','desc')
        ->get();
        $collection_lastest = new Collection();

        foreach ($last as $item) {
            $collection_lastest->push((object)[
                'id'=>$item->id,
                'title' => $item->title,
                'created_at' => $item->created_at,
                'image' => $item->image ? $item->image->name : null,
               
            ]);
        }

        return view('frontend.food-testing',['collection_lastest' => $collection_lastest]);
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
