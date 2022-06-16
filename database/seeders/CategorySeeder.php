<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([[
            'name' => 'Clothes',
            'slug' => 'clothes'
        ], [
            'name' => 'Electronics',
            'slug' => 'electronics'
        ], [
            'name' => 'Furniture',
            'slug' => 'furniture'
        ], [
            'name' => 'Shoes',
            'slug' => 'shoes'
        ], [
            'name' => 'Others',
            'slug' => 'others'
        ]]);
    }
}
