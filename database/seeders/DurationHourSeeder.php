<?php

namespace Database\Seeders;

use App\Models\DurationHour;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DurationHourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DurationHour::create([
            'duration_hr'=>'5'
        ]);

        DurationHour::create([
            'duration_hr'=>'10'
        ]);

        DurationHour::create([
            'duration_hr'=>'15'
        ]);

        DurationHour::create([
            'duration_hr'=>'20'
        ]);

        DurationHour::create([
            'duration_hr'=>'25'
        ]);

        DurationHour::create([
            'duration_hr'=>'30'
        ]);

        DurationHour::create([
            'duration_hr'=>'35'
        ]);

        DurationHour::create([
            'duration_hr'=>'40'
        ]);

        DurationHour::create([
            'duration_hr'=>'45'
        ]);

        DurationHour::create([
            'duration_hr'=>'50'
        ]);

        DurationHour::create([
            'duration_hr'=>'55'
        ]);

        DurationHour::create([
            'duration_hr'=>'60'
        ]);

        DurationHour::create([
            'duration_hr'=>'65'
        ]);

        DurationHour::create([
            'duration_hr'=>'70'
        ]);

        DurationHour::create([
            'duration_hr'=>'75'
        ]);

        DurationHour::create([
            'duration_hr'=>'80'
        ]);
    }
}
