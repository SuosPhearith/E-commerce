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
            ['name' => 'Living Room Furniture', 'description' => 'Furniture for the living room', 'modified_by' => 1],
            ['name' => 'Bedroom Furniture', 'description' => 'Furniture for the bedroom', 'modified_by' => 1],
            ['name' => 'Dining Room Furniture', 'description' => 'Furniture for the dining room', 'modified_by' => 1],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert($category);
        }
    }
}
