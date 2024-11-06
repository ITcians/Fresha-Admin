<?php

namespace Database\Seeders;

use App\Models\ServiceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceType::create([
            'service_type'=>'Barbering',
            'slug'=>'barbering',
        ]);

        ServiceType::create([
            'service_type'=>'Body',
            'slug'=>'body',
        ]);

        ServiceType::create([
            'service_type'=>'Counselling & Holistic',
            'slug'=>'counselling-&-holistic',
        ]);

        ServiceType::create([
            'service_type'=>'Eyebrows & Eyelashes',
            'slug'=>'eyebrows-&-eyelashes',
        ]);
    }
}
