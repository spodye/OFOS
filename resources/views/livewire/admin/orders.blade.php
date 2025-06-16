<div>
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-semibold mb-6">Orders</h1>
<div wire:poll.2000ms="checkForNewOrders">
    <table class="w-full bg-white border border-gray-200 rounded-md shadow">
        <thead>
            <tr class="bg-gray-100 border-b border-gray-300 text-left">
                <th class="px-4 py-2">Order ID</th>
                <th class="px-4 py-2">Items</th>
                <th class="px-4 py-2">Total</th>
                <th class="px-4 py-2">Placed</th>
                <th class="px-4 py-2 text-center">Details</th>
                <th class="px-4 py-2">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($orders as $order)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $order->id }}</td>
                    <td class="px-4 py-2">{{ $order->items->count() }}</td>
                    <td class="px-4 py-2">Rs {{ $order->amount}}</td>
                    <td class="px-4 py-2">{{ $order->created_at->format('Y-m-d H:i') }}</td>
                    <td class="px-4 py-2 text-center">
                        <button
                            wire:click="toggleDetails({{ $order->id }})"
                            class="bg-blue-500 text-white text-sm px-3 py-1 rounded hover:bg-blue-600"
                        >
                            {{ $expandedOrderId === $order->id ? 'Hide' : 'Show' }}
                        </button>
                        
                    </td>
                    <td class="px-4 py-2">{{ $order->status}}</td>

                </tr>

                @if ($expandedOrderId === $order->id)
                    <tr class="bg-gray-50">
                        <td colspan="6" class="px-6 py-4">
                            <div>
                                <h3 class="font-semibold mb-2">Order Items:</h3>
                                <ul class="list-disc list-inside text-sm mb-3">
                                    @foreach ($order->items as $item)
                                        <li>{{ $item->productname }}</li>
                                    @endforeach
                                </ul>

                                <div class="text-sm space-y-1">
                                    <p><strong>Phone:</strong> {{ $order->phone ?? 'N/A' }}</p>
                                    <p><strong>Address:</strong> {{ $order->address ?? 'N/A' }}</p>
                                </div>
                            </div>
                                                    <button
                            wire:click="markAsCompleted({{ $order->id }})"
                            @if($order->status === 'completed') disabled @endif
                            class="mt-4 inline-block bg-green-600 text-white text-sm px-4 py-2 rounded hover:bg-green-700 transition disabled:opacity-50 disabled:cursor-not-allowed"
                            >
                            {{ $order->status === 'completed' ? 'Completed' : 'Mark as Completed' }}
                        </button>
                        </td>
                    </tr>
                @endif
            @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-gray-500">No orders found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
    {{-- <div class="mt-4">
        {{ $orders->links() }}
    </div> --}}
</div>
</div>
