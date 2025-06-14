<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Orderitem;

class Order extends Model
{
    protected $fillable = [
        'userId',
        'amount',
        'address',
        'phone'
    ];
    public function items(){
        return $this->hasMany(Orderitem::class,'OrderId');
    }

    public function user()
    {
      return $this->belongsTo(User::class,'id');
    }   
}   
