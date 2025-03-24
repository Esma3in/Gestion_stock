<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Products;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        // Créer 30 commandes
        Order::factory(30)->create()->each(function ($order) {
            // Pour chaque commande, attacher 1 à 5 produits aléatoires
            $products = Products::inRandomOrder()->take(rand(1, 5))->get();
            
            foreach ($products as $product) {
                // Ajouter le produit à la commande via la table pivot
                if (!$order->products->contains($product->id)) {
                    $order->products()->attach($product->id, [
                        'customers_id' => $order->customers_id,
                    ]);
                }
            }
        });
    }
} 