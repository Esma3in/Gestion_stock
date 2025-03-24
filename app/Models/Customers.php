<?php

namespace App\Models;

use App\Models\Order;
use App\Models\Transaction;

use Illuminate\Database\Eloquent\Factories\HasFactory ;
use Illuminate\Database\Eloquent\Model ;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Customers extends Model {
    use HasFactory ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable=[
        'nom',
        'prenom',
        'tele'
    ]
    ;
    public function order(): HasMany {
        return $this -> HasMany(Order::class);
    }

    public function transaction(): HasMany {
        return $this -> HasMany(Transaction::class);
    }

    public function purchase(): MorphMany {
        return $this->MorphMany(Transaction::class , 'transiable');
    }
}

