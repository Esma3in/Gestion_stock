<?php

namespace Database\Factories;

use App\Models\Customers;
use App\Models\Order;
use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{

    public function definition(): array
    {
        return [
            'customers_id' => function () {
                return Customers::inRandomOrder()->first()->id;
            },
            'products_id' => function () {
                return Products::inRandomOrder()->first()->id;
            },
            'type' => fake()->randomElement(['buy', 'selli', 'retour']),
        ];
    }
} 