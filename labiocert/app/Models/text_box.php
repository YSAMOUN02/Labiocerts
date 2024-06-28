<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class text_box extends Model
{
    use HasFactory;

    protected $table = 'text_box';
    protected $fillable = [
        'post_id',
        'order',
        'description'
    ];

    protected $casts = [
        'post_id' => 'integer',
        'order' => 'integer',
        'description' => 'string'
    ];
    protected  $primaryKey = 'id';
    public function media()
    {
        return $this->belongsTo(Media::class, 'post_id');
    }
    
}
