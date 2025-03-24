<?php

namespace Database\Factories;

use App\Models\Categorie;
use App\Models\Products;
use App\Models\Suppliers;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    public function definition(): array
    {
        return [
            'product_name' => fake()->words(3, true),
            'price' => fake()->randomFloat(2, 10, 1000),
            'type' => fake()->randomElement(["electro","clothes","telehpone"]),
            'categorie_id' => function () {
                return Categorie::inRandomOrder()->first()->id;
            },
            'suppliers_id' => function () {
                return Suppliers::inRandomOrder()->first()->id;
            },
        ];
    }
} 