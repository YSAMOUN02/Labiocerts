<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
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
        $data = DB::table('media as M')
        ->select("*",DB::raw("date(M.created_at) as date") )
        ->get();
        // return $data;
        return view('backend.list-media', ['data' => $data]);
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
        $new_media->category = 1;
        $new_media->save();

    return $request;
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
                        $text->save();


                    }else{
                          $file = $request->file($name.strval($i));
                                $image = new image_box();
                                $image->name = $this->upload_file($file);
                                $image->order = $i;
                                $image->post_id = $new_media->id;
                                $image->save();
                    }

            }
            return redirect('/admin/media/list');
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
        return $request;
    }
}
