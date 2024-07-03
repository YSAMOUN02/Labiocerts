<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\ClientLogo;
use Illuminate\Support\Facades\Storage;
class logo_clientController extends Controller
{
    public function index()
    {
        $logos = ClientLogo::all();
        return view('client-logos.index', compact('logos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required|url',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');

        ClientLogo::create([
            'image_path' => $imagePath,
            'link' => $request->link,
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $logo = ClientLogo::findOrFail($id);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($logo->image_path);
            $imagePath = $request->file('image')->store('images', 'public');
            $logo->update(['image_path' => $imagePath]);
        }

        $logo->update(['link' => $request->link]);

        return redirect()->back();
    }

    public function destroy($id)
    {
        $logo = ClientLogo::findOrFail($id);
        Storage::disk('public')->delete($logo->image_path);
        $logo->delete();

        return redirect()->back();
    }
    public function logoClient(){
        return view('backend.client-logo');
    }
}
 