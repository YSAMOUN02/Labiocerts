<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\category_media;
use App\Models\image_box;
use App\Models\Media;
use App\Models\text_box;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaController extends Controller
{
    public function media() {

        // Initailize Collection 
        $popular_media = null;

        // Browse Data from Medai which Popular
        $pupular_media_all = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
        ->with([
            'image' => function($query) {
                $query->select('post_id', 'name')->limit(1);
            }
        ])
        ->limit(3)
        ->orderby('viewer','desc')
        ->get();

        // Loop Data to Collection 
        $popular_media = new Collection();
        $collection = null;
        foreach ($pupular_media_all as $item) {
            $popular_media->push((object)[
                'id' => $item->id,
                'title' => $item->title,
                'created_at' => $item->created_at,
                'image' => $item->image ? $item->image->name : null,
        
            ]);
        }
  
        // Count Array to Check condition
        $count_media = count($popular_media);
        
        // Check if Data in main border not null 
        if($count_media == 3){


            $collection = category_media::with(['media' => function ($query) use ($popular_media){
                $query->where('status', 1) 
                      ->select('id', 'category_id', 'title', 'created_at')
                      ->orderby('id','desc')
                      ->whereNotIn('id',[$popular_media[0]->id,$popular_media[1]->id,$popular_media[2]->id])
                      ->limit(8)
                      ->with([
                        'image' => function($query) {
                            $query->select('post_id', 'name')->limit(1);
                        }
                    ]); 
            }])
          
            ->where('status', 1) 
            ->select('id', 'category_name') 
            ->get();

            
            $no_category = Media::with(['image' => function ($query) {
                $query->select('post_id', 'name'); // Ensure 'post_id' is included if it's the foreign key
            }])
            ->where('category_id', 0)
            ->orderBy('id', 'desc')
            ->where('status', 1)
            ->select('id', 'title', 'status', 'category_id')
            ->limit(8)
            ->get();
            $collection_no_category = new Collection();
            foreach ($no_category as $item) {
                $collection_no_category->push((object)[
                    'id' => $item->id,
                    'title' => $item->title,
                    'created_at' => $item->created_at,
                    'image' => $item->image ? $item->image->name : null,
            
                ]);
            }
        }
       
        // return $collection ;
        // Lastest News Show
        $last = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
        ->with([
            'image' => function($query) {
                $query->select('post_id', 'name')->limit(1);
            }
        ])
        ->limit(3)
        ->orderby('id','desc')
        ->get();

    // Merge News Lastest to Collection
    $collection_lastest = new Collection();

    foreach ($last as $item) {
        $collection_lastest->push((object)[
            'id'=>$item->id,
            'title' => $item->title,
            'created_at' => $item->created_at,
            'image' => $item->image ? $item->image->name : null,
           
        ]);
    }





        // return $collection_hero;
        return view('frontend.media',
        [ 
            'popular_media' => $popular_media,
            'collection' => $collection,
             'collection_lastest' => $collection_lastest,
            'collection_no_category' => $collection_no_category    
        ]); 
    }
    
    
    public function events(){
        return view('frontend.events');
    }
    public function news(){
        return view('frontend.news');
    }
    public function newyear(){
        return view('frontend.event-one'); 
    }
    public function launchofKEM(){
        return view('frontend.event-two'); 
    }
    public function kinal(){
        return view('frontend.event-three');
    }
    // public function ppmandconfirel(){
    //     return view('frontend.ppm-confirel'); 
    // }

    public function media_detail($id){

        // Media Info
        $media_header = Media::find($id);
        $media = Media::with(['imageBoxes', 'textBoxes'])->findOrFail($id);

        // Update Current Viewer to Media
        $viewer = $media_header->viewer;
        $viewer+=1;
        $media_header->viewer = $viewer;
        $media_header->save();


        // Ensure collections are not null
        $imageBoxes = $media->imageBoxes ?? collect();
        $textBoxes = $media->textBoxes ?? collect();


        // Merge image_boxes and text_boxes
        $Data = new Collection();

        // Loop for image to collection
        foreach ($imageBoxes as $imageBox) {
            $Data->push((object)[
                'order' => $imageBox->order,
                'type' => 'image',
                'image' => $imageBox->name
            ]);
        }

        // loop Text to collection
        foreach ($textBoxes as $textBox) {
            $Data->push((object)[
                'order' => $textBox->order,
                'type' => 'text',
                'description' => $textBox->description,
            
            ]);
        }

        // Sort Data Text and Imgae By order 
        $mergedData = $Data->sort();



        // Lastest Post Media
        $last = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
        ->with([
            'image' => function($query) {
                $query->select('post_id', 'name')->limit(1);
            },
            
        ])
        ->where('id','<>',$id)
        ->limit(3)
        ->orderby('id','desc')
        ->get();

        // New Collection for Last News
        $collection_lastest = new Collection();

        foreach ($last as $item) {
            $collection_lastest->push((object)[
                'id'=>$item->id,
                'title' => $item->title,
                'created_at' => $item->created_at,
                'image' => $item->image ? $item->image->name : null,
           
        ]);
    }
        // return Data to View;
        return view('frontend.media-detail',['mergedData' => $mergedData, 'media_header' => $media_header, 'collection_lastest' => $collection_lastest]);
    }
}