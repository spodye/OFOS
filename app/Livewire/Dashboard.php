<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;


class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',['topProducts'=>Product::orderByDesc('times_sold')->take(4)->get()]);
    }
}
