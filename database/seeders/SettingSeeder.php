<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'key'=>"site_name",
            'value'=>'Freshia',
        ]);
        Setting::create([
            'key'=>"site_email",
            'value'=>'info@freshia.com',
        ]);
        Setting::create([
            'key'=>"site_logo",
            'value'=>'1729951743.png',
        ]);

        Setting::create([
            'key'=>"app_debug",
            'value'=>'true',
        ]);

        Setting::create([
            'key'=>"app_enviroment",
            'value'=>'local',
        ]);
        
    }
}
