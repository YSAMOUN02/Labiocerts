<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class quoteController extends Controller
{

    public function quote_show(){
         // current Page 
        $page = 1;

        $web_info = WebsiteInfo::first();

        // Page Control 
        $all_quote = Quote::count();
        $quote_per_page = 50;
        $all_page = ceil($all_quote/$quote_per_page);

     
        // Page 1  only 
        if($all_page == 0){

            $all_page = 1;
            // QUOTE DATA 
            $quote = Quote::Orderby('id','desc')
            ->limit($quote_per_page)
            ->get();
          
            return view('backend.quote-req',['quote' => $quote, 'web_info' =>$web_info,'all_page' => $all_page , 'page' => $page]);
        }else{ 
        

            // Page more than 1 
            $quote = Quote::Orderby('id','desc')
            ->limit($quote_per_page)
            ->get();

            return view('backend.quote-req',['quote' => $quote, 'web_info' =>$web_info, 'all_page' => $all_page , 'page' => $page]);
        }
    }
    public function quote_show_page($page){

  

       $web_info = WebsiteInfo::first();

       // Page Control 
       $all_quote = Quote::count();
       $quote_per_page = 50;
       $all_page = ceil($all_quote/$quote_per_page);

       $offset = ($page -1)* $quote_per_page;
    
       // Page 1  only 
       if($all_page == 0){

           $all_page = 1;
           // QUOTE DATA 
           $quote = Quote::Orderby('id','desc')
           ->limit($quote_per_page)
           ->get();
         
           return view('backend.quote-req',['quote' => $quote, 'web_info' =>$web_info,'all_page' => $all_page , 'page' => $page]);
       }else{ 
       

           // Page more than 1 
           $quote = Quote::Orderby('id','desc')
           ->limit($quote_per_page)
           ->get();

           $quote = Quote::skip($offset)->take($quote_per_page)->orderby('id','desc')->get();

           return view('backend.quote-req',['quote' => $quote, 'web_info' =>$web_info, 'all_page' => $all_page , 'page' => $page]);
       }
    }
    public function view_quote($id){

        $quote = Quote::where('id',$id)->first();

        $quote->state = 1;
        $quote->save();


        return view('backend.detail-quote',['quote' => $quote]);
    }   

    public function change_quote_reciever(Request $request){


        $web_info = WebsiteInfo::Orderby('id','desc')->first();
        var_dump($web_info);
        

        if($web_info == NULL){
            $web_info = new WebsiteInfo();
            $web_info->quote_reciever = $request->email;
            $web_info->save();
        }else{
            $web_info->quote_reciever = $request->email;
            $web_info->save();
        }
        
        return redirect('/admin/quote/view');
    }
    public function mark_all() {
        Quote::query()->update(['state' => 1]);
        return redirect('/admin/quote/view');
    }
    public function delete_quote(Request $request){

        $delete = Quote::where('id',$request->id)->delete();
        if($delete){
            return redirect('/admin/quote/view')->with('sucess','Deleted 1 Quote Request.');
        }else{
            return redirect('/admin/quote/view')->with('fail','Opp! Something went wronge. Try again.');
        }
        
    }
}
