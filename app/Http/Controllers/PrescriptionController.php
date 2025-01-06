<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    public function index()
    {
        return response()->json(Prescription::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'medication' => 'required|string',
            'instructions' => 'required|string',
        ]);

        $prescription = Prescription::create($request->all());
        return response()->json(['success' => true, 'data' => $prescription], 201);
    }

    public function show($id)
    {
        $prescription = Prescription::findOrFail($id);
        return response()->json(['success' => true, 'data' => $prescription]);
    }

    public function update(Request $request, $id)
    {
        $prescription = Prescription::findOrFail($id);
        $prescription->update($request->all());
        return response()->json(['success' => true, 'data' => $prescription]);
    }

    public function destroy($id)
    {
        $prescription = Prescription::findOrFail($id);
        $prescription->delete();
        return response()->json(['success' => true, 'message' => 'Prescription deleted successfully'], 204);
    }
}
