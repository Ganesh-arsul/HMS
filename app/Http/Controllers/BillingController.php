<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use Illuminate\Http\Request;
use App\Http\Resources\BillingResource;


class BillingController extends Controller
{
    public function store(Request $request)
    {
        $billing = Billing::create($request->all());
        return new BillingResource($billing);
    }

    public function update($id, Request $request)
    {
        $billing = Billing::findOrFail($id);
        $billing->update($request->all());
        return new BillingResource($billing);
    }

    public function destroy($id)
    {
        Billing::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
