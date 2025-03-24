<?php

namespace App\Models;

use App\Models\Stock;
use App\Models\Products;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
// use Illuminate\Database\Eloquent\Relations;

class Store extends Model {
    use HasFactory ;

    protected $table = 'stores';

    protected $fillable =[
        'name',
        'adresse',
        'tele'
    ];

    public function products(): HasManyThrough{
        return $this->hasManyThrough(
            Products::class,
            Stock::class,
            'store_id',
            'id',
            'id',
            'products_id'
        );
    }
}
