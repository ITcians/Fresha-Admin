<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category'=>'Hair & Styling',
            'color'=>'jordyBlue',
            'description'=>'Hair & Styling',
            'slug'=>'hair-&-styling'
        ]);

        Category::create([
            'category'=>'Nails',
            'color'=>'jordyBlue',
            'description'=>'Nails',
            'slug'=>'nails'
        ]);

        Category::create([
            'category'=>'Eyebrows & Eyelashes',
            'color'=>'jordyBlue',
            'description'=>'Eyebrows & Eyelashes',
            'slug'=>'eyebrows-&-eyelashes'
        ]);
    }
}
