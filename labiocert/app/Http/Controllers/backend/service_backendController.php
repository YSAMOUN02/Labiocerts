<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\service_categories;
use App\Models\Service;

class service_backendController extends Controller
{

    public function service_show()
    {
        $services = Service::all();
        return view('backend.service', compact('services'));
    }


    public function service_submit(Request $request)
    {

        $validatedData = $request->validate([
            'no' => 'required',
            'service' => 'required',
            'status' => 'required|in:0,1',
            'reference' => 'required',
        ]);

        $service = new Service();
        $service->no = $validatedData['no'];
        $service->title = $validatedData['service'];
        $service->status = $validatedData['status'];
        $service->reference = $validatedData['reference'];
        $service->save();
        return redirect('/admin/service');
    }

    public function service_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'reference' => 'required',
            'status' => 'required',
        ]);
        $statusMap = [
            'Active' => 1,
            'Inactive' => 0,
        ];
        $service = Service::find($id);
        if ($service) {
            $data = $request->all();
            if (isset($statusMap[$data['status']])) {
                $data['status'] = $statusMap[$data['status']];
            } else {
                return back()->withErrors(['status' => 'Invalid status value']);
            }
            $service->update($data);
        }
        return redirect('/admin/service');
    }


    public function destroy($id)
    {
        $service = Service::find($id);
        if ($service) {
            $service->delete();
            return redirect('/admin/service');
        } else {
            return redirect('/admin/service');
        }
    }

    //Category 
    public function showServiceCategory($id)
    {
        $service = Service::findOrFail($id);

        $services_category = service_categories::all(); // Ensure this line is present to pass the categories to the view
        return view('backend.service-category', compact('service', 'services_category'));
    }

    public function category_show($service_id)
    {
    $services_category = service_categories::where('service_id', $service_id)->get();
    return view('backend.service-category', compact('services_category'));
    }

    public function category_submit(Request $request)
    {
        $validatedData = $request->validate([
          
            'no' => 'required|integer',
            'category' => 'required|string|max:255',
            'status' => 'required|in:0,1',
        ]);
    
        $service_category = new service_categories();
       
        $service_category->no = $validatedData['no'];
        $service_category->title_category = $validatedData['category'];
        $service_category->status = $validatedData['status'];
        $service_category->save();
    
        return redirect('/admin/service/service-category');
    }


    // public function category_show()
    // {
    //    $services_category = Service_Category::all();
    //     return view('backend.service-category', compact('services_category'));
    // }

    //parameter
    public function service_parameter()
    {
        // return 123;
        return view('backend.service-parameter');
    }
}
