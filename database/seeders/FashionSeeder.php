<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class FashionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fashions')->insert([
            [
            'name' => "Áo sơ mi lacoste",
            'species' => "áo sơ mi",
            'img_url'=> "https://anhdepfree.com/wp-content/uploads/2018/08/bo-hinh-nen-may-tinh-4k-cuc-dep-20.jpg",
            'description' => "Áo sơ mi của hãng lacoste chính hãng",
            'sold'=> "100",
        ],
        [
            'name' => "Áo sơ mi luiviton",
            'species' => "áo sơ mi",
            'img_url'=> "https://anhdepfree.com/wp-content/uploads/2018/08/bo-hinh-nen-may-tinh-4k-cuc-dep-20.jpg",
            'description' => "Áo sơ mi của hãng luiviton chính hãng",
            'sold'=> "100",
        ],
        [
            'name' => "Áo sơ mi gucci",
            'species' => "áo sơ mi",
            'img_url'=> "https://anhdepfree.com/wp-content/uploads/2018/08/bo-hinh-nen-may-tinh-4k-cuc-dep-20.jpg",
            'description' => "Áo sơ mi của hãng gucci chính hãng",
            'sold'=> "100",
        ],
        ]
    );
    }
    }

