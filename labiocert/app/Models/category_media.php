<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_media extends Model
{
    use HasFactory;
    protected $table = 'category_media';

    public function media()
    {
        return $this->hasMany(Media::class, 'category_id');
    }
  
}
