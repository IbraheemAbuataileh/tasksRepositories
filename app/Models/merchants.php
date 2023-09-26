<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merchants extends Model
{
    use HasFactory;

    protected $table = 'merchants';
    protected $fillable = [  
        'name',
        'user_id', 
        'merchant_id',
    ];
    public function products(){
        return $this->hasMany(Product::class, 'merchant_id');
    }

}
