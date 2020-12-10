<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = ["Vietnam", "Japan", "Korea", "USA", "Germany", "UK"];
        $branches = ["SamSung", "Apple", "Google", "Intel", "AMD"];
        $products = ["Computer", "Car", "Laptop", "Camera"];
        for ($i=0; $i < 500; $i++) {
            $cKey = array_rand($countries, 1);
            $bKey = array_rand($branches, 1);
            $pKey = array_rand($products, 1);
            DB::table('products')->insert([
                'name' => $countries[$cKey] . ' ' . $branches[$bKey] . ' ' . $products[$pKey] . ' ' .rand(1, 9),
                'price' => rand(1000, 3000)/10,
                'description' => "'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,",
            ]);
        }
    }
}
