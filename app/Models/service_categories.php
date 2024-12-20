<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service_categories extends Model
{

    use HasFactory;
    
    protected $table = 'service_category';
    protected $fillable = [
    'service_id', 
    'no', 
    'title_category',
    'status',
  ];
  public function service(){
    return $this->belongTo(Service::class);
  }
}


