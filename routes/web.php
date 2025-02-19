<?php


use App\Livewire\OpenAI\Index as OpenAIIndex;
use App\Livewire\Stripe\Index as StripeIndex;
use App\Livewire\Stripe\Show as StripeShow;

use App\Livewire\Products\ProductEdit;
use App\Livewire\Products\ProductForm;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::get('/profile', function () {return view('profile.show');})->name('profile.show');
    Route::get('/products', function () {
        return view('products.index');
    })->name('products.index');
    Route::get('/products/create', function () {
        return view('products.product-form');
    })->name('products.create');
    Route::get('/products/{productId}/edit', ProductEdit::class)->name('products.edit');
    Route::get('/openai', OpenAIIndex::class)->name('openai.index');
    Route::get('/stripe', StripeIndex::class)->name('stripe.index');
    Route::get('/stripe/{productId}/detail', StripeShow::class)->name('stripe.show');

});
