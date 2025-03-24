<?php

namespace Database\Factories;

use App\Models\Suppliers;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuppliersFactory extends Factory
{

    public function definition(): array
    {
        return [
            'nom' => fake()->lastName(),
            'prenom' => fake()->firstName(),
            'tele' => fake()->phoneNumber(),
        ];
    }
} 