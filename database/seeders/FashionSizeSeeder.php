<?php

namespace Database\Seeders;

use App\Models\Fashion;
use Illuminate\Database\Seeder;
use DB;

class FashionSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fashions = Fashion::all();
        foreach($fashions as $fashions) {
            $fashions->sizes()->attach([
                1 => ['quantity' => rand(0, 100)],
                2 => ['quantity' => rand(0, 100)],
                3 => ['quantity' => rand(0, 100)],
                4 => ['quantity' => rand(0, 100)],
                5 => ['quantity' => rand(0, 100)]
            ]);
        }
    }
}
