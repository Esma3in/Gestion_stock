<?php

namespace Database\Factories;

use App\Models\Customers;
use App\Models\Suppliers;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{

    public function definition(): array
    {
        // Décider aléatoirement si c'est un client ou un fournisseur
        $isCustomer = fake()->boolean();
        
        return [
            'customers_id' => function () {
                return Customers::inRandomOrder()->first()->id;
            },
            'suppliers_id' => function () {
                return Suppliers::inRandomOrder()->first()->id;
            },
            'transiable_type' => $isCustomer ? Customers::class : Suppliers::class,
            'transiable_id' => function () use ($isCustomer) {
                return $isCustomer 
                    ? Customers::inRandomOrder()->first()->id 
                    : Suppliers::inRandomOrder()->first()->id;
            },
        ];
    }
    
    // Transaction liée à un client
    public function forCustomer(): self
    {
        return $this->state(function () {
            $customer = Customers::inRandomOrder()->first();
            return [
                'transiable_type' => Customers::class,
                'transiable_id' => $customer->id,
                'customers_id' => $customer->id,
            ];
        });
    }
    
    // Transaction liée à un fournisseur
    public function forSupplier(): self
    {
        return $this->state(function () {
            $supplier = Suppliers::inRandomOrder()->first();
            return [
                'transiable_type' => Suppliers::class,
                'transiable_id' => $supplier->id,
                'suppliers_id' => $supplier->id,
            ];
        });
    }
} 