<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\service_categories;
use App\Models\Service;
use App\Models\ServiceParameter;
use Illuminate\Support\Facades\DB;

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
            'reference' => 'nullable|required',
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
            Service::where('no', '>', $deletedNo)->decrement('no');

            return redirect('/admin/service');
        } else {
            return redirect('/admin/service');
        }
    }

    //Category 
    public function showServiceCategory($id)
    {
        $service = Service::findOrFail($id);
        $services_category = service_categories::orderBy('no')->get();
        $services_parameter = ServiceParameter::all();
        return view('backend.service-category', compact('service', 'services_category','services_parameter'));
    }

    public function category_show($service_id, $id)
    {
        $service = Service::findOrFail($id);
        $services_category = service_categories::where('service_id', $service_id)
            ->orderBy('no', 'asc')
            ->get();
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
    
        $newNo = $validatedData['no'];
        Log::info('Submitting new category', $validatedData);
    
        $this->adjustCategoryNumbers($validatedData['service_id'], $newNo);
    
        $service_category = new service_categories();
        $service_category->no = $newNo;
        $service_category->title_category = $validatedData['title_category'];
        $service_category->status = $validatedData['status'];
        $service_category->service_id = $validatedData['service_id'];
        $service_category->save();
    
        Log::info('New category saved', ['id' => $service_category->id]);
    
        return redirect()->route('backend.service-category', ['service_id' => $validatedData['service_id']])
            ->with('success', 'Category created successfully.');
    }
   public function category_update(Request $request, $id)
{
    $validatedData = $request->validate([
        'no' => 'required|integer',
        'title_category' => 'required|string|max:255',
        'status' => 'required|in:Active,Inactive',
    ]);

    $statusMap = [
        'Active' => 1,
        'Inactive' => 0,
    ];

    $service_category = service_categories::findOrFail($id);
    $oldNo = $service_category->no;
    $newNo = $validatedData['no'];

    Log::info('Updating category', ['id' => $id, 'oldNo' => $oldNo, 'newNo' => $newNo]);

    if ($oldNo != $newNo) {
        $this->adjustCategoryNumbers($service_category->service_id, $newNo, $oldNo);
    }

    $service_category->no = $newNo;
    $service_category->title_category = $validatedData['title_category'];
    $service_category->status = $statusMap[$validatedData['status']];
    $service_category->save();

    Log::info('Category updated', ['id' => $service_category->id]);

    return redirect()->route('backend.service-category', ['service_id' => $service_category->service_id])
        ->with('success', 'Category updated successfully.');
}

public function adjustCategoryNumbers($serviceId, $newNo, $oldNo = null)
{
    Log::info('Adjusting category numbers', ['service_id' => $serviceId, 'newNo' => $newNo, 'oldNo' => $oldNo]);

    if ($oldNo === null) {
        Log::info('Incrementing numbers greater than or equal to', ['newNo' => $newNo]);
        service_categories::where('service_id', $serviceId)
            ->where('no', '>=', $newNo)
            ->increment('no');
    } else {
        if ($newNo > $oldNo) {
            Log::info('Decrementing numbers between', ['oldNo' => $oldNo + 1, 'newNo' => $newNo]);
            service_categories::where('service_id', $serviceId)
                ->whereBetween('no', [$oldNo + 1, $newNo])
                ->decrement('no');
        } else {
            Log::info('Incrementing numbers between', ['newNo' => $newNo, 'oldNo' => $oldNo - 1]);
            service_categories::where('service_id', $serviceId)
                ->whereBetween('no', [$newNo, $oldNo - 1])
                ->increment('no');
        }
    }
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
        $services_parameter = ServiceParameter::orderBy('no')->get(); 
        return view('backend.service-parameter', compact('service_category', 'services_parameter'));
    }
    public function parameter_show($service_category_id, $id)
    {
        $service_category = service_categories::findOrFail($id);
        $services_parameter = ServiceParameter::where('service_category_id', $service_category_id)
        ->orderBy('no', 'asc')
        ->get();
        return view('backend.service-parameter', compact('service_category', 'services_parameter'));
    }
    public function parameter_submit(Request $request) {
        $validatedData = $request->validate([
            'no' => 'required|integer',
            'title_parameter' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'method' => 'nullable|string|max:255',
            'service_category_id' => 'required|integer',
        ]);
    
        $newNo = $validatedData['no']; 
        Log::info('Submitting new parameter', $validatedData); 
    
        $this->adjustParameterNumbers($validatedData['service_category_id'], $newNo);
    
        $service_parameter = new ServiceParameter();
        $service_parameter->no = $validatedData['no'];
        $service_parameter->title_parameter = $validatedData['title_parameter'];
        $service_parameter->duration = $validatedData['duration'];
        $service_parameter->method = $validatedData['method'] ?? '';
        $service_parameter->service_category_id = $validatedData['service_category_id'];
        $service_parameter->save();
    
        Log::info('New Parameter saved', ['id' => $service_parameter->id]); 
        return redirect()->route('backend.service-parameter', ['service_category_id' => $validatedData['service_category_id']])
            ->with('success', 'Parameter created successfully.');
    }
    public function parameter_update(Request $request, $id) {
        $validatedData = $request->validate([
            'no' => 'required|integer', 
            'title_parameter' => 'required|string|max:255',
            'duration' => 'nullable|string|max:255',
            'method' => 'nullable|string|max:255',
        ]);
    
        $service_parameter = ServiceParameter::findOrFail($id);
        $oldNo = $service_parameter->no; 
        $newNo = $validatedData['no']; 
        Log::info('Updating parameter', ['id' => $id, 'old' => $oldNo, 'newNo' => $newNo]); 
        
        if ($oldNo != $newNo) {
            $this->adjustParameterNumbers($service_parameter->service_category_id, $newNo, $oldNo); 
        }
    
        $service_parameter->no = $newNo; 
        $service_parameter->title_parameter = $validatedData['title_parameter'];
        $service_parameter->duration = $validatedData['duration'];
        $service_parameter->method = $validatedData['method'] ?? '';
        $service_parameter->save();
    
        Log::info('Parameter updated', ['id' => $service_parameter->id]); 
        return redirect()->route('backend.service-parameter', ['service_category_id' => $service_parameter->service_category_id])
            ->with('success', 'Parameter updated successfully.');
    }
    public function adjustParameterNumbers($serviceCategoryId, $newNo, $oldNo = null) {
        Log::info('Adjusting category numbers', ['service_category_id' => $serviceCategoryId, 'newNo' => $newNo, 'oldNo' => $oldNo]);
    
        if ($oldNo == null) {
            // Increment numbers greater than or equal to the new number
            Log::info('Incrementing numbers greater than or equal to', ['newNo' => $newNo]);
            ServiceParameter::where('service_category_id', $serviceCategoryId)
                ->where('no', '>=', $newNo)
                ->increment('no');
        } else {
            if ($newNo > $oldNo) {
                // Decrement numbers between oldNo and newNo (exclusive)
                Log::info('Decrementing numbers between', ['oldNo' => $oldNo + 1, 'newNo' => $newNo]);
                ServiceParameter::where('service_category_id', $serviceCategoryId)
                    ->whereBetween('no', [$oldNo + 1, $newNo])
                    ->decrement('no');
            } else {
                // Increment numbers between newNo and oldNo (inclusive)
                Log::info('Incrementing numbers between', ['newNo' => $newNo, 'oldNo' => $oldNo - 1]);
                ServiceParameter::where('service_category_id', $serviceCategoryId)
                    ->whereBetween('no', [$newNo, $oldNo - 1])
                    ->increment('no');
            }
        }
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
