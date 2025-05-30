<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;

class Dashboard extends Component
{
    public $products;

    public function mount()
    {
        $this->loadProducts();
    }

    public function loadProducts()
    {
        $this->products = Product::all();
    }

    public function deleteProduct($id)
    {
        Product::findOrFail($id)->delete();
        $this->loadProducts();
        session()->flash('message', 'Product deleted successfully.');
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
