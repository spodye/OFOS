<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\OrderItem;

class Order extends Model
{
    protected $fillable = [
        'Amount',
        'Address',
        'Phone'
    ];
    public function items(){
        return $this->hasMany(Orderitem::class);
    }
}   
