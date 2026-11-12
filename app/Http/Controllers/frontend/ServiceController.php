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
    public function parameter_detail($service_id,$category_id){

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

        $sql = Service::orderby('no','asc');
        $sql->where('id', $service_id);
        $sql->with(['categories' => function ($query) use($category_id){
            $query->orderby('id', 'asc')
            ->where('id', $category_id)
            ->with(['mainlist' => function ($query) use($category_id){
                $query->orderby('id', 'asc')

                ->with(['sublist' => function ($query){
                    $query->orderby('id', 'asc');
                    // ->select('id','name','duration','method','main_list_id');

                }]);
            }]);
        }]);
      $data = $sql->get();


        return view('frontend.test-parameter',['collection_lastest' => $collection_lastest,'data' =>$data]);
    }





    public function service_detail($id){



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
        // Static Service
        if($id == 1){
            $services_category = service_categories::where('service_id',$id)
            ->select('category','no','id','service_id')
            ->orderby('no','asc')
            ->get();

            return view('frontend.pharmaceutical',['collection_lastest' => $collection_lastest , 'services_category' => $services_category]);
        }elseif($id == 2){
            $services_category = service_categories::where('service_id',$id)
            ->select('category','no','id','service_id')
            ->orderby('no','asc')
            ->get();

            return view('frontend.food-testing',['collection_lastest' => $collection_lastest , 'services_category' => $services_category]);
        }elseif($id == 3    ){
            $services_category = service_categories::where('service_id',$id)
            ->select('category','no','id','service_id')
            ->orderby('no','asc')
            ->get();

            return view('frontend.water-testing',['collection_lastest' => $collection_lastest , 'services_category' => $services_category]);
        }



    }




    public function service_parameter_view($category,$id){


        $services = Service::all();
        $services_category = service_categories::all();
        $services_parameter = ServiceParameter::all();
        return view('frontend.food-analysis', compact('services', 'services_category', 'services_parameter'));

    }


}
