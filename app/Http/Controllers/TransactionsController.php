<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class TransactionsController extends Controller
{
    public function store(Request $request) {
        try {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $session = Session::retrieve($request->query('session_id'));

        if (!$session || $session->payment_status !== 'paid') {
            return redirect()->route('transactions.index')->with('error', 'Payment failed.');
        }

        $product = Product::findOrFail($request->query('product_id'));

        $transaction = Transaction::create([
            'user_id' => Auth::id(),
            'product_id' => $product->id,
            'quantity' => $request->query('quantity'),
            'total_price' => $session->amount_total / 100,
        ]);


        return redirect()->route('transactions.detail', $transaction->id);
        } catch (\Exception $e) {
        return redirect()->route('transactions.index')->with('error', 'Error: ' . $e->getMessage());
    }
    }
}
