<?php

namespace App\Livewire\Transaction;

use App\Models\Transaction;
use Livewire\Component;

class Index extends Component
{

    public $transactions;

    public function mount() {
        $this->transactions = Transaction::all();
    }

    public function render()
    {
        return view('livewire.transaction.index');
    }
}
