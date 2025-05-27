<div>
<div class="max-w-xl mx-auto p-6 bg-white rounded shadow">
    <h2 class="text-xl font-bold mb-4">Add New Product</h2>

    @if (session()->has('message'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" enctype="multipart/form-data" class="space-y-4">
        <div>
            <label class="block text-sm font-medium">Product Name</label>
            <input type="text" wire:model="name" class="w-full border rounded px-3 py-2" />
            @error('name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Description</label>
            <textarea wire:model="description" class="w-full border rounded px-3 py-2"></textarea>
            @error('description') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Price (NPR)</label>
            <input type="number" wire:model="price" class="w-full border rounded px-3 py-2" />
            @error('price') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Category</label>
            <input type="text" wire:model="category" class="w-full border rounded px-3 py-2" />
            @error('category') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <div>
            <label class="block text-sm font-medium">Image</label>
            <input type="file" wire:model="image" class="w-full border rounded px-3 py-2" />
            @error('image') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        @if ($image)
            <img src="{{ $image->temporaryUrl() }}" class="mt-4 w-32 h-32 object-cover rounded" />
        @endif

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            Add Product
        </button>
    </form>
</div>

</div>
