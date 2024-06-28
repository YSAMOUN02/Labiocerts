<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\image_box;
use App\Models\Media;
use App\Models\text_box;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MediaController extends Controller
{
    public function media() {
        $hero_media = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
        ->with([
            'image' => function($query) {
                $query->select('post_id', 'name')->limit(1);
            }
        ])
        ->limit(1)
        ->orderby('id','desc')
        ->get();

        $collection_hero = new Collection();
        $collection = null;
        foreach ($hero_media as $item) {
            $collection_hero->push((object)[
                'id' => $item->id,
                'title' => $item->title,
                'created_at' => $item->created_at,
                'image' => $item->image ? $item->image->name : null,
        
            ]);
        }
  
        $count_media = count($collection_hero);
        if($count_media == 1){
                // Get the media data along with the related image and text data
            $data_media = Media::select('id', 'title',  DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as created_at'))
            ->with([
                'image' => function($query) {
                    $query->select('post_id', 'name')->limit(1);
                },
                'text' => function($query) {
                    $query->select('post_id', 'description')->limit(1);
                }
            ])
            ->where('id','<>',$collection_hero[0]->id)
            // ->where('id','<>',$collection_hero[1]->id)
            ->orderby('id','desc')
            ->get();

            $collection = new Collection();

            foreach ($data_media as $item) {
            $collection->push((object)[
                'id'=>$item->id,
                'title' => $item->title,
                'created_at' => $item->created_at,
                'image' => $item->image ? $item->image->name : null,
                'text' => $item->text ? $item->text->description : null
            ]);
            }
            // return $collection;
        }
       
    

        $last = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
        ->with([
            'image' => function($query) {
                $query->select('post_id', 'name')->limit(1);
            }
        ])
        ->limit(3)
        ->orderby('id','desc')
        ->get();

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
        return view('frontend.media',[ 'collection_hero' => $collection_hero,'collection' => $collection, 'collection_lastest' => $collection_lastest]); 
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

        // return $id;
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
                'image' => $imageBox->name
            ]);
        }

        foreach ($textBoxes as $textBox) {
            $Data->push((object)[
                'order' => $textBox->order,
                'type' => 'text',
                'description' => $textBox->description,
            
            ]);
        }
        $mergedData = $Data->sort();



        $last = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
        ->with([
            'image' => function($query) {
                $query->select('post_id', 'name')->limit(1);
            },
            
        ])
        ->limit(3)
        ->orderby('id','desc')
        ->get();

        $collection_lastest = new Collection();

        foreach ($last as $item) {
            $collection_lastest->push((object)[
                'id'=>$item->id,
                'title' => $item->title,
                'created_at' => $item->created_at,
                'image' => $item->image ? $item->image->name : null,
           
        ]);
    }
        // return $mergedData;
        return view('frontend.media-detail',['mergedData' => $mergedData, 'media_header' => $media_header, 'collection_lastest' => $collection_lastest]);
    }
}