<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function upload_file($file){
        $thumbnail = rand(1,999).'-'.$file->getClientOriginalName();
        $file ->move('assets/uploads',$thumbnail);
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
    
