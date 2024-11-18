<?php

namespace App\Providers;

use App\Models\Media;
use App\Models\Quote;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('frontend.master',function($view){
            $media_popular = Media::with(['image'])
                ->where('status',1)
                ->orderby('viewer','desc')
                ->limit(4)
                ->get();
            
            $media_last = Media::with(['image'])
            ->where('status',1)
            ->orderby('id','desc')
            ->limit(4)
            ->get();

            $media_event = Media::whereHas('categorys', function($query) {
                $query->where('category_name', 'Event')
                ->where('status', 1);
            })
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->get();
            return $view -> with(['media_last' => $media_last , 'media_event' =>$media_event , 'media_popular' =>$media_popular]);
        });


        view()->composer('backend.master',function($view){
            $quote_qty = Quote::Where('state',0)
           
            ->count();
            return $view -> with([ 'quote_qty' =>$quote_qty]);
        });
    }
}
