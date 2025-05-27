<?php
namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductForm extends Component
{
    use WithFileUploads;

    public $name, $description, $price, $category, $image;

    protected $rules = [
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
        'price' => 'required|numeric|min:1',
        'category' => 'required|string|max:100',
        'image' => 'required|image|max:2048'
    ];

    public function submit()
    {
        $this->validate();

        $filename = Str::uuid() . '.' . $this->image->getClientOriginalExtension();
        $path = $this->image->storeAs('products', $filename, 'public');

        Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
            'category' => $this->category,
            'image' => 'products/' . $filename,
            'times_sold' => 0
        ]);

        session()->flash('message', 'Product added successfully.');

        // Clear the form
        $this->reset(['name', 'description', 'price', 'category', 'image']);
    }

    public function render()
    {
        return view('livewire.admin.product-form');
    }
}
