<?php

namespace Database\Seeders;

use App\Models\SubServiceType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubServiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SubServiceType::create([
            'service_type_id'=>'1',
            'sub_service'=>'Beard Trimming',
            'slug'=>'beard-trimming',
        ]);

        SubServiceType::create([
            'service_type_id'=>'1',
            'sub_service'=>"Men's Haircut",
            'slug'=>"men's-haircut",
        ]);

        SubServiceType::create([
            'service_type_id'=>'1',
            'sub_service'=>"Men's Shaving",
            'slug'=>"men's-shaving",
        ]);

        ///////////service 2

        SubServiceType::create([
            'service_type_id'=>'2',
            'sub_service'=>"Back Facial",
            'slug'=>"back-facial",
        ]);

        SubServiceType::create([
            'service_type_id'=>'2',
            'sub_service'=>"Body Scrub",
            'slug'=>"body-scrub",
        ]);

        SubServiceType::create([
            'service_type_id'=>'2',
            'sub_service'=>"Body Wrap",
            'slug'=>"body-wrap",
        ]);

        /////// service 3

        SubServiceType::create([
            'service_type_id'=>'3',
            'sub_service'=>"Chinese Medicines",
            'slug'=>"chinese-medicines",
        ]);


        SubServiceType::create([
            'service_type_id'=>'3',
            'sub_service'=>"Cupping Therapy",
            'slug'=>"cupping-therapy",
        ]);

        SubServiceType::create([
            'service_type_id'=>'3',
            'sub_service'=>"Energy Healing",
            'slug'=>"energy-healing",
        ]);


        /////service 4


        SubServiceType::create([
            'service_type_id'=>'4',
            'sub_service'=>"Eyebrow Shaping",
            'slug'=>"eyebrow-shaping",
        ]);

        SubServiceType::create([
            'service_type_id'=>'4',
            'sub_service'=>"Lash Lift",
            'slug'=>"lash-lift",
        ]);

    }
}
