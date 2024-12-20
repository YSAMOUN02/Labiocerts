<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'service';
    protected $fillable = [
        'no',
        'title',
        'reference',
        'status',
      ];
      public function categories(){
        return $this->hasMany(service_categories::class);
      }
      
}
