<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'service_name' => 'Haircut',
            'service_type_id'=>'2',
            'category_id'=>'1',
            'description'=>'haircut',
            'duration'=>'65',
            'price_type'=>'fixed',
            'price'=>'12.00',
            'status'=>'1',
            'image'=>'assets/backend/uploads/service/1.jpg',


        ]);

        Service::create([
            'service_name' => 'Hair Color',
            'service_type_id'=>'2',
            'category_id'=>'1',
            'description'=>'hair color',
            'duration'=>'20',
            'price_type'=>'fixed',
            'price'=>'10.00',
            'status'=>'1',
            'image'=>'assets/backend/uploads/service/2.jpg',

        ]);

        Service::create([
            'service_name' => "Men's Shaving",
            'service_type_id'=>'2',
            'category_id'=>'1',
            'description'=>'men shaving',
            'duration'=>'20',
            'price_type'=>'fixed',
            'price'=>'15.00',
            'status'=>'1',
            'image'=>'assets/backend/uploads/service/3.jpg',
        ]);
    }
}
