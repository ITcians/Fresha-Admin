<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class TeamLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'location_id'
    ];

    public function userBranch()
    {
        return $this->belongsTo(User::class);
    }

    public function branch()
    {
        return $this->belongsTo(BranchAddress::class,'location_id');
    }
}
