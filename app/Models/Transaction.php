<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    
    protected $table = 'transactions';

    protected $fillable = [
        'customers_id',
        'suppliers_id',
        'transiable_id',
        'transiable_type',
        'amount', // À ajouter dans votre migration
        'transaction_date', // À ajouter dans votre migration
    ];

    // Relation polymorphique
    public function transiable(): MorphTo {
        return $this->morphTo();
    }

    public function customer(): BelongsTo {
        return $this->belongsTo(Customers::class, 'customers_id');
    }
    
    public function supplier(): BelongsTo {
        return $this->belongsTo(Suppliers::class, 'suppliers_id');
    }
}
