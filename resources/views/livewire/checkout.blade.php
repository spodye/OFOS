<div>
    {{-- The whole world belongs to you. --}}
    <div class="max-w-xl mx-auto p-6 bg-white rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Checkout</h2>

    @if (session()->has('error'))
        <div class="mb-4 text-red-600">{{ session('error') }}</div>
    @endif

    @if (session()->has('success'))
        <div class="mb-4 text-green-600">{{ session('success') }}</div>
    @endif

    <div class="mb-4">
        <label class="block text-sm font-semibold">Address</label>
        <textarea wire:model="address" class="w-full border rounded p-2 mt-1" rows="3"></textarea>
        @error('address') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        <label class="block text-sm font-semibold">Phone Number</label>
        <input type="text" wire:model="phone" class="w-full border rounded p-2 mt-1">
        @error('phone') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
    </div>

    <div class="mb-6 border-t pt-4">
        <h3 class="font-semibold mb-2">Items ({{ $items->count() }})</h3>
        <ul>
            @foreach($items as $item)
                <li class="mb-1">{{ $item->productname }} - ₹{{ $item->price }}</li>
            @endforeach
        </ul>

        <p class="mt-3 font-semibold">Total: ₹{{ $cart->amount }}</p>
    </div>

    <button wire:click="placeOrder"
            class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
        Confirm & Place Order
    </button>
</div>

</div>
