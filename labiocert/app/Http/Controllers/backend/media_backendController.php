<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category_media;
use App\Models\image_box;
use App\Models\Media;
use App\Models\text_box;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;

class media_backendController extends Controller
{

    public function media_show(){
        
        // $data = DB::table('media as M')
        // ->select("*",DB::raw("date(M.created_at) as date") )
        // ->get();
        $data = Media::with('categorys')
        ->get();


        // return $data;
        // $media = Media::with(['imageBoxes', 'textBoxes'])->findOrFail($id);
        return view('backend.list-media', ['data' => $data]);
    }











    public function media_add(){

        $category = category_media::select('id', 'category_name')->orderBy('order','asc')->get();

      
        return view('backend.add-media',['category' => $category]);
    }

    // Submit All Media Part
    public function media_add_submit(Request $request){
        // return $request;
        $new_media = new Media();
        $new_media->title = $request->title;
        $new_media->status = $request->status;
        $new_media->category_id = $request->category;
        $new_media->created_by = 1;
        $new_media->save();


        // Check and loop for all text and Image
        if($request->state != null){
            // return $request->state;
            $name = 'input';
            for($i = 1 ;$i <= $request->state ; $i++){
                // return  $name.strval($i);
                // If Req is File Image

                    if ($request->hasFile($request->file($name.strval($i)))) {
                        $name = 'input';
                        $text = new text_box();
                        $text->description = $request->input($name.strval($i));
                        $text->order = $i;
                        $text->post_id = $new_media->id;
                        $text->created_by = 1;
                        $text->save();


                    }else{
                          $file = $request->file($name.strval($i));
                                $image = new image_box();
                                $image->name = $this->upload_file($file);
                                $image->order = $i;
                                $image->post_id = $new_media->id;
                                $image->created_by = 1;
                                $image->save();
                    }

            }
            return redirect('/admin/media/list')->with('sucess','Added 1 Media.');
        }
    }
    public function media_update($id){

        $media_header = Media::find($id);
        $media = Media::with(['imageBoxes', 'textBoxes'])->findOrFail($id);

        
        // Ensure collections are not null
        $imageBoxes = $media->imageBoxes ?? collect();
        $textBoxes = $media->textBoxes ?? collect();


        // Merge image_boxes and text_boxes
        $Data = new Collection();

        foreach ($imageBoxes as $imageBox) {
            $Data->push((object)[
                'order' => $imageBox->order,
                'type' => 'image',
                'data' => $imageBox
            ]);
        }

        foreach ($textBoxes as $textBox) {
            $Data->push((object)[
                'order' => $textBox->order,
                'type' => 'text',
                'data' => $textBox
            ]);
        }
        $mergedData = $Data->sort();

        // return $media_header;
        return view('backend.update-media',['mergedData' => $mergedData, 'media_header' => $media_header]);
    }

    public function media_update_submit(Request $request){
        $media = Media::find($request->input('media-id'));
        $media->title = $request->input('title');
        $media->created_at = $request->input('created_at');
        $media->status = $request->input('status');
        $media->updated_at = today();
        $media->created_by = 1;
        $media->updated_by = 1;
        $media->save();

        $delete_text = text_box::where('post_id',$request->input('media-id'));
        $delete_text->delete();
        $delete_image = image_box::where('post_id',$request->input('media-id'));
        $delete_image->delete();
        // return $request;
   
   
        for($i = 1 ; $i <= $request->state ; $i++){
            $inputName = 'input'.strval($i);
            $state_image = "state_image".strval($i);
            if(!empty($request->input($inputName)) && !empty($request->input($state_image))){
                    // Work
                    // return 1;
                        $image = new image_box();
                        $image->name = $request->input($inputName);
                        $image->order = $i;
                        $image->post_id = $media->id;
                        $image->created_by = 1;
                        $image->save();
                
            }elseif(!empty($request->input($inputName))){
                    // Work
                    // return 2;
                        $text = new text_box();
                        $text->description = $request->input($inputName);
                        $text->order = $i;
                        $text->post_id = $media->id;
                        $text->created_by = 1;
                        $text->save();
            }elseif ($request->hasFile($inputName)) {
              
                        $file = $request->file($inputName);
                        $image = new image_box();
                        $image->name = $this->upload_file($file);
                        $image->order = $i;
                        $image->post_id = $media->id;
                        $image->created_by = 1;
                        $image->save();
            }
            
           
        }
        return redirect('/admin/media/list');

    }


    public function media_delete(Request $request){
        image_box::where('post_id',$request->id)
        ->delete();
        text_box::where('post_id',$request->id)
        ->delete();
        $delete = media::where('id',$request->id)
        ->delete();
      

        if($delete){
            return redirect('/admin/media/list')->with('sucess','Deleted 1 Media');
        }else{
            return redirect('/admin/media/list')->with('fail','Opp! Something when wronge.');
        }
    }
}
