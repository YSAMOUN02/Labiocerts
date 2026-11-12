<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\service_categories;
use App\Models\Service;
use App\Models\ServiceParameter;
use App\Models\MainList;
use App\Models\Sublist;
use Illuminate\Support\Facades\DB;

class service_backendController extends Controller
{
    public function service_submit(Request $request)
    {
        $validatedData = $request->validate([
            'no' => 'required',
            'service' => 'required',
            'status' => 'required|in:0,1'
        ]);
        $maxNo = Service::max('no');
        $nextNo = $maxNo + 1;
        $service = new Service();
        $service->no = $nextNo;
        $service->title = $validatedData['service'];
        $service->status = $validatedData['status'];
        $service->save();
        return redirect('/admin/service');
    }

    public function service_view($service_id,$category_id,$mainlist_id)
    {
        // Veiw Service Only  (No Req)
        if($service_id == 'NA'){
            $service = Service::orderby('id','desc')->get();


            return view('backend.service',[
                'services' => $service,
            ]);
        }else{

            $sql = Service::orderby('no','desc');
            $sql->where('id', $service_id);

            // View Category Only (Req Category)
            if($category_id == 'NA'){

                $sql->with(['categories' => function ($query) {
                    $query->orderby('id', 'desc');

                }]);

                $services =  $sql->get();

                 // Last No
                 $last_no = 1;
                 $temp = service_categories::orderby('id','desc')
                 ->where('service_id',$service_id)
                 ->select('no')->first();
                 if($temp){
                     $last_no = $temp->no+1;
                 }

                return view('backend.service-category',[
                    'services' => $services,
                    'no' => $last_no
                ]);

            }else{

                // View Main List Only  (Req Main List)

                if($mainlist_id =='NA'){

                    $sql->with(['categories' => function ($query) use($category_id) {
                        $query->orderby('id', 'desc')
                        ->where('id',$category_id)
                        ->with(['mainlist' => function ($query) {

                            $query->orderby('id', 'desc');

                        }]);
                    }]);
                    $services =  $sql->get();

                    // Last No
                    $last_no = 1;
                    $temp = MainList::orderby('id','desc')->select('no')
                    ->where('category_id',$category_id)
                    ->first();
                    if($temp){
                        $last_no = $temp->no+1;
                    }

                    return view('backend.service-main-list',[
                        'services' => $services,
                        'no' => $last_no
                    ]);
                }else{
                     // View Sub List Only  (Req Sub List)

                    $sql->with(['categories' => function ($query) use($category_id,$mainlist_id) {

                        $query->orderby('id', 'desc')
                            ->where('id',$category_id)
                            ->with(['mainlist' => function($query)   use($mainlist_id) {
                                    $query->orderby('id', 'desc')
                                    ->where('id',$mainlist_id)
                                        ->with(['sublist' => function($query) {
                                        $query->orderby('id', 'desc');


                                }
                            ]);
                                }
                            ]);
                    }]);
                    $services =  $sql->get();

                      // Last No
                      $last_no = 1;
                      $temp = Sublist::orderby('id','desc')
                      ->where('main_list_id',$mainlist_id)
                      ->select('no')->first();
                      if($temp){
                          $last_no = $temp->no+1;
                      }


                      return view('backend.service-sub-list',[
                          'services' => $services,
                          'no' => $last_no
                      ]);
                }
            }
        }

    }

    public function category_submit(Request $request)
    {

        $newNo = $request->no??'1';
        $title = $request->title_category??'NA';
        $status = $request->status??1;

        $new_category = new service_categories();
        $new_category->no= $newNo;
        $new_category->category= $title;
        $new_category->description= $request->description;
        $new_category->reference= $request->reference;
        $new_category->status = $status;
        // Service ID
        $new_category->service_id  = $request->service_id;
        $service_id = $request->service_id;



        if($stored){
            return redirect('/admin/service/service-category/'.$service_id)->with('success','Create Service category success');
        }else{
            return redirect('/admin/service/service-category/'.$service_id)->with('fail','Ops. Operation fail.');
        }


    }

    public function add_mainList(Request $request){
        $service_id = $request->service_id;

        $no = 1;
        if($request->no ==''){
           $temp = MainList::orderby('id','desc')->select('no')->first();

           if(!empty($temp)){
                $no = $temp->no+1;
           }else{
                $no = 1;
           }
        }else{
            $no = $request->no;
        }

        $main_list = new MainList();
        $main_list->no = $no;
        $main_list->list_name = $request->mainlist;
        $main_list->category_id = $request->category_id;
        $main_list->status = $request->status;
        $main_list->type = $request->type;
        $main_list->created_at = today();
        $stored = $main_list->save();

        // return 123;
        if($stored){
            return redirect('/admin/service='.$service_id.'/category='.$request->category_id.'/list=NA')->with('success','Added Main List success');
        }else{
            return redirect('/admin/service='.$service_id.'/category='.$request->category_id.'/list=NA')->with('fail','Ops. Operation fail.');
        }

    }
    public function add_category(Request $request){
        $service_id = $request->service_id;

        $no = 1;
        if($request->no ==''){
           $temp = MainList::orderby('id','desc')->select('no')->first();

           if(!empty($temp)){
                $no = $temp->no+1;
           }else{
                $no = 1;
           }
        }else{
            $no = $request->no;
        }

        // New Object
        $service_category = new service_categories();
        $service_category->no = $no;
        $service_category->category = $request->title_category;
        $service_category->status =  $request->status;

        $service_category->service_id =  $service_id;

        // Save
        $stored = $service_category->save();

        // return 123;
        if($stored){
            return redirect('/admin/service='.$service_id.'/category=NA/list=NA')->with('success','Added Main List success');
        }else{
            return redirect('/admin/service='.$service_id.'/category=NA/list=NA')->with('fail','Ops. Operation fail.');
        }

    }


    public function add_subList(Request $request){
        $service_id = $request->service_id;
        $category_id = $request->category_id;
        $no = 1;
        if($request->no ==''){
           $temp = MainList::orderby('id','desc')->select('no')->first();

           if(!empty($temp)){
                $no = $temp->no+1;
           }else{
                $no = 1;
           }
        }else{
            $no = $request->no;
        }

        // New Object
        $service = new Sublist();
        $service->no = $no;
        $service->name = $request->sublist;
        $service->duration = $request->duration;
        $service->method =  $request->method;
        $service->main_list_id = $request->mainlist_id;

        // duration
        // method
        // Save
        $stored = $service->save();

        // return 123;
        if($stored){
            return redirect('/admin/service='.$service_id.'/category='.$category_id.'/list='.$request->mainlist_id)->with('success','Added Main List success');
        }else{
            return redirect('/admin/service='.$service_id.'/category='.$category_id.'/list=NA'.$request->mainlist_id)->with('fail','Ops. Operation fail.');
        }

    }




}
