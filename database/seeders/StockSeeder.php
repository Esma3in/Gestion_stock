<?php

namespace Database\Seeders;

use App\Models\Products;
use App\Models\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    // public function run(): void
    // {
    //     // Assurer que chaque produit a un stock
    //     Products::all()->each(function ($product) {
    //         if (!$product->stock()->exists()) {
    //             Stock::factory()->create([
    //                 'products_id' => $product->id,
    //             ]);
    //         }
    //     });
    //}
    public function run(): void{
            Stock::factory(10)->create();
        }
} 