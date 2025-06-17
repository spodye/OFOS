<div>

    <div class="p-4">
    <h2 class="text-2xl font-bold mb-4">My Orders</h2>

    @if($orders->isEmpty())
        <p class="text-gray-600">You have no orders yet.</p>
    @else
        <table class="w-full table-auto border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 border">#</th>
                    <th class="p-2 border">Address</th>
                    <th class="p-2 border">Phone</th>
                    <th class="p-2 border">Amount</th>
                    <th class="p-2 border">Status</th>
                    <th class="p-2 border">Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td class="p-2 border">{{ $order->id }}</td>
                        <td class="p-2 border">{{ $order->address }}</td>
                        <td class="p-2 border">{{ $order->phone }}</td>
                        <td class="p-2 border">Rs {{ number_format($order->amount, 2) }}</td>
                        <td class="p-2 border">{{ ucfirst($order->status) }}</td>
                        <td class="p-2 border">{{ $order->created_at->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

</div>
