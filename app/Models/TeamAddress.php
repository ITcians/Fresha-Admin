<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TeamAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'apt_suit',
        'district',
        'city',
        'region',
        'postcode',
        'country',
        'address_type',
    ];
    
}
