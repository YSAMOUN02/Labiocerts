<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceParameter extends Model
{
    use HasFactory;
    protected $table = 'service_parameter'; 
    protected $fillable = [
        'service_category_id',
        'no' ,
        'title_parameter', 
        'duration', 
        'method',
    ]; 
    public function service_categories(){
        return $this->belongsTo(service_categories::class); 
    }
}
