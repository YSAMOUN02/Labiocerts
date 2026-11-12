<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\ClientLogo;
use App\Models\slide;
use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
class HomeController extends Controller
{

    public function homepage(){
        $slide = slide::orderby('id','asc')->get();


        $client_logo = ClientLogo::orderby('id','desc')
        ->select('thumbnail','link')
        ->get();
        return view('frontend.homepage',['client_logo' => $client_logo, 'slide' => $slide]);
    }
    public function welcomelabiocert(){

            // Lastest Post Media
            $last = Media::select('id', 'title',  DB::raw('DATE(created_at) as created_at'))
            ->with([
                'image' => function($query) {
                    $query->select('post_id', 'name')->limit(1);
                },

            ])
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
        return view('frontend.welcome-labio',['collection_lastest' => $collection_lastest]);
    }

    public function video_view(){
        return view('frontend.video');
    }
}
