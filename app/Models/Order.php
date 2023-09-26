<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oreder extends Model
{
    use HasFactory;
    protected $table = 'Oreder';
    protected $fillable = [  
        'user_id',
        'price', 
        'status',
        'merchant_id',
    ];
    
    public function orders(){
        return $this->belongsToMany(Order::class, 'order_items')->withPivot('quantity');
    }
}
