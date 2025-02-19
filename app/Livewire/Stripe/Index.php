<?php

namespace App\Livewire\Stripe;

use App\Models\Product;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class Index extends Component
{
    public $products;

    public function mount() {
        $this->products = Product::all();
    }

    public function selectProduct($productId)
    {
        return Redirect::to(route('stripe.show', ['productId' => $productId]));
    }

    public function render()
    {
        return view('livewire.stripe.index');
    }
}
