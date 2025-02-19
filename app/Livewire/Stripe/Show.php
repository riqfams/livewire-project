<?php

namespace App\Livewire\Stripe;

use App\Models\Product;
use Livewire\Component;

class Show extends Component
{

    public $product;
    public $stripeToken;

    public function mount($productId)
    {
        $this->product = Product::findOrFail($productId);
    }

    public function processPayment()
    {

        $stripe = new \Stripe\StripeClient(env("STRIPE_SECRET"));
        $price = $this->product->price;
        $token = $this->stripeToken;
        $description = $this->product->name;


        $charge = $stripe->charges->create([
        'amount' => $price * 100,
        'currency' => 'usd',
        'source' => $token,
        'description' => $description
        ]);
        // dd($charge);
        return back()->with("success", "Your transaction is success");
    }

    public function render()
    {
        return view('livewire.stripe.show');
    }
}
