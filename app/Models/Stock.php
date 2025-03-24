<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stock extends Model {
    use HasFactory;


    protected $fillable = [
        'stock',
        'weight',
        'products_id'
    ];

    public function product(): BelongsTo {
        return $this->belongsTo(Products::class, 'products_id');
    }
}


