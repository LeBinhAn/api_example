<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($index=0; $index < 5; $index++) {
            DB::table('categories')->insert([
                'title' => 'category ' . $index,
                'sub_categories' => json_encode([
                    ['title' => 'Sub-category ' . $index. '-1'],
                    ['title' => 'Sub-category ' . $index. '-2'],
                    ['title' => 'Sub-category ' . $index. '-3']
                ])
            ]);
        }
    }
}
