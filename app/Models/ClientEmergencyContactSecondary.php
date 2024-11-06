<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ClientEmergencyContactSecondary extends Model
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
