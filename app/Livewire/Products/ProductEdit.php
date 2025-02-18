<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Illuminate\Support\Facades\File;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductEdit extends Component
{
    use WithFileUploads;
    public $name, $price, $description, $image;
    public $productId;

    public function mount($productId)
    {
       $this->productId = $productId;
       $product = Product::findOrFail($this->productId);
       $this->name = $product->name;
       $this->price = $product->price;
       $this->description = $product->description;
       $this->image = $product->image;
    }

    public function update() {
        // $this->product = Product::findOrFail($productId);
        $rules = [
            'name' => 'required|string',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:1024',
        ];

        
        $validated = $this->validate($rules);
        $data = Product::find($this->productId);
        if ($data->image) {
            $imagePath = storage_path('app/public/' . $data->image);

        if (File::exists($imagePath)) {
            File::delete($imagePath); 
        }
        }
        

        if ($this->image) {
            $uploadPath = public_path('uploads/products');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0777, true); 
            }

            $fileName = md5(time() . '_' . $this->image->getClientOriginalName()) . '.' . $this->image->getClientOriginalExtension();
            
            $this->image->storeAs('uploads/products', $fileName, 'public');

            $validated['image'] = 'uploads/products/' . $fileName;
        }

        $data->update($validated);

        return redirect()->route('products.index');
    }

    public function clear() {
        $this->productId = '';
        $this->name = '';
        $this->price = '';
        $this->image = '';
        $this->description = '';
    }

    public function render()
    {
        return view('livewire.products.product-edit')->layout('layouts.app');
    }
}

