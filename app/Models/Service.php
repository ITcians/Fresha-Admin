<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_name',
        'service_type_id',
        'category_id',
        'description',
        'duration',
        'price_type',
        'price',
        'extra_time_type',
        'extra_time_duration',
        'status',
        'image'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
