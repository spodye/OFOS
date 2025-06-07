<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cartitem extends Model
{
    protected $fillable = [
        'cartId',
        'productId',
        'productname',
        'price'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'id'); 
    }
}
