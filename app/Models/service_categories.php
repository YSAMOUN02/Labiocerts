<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_categories extends Model
{

    use HasFactory;

    protected $table = 'service_category';


    public function mainlist(){
        return $this->hasMany(MainList::class,'category_id','id');
      }


}


