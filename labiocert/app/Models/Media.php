<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'status',
    ];

    protected $casts = [
        'status' => 'integer',
 
    ];
    protected  $primaryKey = 'id';
    public function imageBoxes()
    {
        return $this->hasMany(image_box::class, 'post_id');
    }

    public function textBoxes()
    {
        return $this->hasMany(text_box::class, 'post_id');
    }
  
}
