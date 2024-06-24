<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function upload_file($file){
        $thumbnail = rand(1,999).'-'.$file->getClientOriginalName();
        $file ->move('assets/uploads',$thumbnail);
        return $thumbnail;
    }
}
