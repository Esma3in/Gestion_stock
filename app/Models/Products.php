<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\Categorie;
use App\Models\Suppliers;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Relations\;

class Products extends Model {
    use HasFactory ;

    protected $fillable=[
        'categorie_id',
        'product_name',
        'price',
        'type',
        'suppliers_id',
    ];
    public function categorie(): BelongsTo {
        return $this->belongsTo(Categorie::class);
    }
    public function suppliers(): BelongsTo {
        return $this->belongsTo(Suppliers::class);
    }
    public function stock(): HasOne {
        return $this->hasOne(Stock::class, 'products_id');
    }
    public function orders(): BelongsToMany {
        return $this->belongsToMany(Order::class, 'product_order', 'products_id', 'order_id')
                    ->withTimestamps();
    }
}

