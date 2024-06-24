<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\ServiceCategory;
use App\Models\Service;

class service_backendController extends Controller
{
/**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
    public function service_show()
    {
        $services = Service::all();
        return view('backend.service', compact('services'));
    }
      /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'reference' => 'required',
            'status' => 'required',
        ]);
        Service::create($request->all()); 
        return redirect()->route('backend.service')->with('success', 'Service created successfully.'); 
        
    }

    public function service_submit(Request $request){
        // return $request;

        $data = new Service();
        $data->no = $request->input('no');
        $data->title = $request->input('service');
        $data->status = $request->input('status');
        $data->reference = $request->input('reference');       
        $data->save();

        return redirect('/admin/service');
    }
    /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'reference' => 'required',
            'status' => 'required',
        ]);

        $services = Service::find($id);
        $services->update($request->all());

        return redirect()->route('backend.service')->with('success', 'Service update succesfully.');
    }
    /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();

        return redirect()->route('backend.service')->with('success', 'Service deleted successfully');
    }
  
    public function service_category()
    {
        return view('backend.service-category');
    }

    public function service_parameter()
    {
        // return 123;
        return view('backend.service-parameter');
    }
}
