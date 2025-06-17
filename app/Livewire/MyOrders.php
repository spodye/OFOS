<?php
namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class MyOrders extends Component
{
    public $orders;

    public function mount()
    {
        $this->orders = Auth::user()->orders()->latest()->get();
    }

    public function render()
    {
        return view('livewire.my-orders');
    }
}
