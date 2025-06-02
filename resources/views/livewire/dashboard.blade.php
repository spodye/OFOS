<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                <h2 class="text-2xl font-bold mb-6">Top Picked Foods</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($topProducts as $product)
                        <div class="bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col overflow-hidden">
                            <img src="{{ asset('storage/products/' . $product->image) }}" alt="Image of {{ $product->name }}" class="w-full h-44 object-cover">

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
                                    {{-- wire:click="addToOrder('{{ $product->id }}')" --}}
                                    class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors text-sm self-start"
                                >
                                    Add to Order
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
                   
            </div>
            
        </div>
    </div>
</div>
