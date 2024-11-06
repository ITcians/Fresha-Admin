<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email_nofication',
        'email_marketing_nofication',
        'text_message_marketing_nofication',
    ];
}
