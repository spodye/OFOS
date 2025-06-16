<div>
    {{-- Left-aligned bold heading --}}
    <div class="w-full text-left mb-4">
        <strong class="text-2xl font-extrabold">Top Sold Items</strong>
    </div>

    <div class="flex flex-col lg:flex-row gap-6">
        {{-- Products Grid --}}
        <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($topProducts as $product)
                <div class="p-4">
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col overflow-hidden">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Image of {{ $product->name }}" class="w-full h-44 object-cover">

                        <div class="p-4 flex flex-col justify-between flex-1">
                            <div>
                                <div class="font-bold text-lg">{{ $product->name }}</div>
                                <div class="text-gray-500 font-semibold mt-1">{{ $product->category }}</div>
                                <div class="text-green-600 font-semibold mt-1">Nrs {{ number_format($product->price, 2) }}</div>
                                <div class="text-gray-600 text-sm mt-2 line-clamp-2">
                                    {{ $product->description }}
                                </div>
                            </div>

                            <button
                                wire:click="addToOrder('{{ $product->id }}')"
                                class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors text-sm self-start"
                            >
                                Add to Order
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        {{-- Cart Section --}}
        <div class="p-4 w-full lg:w-1/3">
            <livewire:cart />
        </div>
    </div>
</div>
