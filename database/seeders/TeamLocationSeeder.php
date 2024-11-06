<?php

namespace Database\Seeders;

use App\Models\TeamLocation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TeamLocation::create([
            'user_id' => 2,
            'location_id' =>1
        ]);

        TeamLocation::create([
            'user_id' => 3,
            'location_id' =>1
        ]);
    }
}
