<?php

namespace App\Livewire\Products;

use App\Models\Product as ModelsProduct;
use Illuminate\Support\Facades\File;
use Livewire\Component;

class Product extends Component
{
    public $name;
    public $price;
    public $description;
    public $image;
    public $confirmModal;
    public $productId;

    public function confirmDeletion($id) {
        $this->confirmModal = true;
        $this->productId = $id;
    }

    public function cancelDeletion() {
        $this->confirmModal = false;
    }

    public function deleteProduct()
    {
        $product = ModelsProduct::findOrFail($this->productId);
        if ($product->image) {
            $imagePath = storage_path('app/public/' . $product->image);

        if (File::exists($imagePath)) {
            File::delete($imagePath); 
        }
        }
        $product->delete();
    
        $this->confirmModal = false;
    }

    
    public function render()
    {
        $data = ModelsProduct::all();
        return view('livewire.products.product', ['products'=>$data]);
    }
}
