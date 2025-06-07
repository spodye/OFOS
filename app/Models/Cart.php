<?php

namespace App\Models;
use App\Models\Cartitem;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //

        protected $fillable = [
        'userId',
        'amount'
    ];
    public function items(){
        return $this->hasMany(Cartitem::class,'cartId');
    }
}
