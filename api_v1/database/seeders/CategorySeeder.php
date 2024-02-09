<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Chair', 'description' => 'High quality, comfortable for sitting', 'modified_by' => 1],
            ['name' => 'Sofa', 'description' => 'Crafted with meticulous attention to detail, this bed offers the perfect blend of functionality and elegance.', 'modified_by' => 1],
            ['name' => 'Desk', 'description' => 'Crafted with precision and passion, this table embodies the perfect fusion of style and practicality, making it a stunning centerpiece for your home.', 'modified_by' => 1],
            ['name' => 'Bed', 'description' => 'Designed with both style and functionality in mind, this exquisite piece of furniture effortlessly combines practicality with elegance, offering a stylish way to declutter and organize your space.', 'modified_by' => 1],

        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
