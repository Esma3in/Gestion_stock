<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'customers_id',
        'products_id',
        'type'
    ];

    protected $table = 'orders';

    // Correction: Relation Many-to-Many avec Products
    public function products(): BelongsToMany {
        return $this->belongsToMany(Products::class, 'product_order', 'order_id', 'products_id')
                    ->withTimestamps();
    }

    public function customer(): BelongsTo {
        return $this->belongsTo(Customers::class, 'customers_id');
    }
}
