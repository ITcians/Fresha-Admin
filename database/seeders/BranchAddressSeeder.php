<?php

namespace Database\Seeders;

use App\Models\BranchAddress;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BranchAddress::create([
           'branch_name' => 'Branch 1',
            'branch_address' => 'Address 1', 
        ]);

        BranchAddress::create([
            'branch_name' => 'Branch 2',
             'branch_address' => 'Address 2', 
         ]);

         BranchAddress::create([
            'branch_name' => 'Branch 3',
            'branch_address' => 'Address 3', 
         ]);
    }
}
