<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientEmergencyContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'fullname',
        'relationship',
        'email',
        'country_code',
        'phone',
    ];
}
