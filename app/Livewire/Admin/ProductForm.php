<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductForm extends Component
{
    use WithFileUploads;

    public $productId;
    public $name, $description, $price, $category, $image, $existingImage;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'price' => 'required|numeric|min:1',
        'category' => 'required|string|max:100',
        'image' => 'nullable|image|max:2048',
    ];

    public function mount($id = null)
    {
        if ($id) {
            $product = Product::findOrFail($id);
            $this->productId = $product->id;
            $this->name = $product->name;
            $this->description = $product->description;
            $this->price = $product->price;
            $this->category = $product->category;
            $this->existingImage = $product->image;
        }
    }

    public function submit()
    {
        $this->validate();

        if ($this->productId) {
            // Editing existing product
            $product = Product::findOrFail($this->productId);

            if ($this->image) {
                $filename = Str::uuid() . '.' . $this->image->getClientOriginalExtension();
                $this->image->storeAs('products', $filename, 'public');
                $product->image = 'products/' . $filename;
            }

            $product->update([
                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price,
                'category' => $this->category,
                // 'image'=> $this->image,
            ]);

            session()->flash('message', 'Product updated successfully.');
        } else {
            // Creating new product
            $filename = null;

            if ($this->image) {
                $filename = Str::uuid() . '.' . $this->image->getClientOriginalExtension();
                $this->image->storeAs('products', $filename, 'public');
            }

            Product::create([
                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price,
                'category' => $this->category,
                'image' => $filename ? 'products/' . $filename : null,
                'times_sold' => 0,
            ]);

            session()->flash('message', 'Product added successfully.');
        }

        return redirect()->route('admin.dashboard');
    }

    public function render()
    {
        return view('livewire.admin.product-form');
    }

    public function edit(Product $id)
    {
        

    }
}
