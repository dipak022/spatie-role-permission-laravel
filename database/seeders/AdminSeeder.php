<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('admins')->insert([
            // Super Admin 
            [
                'name'=> 'Admin',
                'email'=> 'admin@gmail.com',
                'password'=>Hash::make('11111111'),

            ],
            
        
        ]);
    }
}
