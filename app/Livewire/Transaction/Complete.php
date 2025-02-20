<?php

namespace App\Livewire\Transaction;

use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class Complete extends Component
{
    public $transaction;

    public function mount($id = 0) {
        if ($id === 0) {
            return Redirect::to(route('transactions.index'));
        }
        $this->transaction = Transaction::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.transaction.complete');
    }
}
