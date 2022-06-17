<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Http::get('https://api.escuelajs.co/api/v1/products');
        
        $data_array = [];

        // Get fifty products from the fake store api
        for ($i = 0; $i < 50; $i++) {
            array_push($data_array, [
                'category_id' => $products[$i]['category']['id'],
                'sku' => str($products[$i]['title'])->slug(),
                'name' => $products[$i]['title'],
                'price' => $products[$i]['price'],
                'description' => $products[$i]['description'],
                'image' => $products[$i]['images'][0],
                'inventory' => rand(1, 100),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        Product::insert($data_array);
    }
}
