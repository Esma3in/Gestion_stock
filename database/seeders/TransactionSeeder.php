<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    public function run(): void
    {
        // Créer 20 transactions liées aux clients
        Transaction::factory(20)->forCustomer()->create();
        
        // Créer 20 transactions liées aux fournisseurs
        Transaction::factory(20)->forSupplier()->create();
    }
} 