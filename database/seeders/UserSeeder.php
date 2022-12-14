<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            // Super Admin 
            [
                'name'=> 'User',
                'email'=> 'user@gmail.com',
                'password'=>Hash::make('11111111'),

            ],
        ]);
    }
}
