<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'client_id',
        'title',
        'start',
        'end',
    ];


    public function services()
    {
        return $this->belongsToMany(Service::class, 'booking_services');
    }

    public function user()
    {
        return $this->belongsTo(User::class); // Ensure it returns the relationship
    }

}
