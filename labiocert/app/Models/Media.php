<?php

namespace App\Models;


use App\ImageBox;
use App\TextBox;
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
    public function image() {
        return $this->hasOne('App\Models\image_box', 'post_id', 'id');
    }

    public function text() {
        return $this->hasOne('App\Models\text_box', 'post_id', 'id');
    }
    public function categorys()
    {
        return $this->belongsTo(category_media::class, 'category_id');
    }

    public function category_one() {
        return $this->hasOne('App\Models\category_media','id' , 'category_id');
    }
}
