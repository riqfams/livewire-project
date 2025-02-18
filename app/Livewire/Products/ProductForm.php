<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductForm extends Component
{
    use WithFileUploads;
    public $name, $price, $description, $image;
    public $productId;

    // public function mount($productId)
    // {
    //     dd($productId);
    // }

    public function store()
    {
        $rules = [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:1024',
        ];

        $validated = $this->validate($rules);

        if ($this->image) {
            $uploadPath = public_path('uploads/products');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true); 
            }

            $fileName = md5(time() . '_' . $this->image->getClientOriginalName()) . '.' . $this->image->getClientOriginalExtension();
            
            $this->image->storeAs('uploads/products', $fileName, 'public');

            $validated['image'] = 'uploads/products/' . $fileName;
        }

        Product::create($validated);

        return redirect()->route('products.index');
    }

    public function render()
    {
        return view('livewire.products.product-form');
    }
}
