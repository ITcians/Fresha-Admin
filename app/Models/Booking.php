<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        // 'service_id',
        'client_id',
        'title',
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
<<<<<<< HEAD
        return $this->belongsTo(User::class); // Ensure it returns the relationship
=======
        return $this->belongsTo(User::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class,'client_id');
>>>>>>> 6be56865f929a30820bb9aced9e44c43d00c2234
    }

}
