<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\clientlogo;
use Illuminate\Http\Request;
use  App\Models\ClientLogo;
use Illuminate\Support\Facades\Storage;
class logo_clientController extends Controller
{
<<<<<<< HEAD
    public function logoClient($id){
        $preview_logo  =null;
        if($id != 0){
            $preview_logo = clientlogo::where('id',$id)
            ->first();
        }
        $all_logo  = clientlogo::orderby('id','desc')
        ->get();

        
        return view('backend.client-logo',['all_logo'=> $all_logo, 'preview_logo' => $preview_logo]);
    }

    public function logo_client_add_submit( Request $request)  {
         
            // IF  Old Thumbnail Existed
            if($request->old_thumbnail != ""){
               
                // IF user select New File 
                if ($request->hasFile('thumbnail')) {
              
                    // Get the file
                    $file = $request->file('thumbnail');
        
                    // Check if the file is valid
                    if ($file->isValid()) {
                        // Store the file or perform any other operation
                        $path = $this->upload_logo($file);
        

                        // Check if user Update or Add New
                      

                        if($request->action == 'add'){
                            $new_logo = new clientlogo();
                            $new_logo->thumbnail = $path;
                            $new_logo->link = $request->link;
                            $new_logo->save();
                            return redirect('/admin/logoClient/0')->with('sucess', 'Added new Logo.');
                        }elseif($request->action == 'update'){
                       
                            $new_logo = clientlogo::find($request->id);
                            $new_logo->thumbnail = $path;
                            $new_logo->link = $request->link;
                            $new_logo->save();
                        }
                        return redirect('/admin/logoClient/0')->with('sucess', 'Updated Sucess.');
                       
                    } else {
            
                    }
                }
                // If user Not Select New File
                else{
                        // Check if user Update or Add New
                        if($request->action == 'add'){
                            $new_logo = new clientlogo();
                            $new_logo->thumbnail = $request->old_thumbnail;
                            $new_logo->link = $request->link;
                            $new_logo->save();
                            return redirect('/admin/logoClient/0')->with('sucess', 'Added new Logo.');
                        }elseif($request->action == 'update'){
                            return 123;
                            $new_logo = clientlogo::where('id',$request->id)-> first();
                            $new_logo->thumbnail = $request->old_thumbnail;
                            $new_logo->link = $request->link;
                            $new_logo->save();
                        }
                        return redirect('/admin/logoClient/0')->with('sucess', 'Updated Sucess.');
                    }
            }

        // IF Has Not Old Thumbnail
        // Check if the request has a file named 'file'
        if ($request->hasFile('thumbnail')) {
   
            // Get the file
            $file = $request->file('thumbnail');

            // Check if the file is valid
            if ($file->isValid()) {
                // Store the file or perform any other operation
                $path = $this->upload_logo($file);

                $new_logo = new clientlogo();
                $new_logo->thumbnail = $path;
                $new_logo->link = $request->link;
                $new_logo->save();
                return redirect('/admin/logoClient/0')->with('sucess', 'Added new Logo.');
            } else {
                return redirect('/admin/logoClient/0')->with('fail', 'File not found.');
            }
        } else {
            return redirect('/admin/logoClient/0');
        }
    }

    public function logo_client_delete_submit(Request $request){
        $deleted = clientlogo::where('id',$request->id)
        ->delete();

        if($deleted){
            return redirect('/admin/logoClient/0')->with('sucess', 'Delete 1 Record.');
        }else{
            return redirect('/admin/logoClient/0')->with('fail', 'Opp! Something went wronge.');
        }
       

=======
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
>>>>>>> chiveng
    }
}
 