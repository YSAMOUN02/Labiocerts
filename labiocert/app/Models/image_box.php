<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image_box extends Model
{
    use HasFactory;

    protected $table = 'image_box';
    protected $fillable = [
        'post_id',
        'order',
        'name'
    ];

    protected $casts = [
        'post_id' => 'integer',
        'order' => 'integer',
        'name' => 'string'
    ];
    protected  $primaryKey = 'id';
    public function media()
    {
        return $this->belongsTo(Media::class, 'post_id');
    }
}
