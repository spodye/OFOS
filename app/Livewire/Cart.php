<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cart;
    public $items = [];
    protected $listeners = ['refresh_cart'=>'loadItems'];

    public function mount()
    {
        $user = auth()->user();
        $this->cart = $user->cart;

        if ($this->cart) {
            $this->items = $this->cart->items()->with('product')->get();
        }
    }

    public function loadItems(){
        $this->refreshCart();
        $user = auth()->user();
        $this->cart = $user->cart;
        
    }

    public function removeItem($itemId)
    {
        $item = $this->cart->items()->find($itemId);
        if ($item) {
            $item->delete();
        }

        $this->refreshCart();
    }

    public function refreshCart()
    {
        $this->items = $this->cart->items()->with('product')->get();
        $amount = $this->items->sum(fn($item) => $item->price);
        // dd($amount);
        $this->cart->update(['amount' => $amount]);
        $this->cart->refresh();
        // dd($this->cart);
    }

    public function render()
    {
        return view('livewire.cart');
    }
}

