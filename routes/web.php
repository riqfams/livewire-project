<?php

use App\Livewire\OpenAI\Index as OpenAIIndex;
use App\Livewire\Stripe\Index as StripeIndex;

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
    Route::get('/openai', OpenAIIndex::class)->name('openai.index');
    Route::get('/stripe', StripeIndex::class)->name('stripe.index');


});
