<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Design;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::where('user_id', Auth::user()->id)->latest()->get();
        return view('profile.transactions', compact('transactions'), ['title' => 'My Transactions']);
    }

    public function create(Design $design)
    {
        $data['design_id'] = $design->id;
        $data['user_id'] = auth()->user()->id;

        Transaction::create($data);

        return redirect('/designs');
    }

    public function pay(Transaction $transaction)
    {
        $data['design_id'] = $transaction->design_id;
        $data['user_id'] = $transaction->user_id;
        $data['is_buy'] = TRUE;

        Transaction::where('id', $transaction->id)->update($data);

        return redirect('/transactions');
    }

    public function destroy(Transaction $transaction)
    {
        Transaction::destroy($transaction->id);

        return redirect('/transactions');
    }
}
