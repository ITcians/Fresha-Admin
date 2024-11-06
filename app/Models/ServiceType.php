<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_type',
        'slug',
    ];


    public function subServiceTypes()
    {
        return $this->hasMany(SubServiceType::class);
    }
}
