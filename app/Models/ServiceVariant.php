<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceVariant extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'name',
        'description',
        'duration',
        'price_type',
        'price',
        'sku',
    ];
}
