<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainList extends Model
{

    protected $table = 'main_list';

    public function sublist(){
        return $this->hasMany(Sublist::class,'main_list_id','id');
      }
}
