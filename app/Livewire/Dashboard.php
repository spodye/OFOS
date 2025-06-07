<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Cartitem;


class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',['topProducts'=>Product::orderByDesc('times_sold')->take(6)->get()]);
    }
public function addToOrder($productId)
{
    $product = Product::findOrFail($productId);
    $user = auth()->user();

    $cart = $user->cart;

    if (!$cart) {
        $cart = Cart::create([
            'userId' => $user->id,
            'amount' => 0
        ]);
    }
    // dd($cart);
    $one=Cartitem::create([
        'cartId' => $cart->id,
        'productId' => $product->id,
        'productname' => $product->name,
        'price' => $product->price
    ]);
    $this->dispatch('refresh_cart');
}

}
