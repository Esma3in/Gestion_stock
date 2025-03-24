<?php

namespace Database\Factories;

use App\Models\Products;
use App\Models\Stock;
use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class StockFactory extends Factory
{

    public function definition(): array
    {
        return [
            'products_id' => function () {
                return Products::inRandomOrder()->first()->id;
            },
            'stock' => fake()->numberBetween(1, 100),
            'weight' => fake()->randomFloat(2, 0.1, 50),
        ];
    }
} 