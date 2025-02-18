<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductEdit extends Component
{
    use WithFileUploads;
    public $name, $price, $description, $image;
    // public $productId;

    // public function mount($productId)
    // {
    //     dd($productId);
    // }

    public function render()
    {
        return view('livewire.products.product-edit');
    }
}

