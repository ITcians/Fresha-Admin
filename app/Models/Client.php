<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'image',
        'email',
        'country_code',
        'phone',
        'dob',
        'gender',
        'pronouns',
        'language',
        'client_source',
        'occupation',
        'country',
        'additional_email',
        'additional_phone',
        'additional_country_code',
    ];
}
