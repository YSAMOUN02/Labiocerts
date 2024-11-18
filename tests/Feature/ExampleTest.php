<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
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
}
