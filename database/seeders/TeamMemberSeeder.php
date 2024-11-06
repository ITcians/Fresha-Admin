<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fname' => 'John',
            'lname' =>'Doe',
            'email' =>'johndoe@gmail.com',
            'password'=> Hash::make('12345678'),
            'code'=> '+1',
            'phone'=> '323323232',
            'role'=>'2',
        ]);

        User::create([
            'fname' => 'Mark',
            'lname' =>'wood',
            'email' =>'mark@gmail.com',
            'password'=> Hash::make('12345678'),
            'code'=> '+92',
            'phone'=> '423323235',
            'role'=>'2',
        ]);
    }
}
