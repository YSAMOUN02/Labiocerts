<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category_media;
use App\Models\Media;
use Illuminate\Http\Request;

class category_mediaController extends Controller
{
    public function media_category($id){


        if($id == 0){
            $category = category_media::orderBy('order','asc')->get();
            return view('backend.add-category-media',['category' => $category]);
        }else{
            $update_preview =   category_media::select('id','order','category_name','status')
             ->where('id',$id)
             ->get();
      
             $category = category_media::orderBy('order','asc')->get();
             return view('backend.add-category-media',['category' => $category, 'update_preview' => $update_preview]);
        }
       
    }
    public function media_category_add(Request $request){
        if($request->action == 'add'){
            $category = new category_media();
            $category->order = $request->no;
            $category->category_name = $request->name;
            $category->status = $request->status;
            $category->save();
            return redirect('/admin/media/category/id=0')->with('sucess','Added 1 Record.');
        }
        if($request->action == 'update'){
          
            $update_preview =   category_media::where('id',$request->id)
            ->first();
            $update_preview->order = $request->no;
            $update_preview->category_name = $request->name;
            $update_preview->status = $request->status;
            $updated = $update_preview->save();
            if($updated){
                return redirect('/admin/media/category/id=0')->with('sucess','Update Sucess.');
            }else{
                return redirect('/admin/media/category/id=0')->with('fail','Opp! Something when wronge.');
            }
          
        }
       
    }
    public function media_category_delete(Request $request){
        // return $request->id;

        $deleted = $delete_item = category_media::where('id',$request->id)
        ->delete();
 
        $media = Media::where('category_id' , $request->id)
        ->get();

        foreach($media as $item){
            $update = Media::where('id',$item->id)
            ->first();
            $update->category_id = 0;
            $update->save();
        }


        if($deleted){
            return redirect('/admin/media/category/id=0')->with('sucess','Deleted 1 Record.');
        }else{
            return redirect('/admin/media/category/id=0')->with('fail','Opp! Something when wronge.');
        }

    }
    
}
