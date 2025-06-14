<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Orderitem;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class Checkout extends Component
{
    public $address;
    public $phone;
    public $cart;
    public $items = [];

    public function mount()
    {
        $user = auth()->user();
        $this->cart = $user->cart;

        if ($this->cart) {
            $this->items = $this->cart->items()->with('product')->get();
        }
    }

    protected $rules = [
        'address' => 'required|string|min:10',
        'phone' => 'required|string|min:10|max:15',
    ];

    public function placeOrder()
    {
        $this->validate();

        if (!$this->cart || $this->items->isEmpty()) {
            session()->flash('error', 'Your cart is empty.');
            return;
        }
        // dd($this->address);
        DB::transaction(function () {
            // Calculate total amount first
            $amount = $this->items->sum('price');
        
            // Create the order with correct amount
            $order = Order::create([
                'address' => $this->address,
                'userId' => auth()->id(),
                'phone' => $this->phone,
                'amount' => $amount,
            ]);
        
            // Create order items and update products
            foreach ($this->items as $item) {
                Orderitem::create([
                    'productId' => $item->productId,
                    'productname' => $item->productname,
                    'orderId' => $order->id,
                    'price' => $item->price,
                ]);
            
                $product = Product::find($item->productId);
                if ($product) {
                    $product->increment('times_sold');
                }
            
                $item->delete();
            }
        
            $this->cart->update(['amount' => 0]);
        });
        

        session()->flash('success', 'Order placed successfully!');
        return redirect()->to('/dashboard'); // redirect to homepage or thank you page
    }

    public function render()
    {
        return view('livewire.checkout');
    }
}