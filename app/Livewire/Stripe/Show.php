<?php

namespace App\Livewire\Stripe;

use App\Models\Product;
use Livewire\Component;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class Show extends Component
{

    public $productId;
    public $name;
    public $description;
    public $price;
    public $image;
    public $quantity = 1;

    public function mount($productId)
    {
        $product = Product::findOrFail($productId);
        $this->productId = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->image = $product->image;
        $this->quantity = 1;
    }

    public function increaseQuantity()
    {
        if ($this->quantity < 100) {
            $this->quantity++;
        }
    }

    public function decreaseQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function checkoutProduct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // $imageUrl = asset('storage/' . $this->image);

        $checkoutSession = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $this->name,
                        // 'images' => [$imageUrl],
                        'description' => $this->description
                    ],
                    'unit_amount' => $this->price * 100,
                ],
                'quantity' => $this->quantity,
            ]],
            'mode' => 'payment',
            'success_url' => route('stripe.index'),
            'cancel_url' => route('stripe.show', $this->productId),
            'metadata' => [
            'product_name' => $this->name,
            'description' => "Purchase of {$this->name} - $ {$this->price}"
            ]
        ]);

        return redirect($checkoutSession->url);
    }

    public function render()
    {
        return view('livewire.stripe.show');
    }
}
