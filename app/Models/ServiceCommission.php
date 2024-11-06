<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCommission extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'user_id',
        'commission_type',
        'commission_rate',
        'commission_value',
    ];
}
