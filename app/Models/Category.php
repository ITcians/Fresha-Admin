<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'color',
        'description',
        'slug'
    ];

    public function serviceCategory()
    {
        return $this->hasMany(Service::class);
    }
}
