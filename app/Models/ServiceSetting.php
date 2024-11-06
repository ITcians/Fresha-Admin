<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'patch_test',
        'after_care_description',
        'notification_reminder_days',
        'notification_reminder_after',
        'sales_tax',
        'service_cost',
        'service_cost_type',
        'service_sku',
    ];
}
