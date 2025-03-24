<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{

    public function definition(): array
    {
        return [
            'name' => fake()->company() . ' Store',
            'adresse' => fake()->address(),
            'tele' => fake()->phoneNumber(),
        ];
    }
} 