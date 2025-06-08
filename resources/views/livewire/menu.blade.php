<div class="p-8 bg-gray-100 min-h-screen font-sans">
        <div class="flex mx-5 gap-6">
            <div class="flex-1 p-4 flex gap-4">
        <!-- Product Grid: 4 columns if cart is empty, 3 columns if cart has items -->
        <div class="flex-1">
            <div class="flex-1 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-{{ empty($this->items) ? 4 : 3 }} gap-6">
                @foreach ($dishes as $dish)
                    <div class="bg-white border border-gray-200 rounded-lg shadow-sm flex flex-col overflow-hidden">
                        <img src="{{ asset('storage/' . $dish->image) }}" alt="Image of {{ $dish->name }}" class="w-full h-44 object-cover">
                        
                        <div class="p-4 flex flex-col justify-between flex-1">
                            <div>
                                <div class="font-bold text-lg">{{ $dish->name }}</div>
                                <div class="text-gray-500 font-semibold mt-1">{{ $dish->category }}</div>
                                <div class="text-green-600 font-semibold mt-1">Nrs {{ number_format($dish->price, 2) }}</div>
                                <div class="text-gray-600 text-sm mt-2 line-clamp-2">
                                    {{ $dish->description }}
                                </div>
                            </div>
                            
                            <button
                                wire:click="addToOrder('{{ $dish->id }}')"
                                class="mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition-colors text-sm self-start"
                            >
                                Add to Order
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Cart Component: Only shown if cart is not empty -->
        @if (!empty($this->items))
            <div class="w-80">
                <livewire:cart/>
            </div>
        @endif
    </div>
</div>