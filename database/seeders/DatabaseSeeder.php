<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserSeeder::class,
            SettingSeeder::class,
            CountrySeeder::class,
            ServiceTypeSeeder::class,
            SubServiceTypeSeeder::class,
            DurationHourSeeder::class,
            CategorySeeder::class,
            ServiceSeeder::class,
            BranchAddressSeeder::class,
            TeamMemberSeeder::class,
            TeamLocationSeeder::class,
            // BookingSeeder::class
        ]);
    }
}
