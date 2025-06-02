<div>
 <div class="container mt-4">
    <h1 class="text-2xl font-bold mb-4">Admin Dashboard - Products</h1>

    <a href="{{ route('admin.products.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</a>
    {{-- <a href="" class="bg-blue-500 text-white px-4 py-2 rounded">Add Product</a> --}}

    @if (session()->has('message'))
        <div class="text-green-600 mt-2">{{ session('message') }}</div>
    @endif

    <table class="table-auto w-full mt-4 border-collapse border border-gray-400">
        <thead>
            <tr class="bg-gray-200">
                <th class="border border-gray-400 px-2 py-1">Name</th>
                <th class="border border-gray-400 px-2 py-1">Description</th>
                <th class="border border-gray-400 px-2 py-1">Price</th>
                <th class="border border-gray-400 px-2 py-1">Category</th>
                <th class="border border-gray-400 px-2 py-1">Times Sold</th>
                <th class="border border-gray-400 px-2 py-1">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
                <tr>
                    <td class="border border-gray-400 px-2 py-1">{{ $product->name }}</td>
                    <td class="border border-gray-400 px-2 py-1">{{ $product->description }}</td>
                    <td class="border border-gray-400 px-2 py-1">{{ $product->price }}</td>
                    <td class="border border-gray-400 px-2 py-1">{{ $product->category }}</td>
                    <td class="border border-gray-400 px-2 py-1">{{ $product->times_sold }}</td>
                    <td class="border border-gray-400 px-2 py-1">
                        <a href="{{route('admin.products.edit', ['id' => $product]) }}" class="text-blue-500">Edit</a>
                        <!-- <button  class="text-red-500 ml-2">Delete</button> -->
                        <button wire:click="deleteProduct({{ $product->id }})" class="text-red-500 ml-2">Delete</button> 
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center py-2">No products found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

</div>
