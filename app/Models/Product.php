<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [  
        'name',
        'price', 
        'status',
        'merchant_id',
    ];
    public function merchant(){
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }

    public function products(){
        return $this->belongsToMany(Product::class, 'order_items')->withPivot('quantity');
    }

}
