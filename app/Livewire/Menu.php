<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
class Menu extends Component
{
    
    public function render()
    {
        return view('livewire.menu',['dishes'=>Product::all()]);
    }
}
