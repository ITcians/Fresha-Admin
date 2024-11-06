<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubServiceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_type_id',
        'sub_service',
        'slug',
    ];


    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    
}
