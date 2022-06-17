<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->text('25');

        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'sku' => str($name)->slug(),
            'name' => $name,
            'price' => $this->faker->randomFloat(2, 1.00, 500.00),
            'description' => $this->faker->text(200),
            'image' => $this->faker->url(),
            'inventory' => $this->faker->numberBetween(1, 100)
        ];
    }
}
