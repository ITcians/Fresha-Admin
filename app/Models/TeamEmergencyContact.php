<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TeamEmergencyContact extends Model
{
    use HasFactory;
    
    protected $fillbale = [
        'user_id',
        'full_name',
        'relationship',
        'email',
        'code',
        'phone',
    ];
}
