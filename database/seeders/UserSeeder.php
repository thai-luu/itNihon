<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
            [
                'name' => "thai",
                'email' => "thai@gmail.com",
                'password' => bcrypt('123456789'),
                'role' => 1
            ],
            [
                'name' => "thailuu",
                'email' => "thailuu@gmail.com",
                'password' => bcrypt('123456789'),
                'role' => 0
            ]
        ]);
        
    }
}
