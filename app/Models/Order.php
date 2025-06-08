<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    protected $fillable = [
        'userId',
        'amount',
        'address',
        'phone'
    ];
    public function items(){
        return $this->hasMany(Orderitem::class);
    }
}   
