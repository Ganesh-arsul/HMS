<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return response()->json(Transaction::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'amount' => 'required|numeric',
            'transaction_type' => 'required|string',
            'status' => 'required|string',
            'date' => 'required|date',
        ]);

        $transaction = Transaction::create($request->all());
        return response()->json(['success' => true, 'data' => $transaction], 201);
    }

    public function show($id)
    {
        $transaction = Transaction::findOrFail($id);
        return response()->json(['success' => true, 'data' => $transaction]);
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
        return response()->json(['success' => true, 'data' => $transaction]);
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return response()->json(['success' => true, 'message' => 'Transaction deleted successfully'], 204);
    }
}
