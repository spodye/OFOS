<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Cartitem;
use App\Models\Cart;

class Menu extends Component
{
    public $items = [];


    public function mount()
    {
        $user = auth()->user();
        $this->cart = $user->cart;

        if ($this->cart) {
            $this->items = $this->cart->items()->with('product')->get()->toArray();
        }
    }

    public function refreshCart()
    {
        $user = auth()->user();
        $this->cart = $user->cart;

        $this->items = $this->cart ? $this->cart->items()->with('product')->get()->toArray() : [];
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

        Cartitem::create([
            'cartId' => $cart->id,
            'productId' => $product->id,
            'productname' => $product->name,
            'price' => $product->price
        ]);

        $this->dispatch('refresh_cart');
        $this->refreshCart();
    }

    public function render()
    {
        return view('livewire.menu', ['dishes' => Product::all()]);
    }
}