<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\image_box;
use App\Models\Media;
use App\Models\text_box;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;

class media_backendController extends Controller
{

    public function media_show(){
        
        return view('backend.view-media');
    }
    public function media_add(){
        return view('backend.add-media');
    }

    // Submit All Media Part
    public function media_add_submit(Request $request){
        // return $request;
        $new_media = new Media();
        $new_media->title = $request->title;
        $new_media->status = $request->status;
        $new_media->save();

        // return $request;

        
  
        // Check and loop for all text and Image
        if($request->state != null){
            $name = 'input';
            for($i = 1 ;$i <=$request->state;$i++){

                // If Req is File Image
                if($request->hasFile($name.strval($i))){ 
                    $file = $request->file($name.strval($i));
                    // Handle the text input
                        $image = new image_box();
                        $image->name = $this->upload_file($file);
                        $image->order = $i;
                        $image->post_id = $new_media->id;
                        $image->save();
                }
                    // If It was Text 
                else{
                        $name = 'input';
                        $text = new text_box();
                        $text->description = $request->input($name.strval($i));
                        $text->order = $i;
                        $text->post_id = $new_media->id;
                        $text->save();
                }
            }
            // return view('backend.view-media');
        }
    }
}
