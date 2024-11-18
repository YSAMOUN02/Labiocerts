<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

abstract class Controller
{
    public function upload_file($file){
        $thumbnail = rand(1,999).'-'.$file->getClientOriginalName();
        $file ->move('assets/uploads',$thumbnail);
        return $thumbnail;
    }
    public function upload_logo($file){
        $thumbnail = rand(1,999).'-'.$file->getClientOriginalName();
        $file ->move('assets/uploads_logo',$thumbnail);
        return $thumbnail;
    }
    public function upload_slide($file){
        $thumbnail = rand(1,999).'-'.$file->getClientOriginalName();
        $file ->move('assets/slide_uploads',$thumbnail);
        return $thumbnail;
    }
        function limitText($text, $limit)
        {
            $end = '...';
            $strippedText = strip_tags($text);
            if (strlen($strippedText) > $limit) {
                return substr($strippedText, 0, $limit) . $end;
            }


            
            return $strippedText;
        }
  
    }
    
