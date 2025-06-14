<?php
namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order;

class Orders extends Component
{
    public $orders;
    public $expandedOrderId = null;
    public $latestOrderId = null;

    public function toggleDetails($orderId)
    {
        $this->expandedOrderId = $this->expandedOrderId === $orderId ? null : $orderId;
    }
    public function markAsCompleted($orderId)
    {
        $order = Order::find($orderId);
        if ($order && $order->status !== 'completed') {
            $order->status = 'completed';
            $order->save();
        }
    }

        public function mount()
    {
        $this->latestOrderId = \App\Models\Order::latest()->value('id');
    }
    public function checkForNewOrders()
    {
        $newLatestOrderId = \App\Models\Order::latest()->value('id');
        if ($newLatestOrderId && $newLatestOrderId != $this->latestOrderId) {
            $this->latestOrderId = $newLatestOrderId;
            $this->loadOrders();  // Call your existing loadOrders method to refresh data
        }
    }
    public function loadOrders(){
        $this->orders = Order::orderBy('created_at', 'desc')->get();

    }

    public function render()
    {
        // $orders = Order::all();
        $this->orders = Order::orderBy('created_at', 'desc')->get();
        return view('livewire.admin.orders',['orders'=>$this->orders]);
    }
}
