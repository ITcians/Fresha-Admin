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
        'start',
        'end',
        'status',
    ];


    public function services()
    {
        return $this->belongsToMany(Service::class, 'booking_services');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class,'client_id');
    }

}
