<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\service_categories;
use App\Models\Service;
use App\Models\ServiceParameter;

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
        $maxNo = Service::max('no');
        $nextNo = $maxNo + 1;
        $service = new Service();
        $service->no = $nextNo;
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
            // Get the current no before deleting
            $deletedNo = $service->no;
            $service->delete();

            // Reorder the services to fill in the gap
            Service::where('no', '>', $deletedNo)
                ->decrement('no');

            return redirect('/admin/service');
        } else {
            return redirect('/admin/service');
        }
    }

    //Category 
    public function showServiceCategory($id)
    {
        $service = Service::findOrFail($id);
        $services_category = service_categories::where('service_id', $id)->get();

        foreach ($services_category as $index => $service_category) {
            $service_category->no = $index + 1;
            $service_category->save();
        }


        return view('backend.service-category', compact('service', 'services_category'));
    }

    public function category_show($service_id, $id)
    {
        $service = Service::findOrFail($id);
        $services_category = service_categories::where('service_id', $service_id)->get();
        return view('backend.service-category', compact('service', 'services_category'));
    }

    public function category_submit(Request $request)
    {
        $validatedData = $request->validate([
            'no' => 'required|integer',
            'title_category' => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'service_id' => 'required|integer',
        ]);

        $existingCategory = service_categories::where('no', $validatedData['no'])->where('service_id', $validatedData['service_id'])->first();

        if ($existingCategory) {
            return back()->withErrors(['no' => 'This number is already in use for the specified service.']);
        }

        $service_category = new service_categories();
        $service_category->no = $validatedData['no'];
        $service_category->title_category = $validatedData['title_category'];
        $service_category->status = $validatedData['status'];
        $service_category->service_id = $validatedData['service_id'];
        $service_category->save();

        return redirect()->route('backend.service-category', ['service_id' => $validatedData['service_id']]);
    }
    public function category_update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_category' => 'required|string|max:255',
            'status' => 'required|in:Active, Inactive',
        ]);

        $statusMap = [
            'Active' => 1,
            'Inactive' => 0,
        ];

        $service_category = service_categories::findOrFail($id);
        $service_category->title_category = $validatedData['title_category'];
        $service_category->status = $status = $statusMap[$validatedData['status']];
        $service_category->save();

        return redirect()->route('backend.service-category', ['service_id' => $service_category->service_id]);
    }
    public function category_destroy($id)
    {
        $service_category = service_categories::findOrFail($id);
        $service_id = $service_category->service_id;
        $service_category->delete();

        return redirect()->route('backend.service-category', ['service_id' => $service_id]);
    }
    //parameter
    public function showCategoryParameter($id)
    {
        $service_category = service_categories::findOrFail($id);
        $services_parameter = ServiceParameter::where('service_category_id', $id)->orderBy('id')->get();

        foreach ($services_parameter as $index => $parameter) {
            $parameter->no = $index + 1;
            $parameter->save();
        }
        return view('backend.service-parameter', compact('service_category', 'services_parameter'));
    }
    public function parameter_show($service_category_id, $id)
    {
        $service_category = service_categories::findOrFail($id);
        $services_parameter = ServiceParameter::where('service_category_id', $service_category_id)->orderBy('id')->get();

        foreach ($services_parameter as $index => $parameter) {
            $parameter->no = $index + 1;
            $parameter->save();
        }
        return view('backend.service-parameter', compact('service_category', 'services_parameter'));
    }
    public function parameter_submit(Request $request)
    {
        $validatedData = $request->validate([
            'no' => 'required|integer',
            'title_parameter' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'method' => 'nullable|string|max:255',
            'service_category_id' => 'required|integer',
        ]);

        $existingParameter = ServiceParameter::where('no', $validatedData['no'])
            ->where('service_category_id', $validatedData['service_category_id'])
            ->first();

        if ($existingParameter) {
            return back()->withErrors(['no' => 'This number is already in use for the specified service category.']);
        }

        $service_parameter = new ServiceParameter();
        $service_parameter->no = $validatedData['no'];
        $service_parameter->title_parameter = $validatedData['title_parameter'];
        $service_parameter->duration = $validatedData['duration'];
        $service_parameter->method = $validatedData['method'] ?? '';
        $service_parameter->service_category_id = $validatedData['service_category_id']; // Ensure this line is included
        $service_parameter->save();

        return redirect()->route('backend.service-parameter', ['service_category_id' => $validatedData['service_category_id']]);
    }
    public function parameter_update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title_parameter' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'method' => 'nullable|string|max:255',
        ]);
        $service_parameter = ServiceParameter::findOrFail($id);
        $service_parameter->title_parameter = $validatedData['title_parameter'];
        $service_parameter->duration = $validatedData['duration'];
        $service_parameter->method = $validatedData['method'] ?? '';
        $service_parameter->save();

        return redirect()->route('backend.service-parameter', ['service_category_id' => $service_parameter->service_category_id]);
    }


    public function parameter_destroy($id)
    {
        $service_parameter = ServiceParameter::findOrFail($id);
        $service_category_id = $service_parameter->service_category_id;
        $service_parameter->delete();

        return redirect()->route('backend.service-parameter', ['service_category_id' => $service_category_id]);
    }

    public function service_parameter()
    {
        // return 123;
        return view('backend.service-parameter');
    }
}
