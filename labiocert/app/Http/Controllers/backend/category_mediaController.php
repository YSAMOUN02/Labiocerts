<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\category_media;
use Illuminate\Http\Request;

class category_mediaController extends Controller
{
    public function media_category(){
        $category = category_media::orderBy('order','asc')->get();


        return view('backend.add-category-media',['category' => $category]);
    }
    public function media_category_add(Request $request){
        $category = new category_media();
        $category->order = $request->no;
        $category->category_name = $request->name;
        $category->status = $request->status;
        $category->save();
        return redirect('/media/category');
    }
}
