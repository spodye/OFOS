<div class="fixed top-10 right-0 h-full w-80fixed top-0 right-0 h-full w-80 p-6">
    <h2 class="text-2xl font-bold mb-4">Your Cart</h2>

    @if(empty($items))
        <p>Your cart is empty, find some good food to order.</p>
    @else
        <table class="w-full table-auto border-collapse">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-2 border">Product</th>
                    <th class="p-2 border">Price</th>
                    <th class="p-2 border">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="p-2 border">{{ $item->productname }}</td>
                        <td class="p-2 border">₹{{ $item->price }}</td>
                        <td class="p-2 border">
                            <button wire:click="removeItem({{ $item->id }})"
                                class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded">
                                Remove
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4 text-right">
            <p class="text-lg font-semibold">Total: ₹{{ $cart->amount }}</p>
        </div>
    @endif
    <a href="{{ route('checkout') }}"
   class="mt-4 inline-block px-4 py-2 bg-green-600 text-white font-semibold rounded hover:bg-green-700 transition">
   Proceed to Checkout
</a>

</div>
