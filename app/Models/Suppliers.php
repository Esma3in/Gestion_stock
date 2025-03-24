<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Products;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Model ;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory ;

class Suppliers extends Model {
    use HasFactory ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable=[
        'nom',
        'prenom',
        'teme'
    ]
    ;
    public function products(): HasMany {
        return $this -> HasMany(Products::class);
    }
    public function order(): HasMany {
        return $this -> HasMany(Order::class);
    }
    public function transaction(): HasMany {
        return $this -> HasMany(Transaction::class);
    }

    public function sale(): MorphMany {
        return $this->MorphMany(Transaction::class , 'transiable');
    }

}
