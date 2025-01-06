<?php

namespace App\Http\Controllers;

use App\Models\MedicalTest;
use Illuminate\Http\Request;

class MedicalTestController extends Controller
{
    public function index()
    {
        return response()->json(MedicalTest::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'test_name' => 'required|string',
            'date' => 'required|date',
            'result' => 'nullable|string',
        ]);

        $medicalTest = MedicalTest::create($request->all());
        return response()->json(['success' => true, 'data' => $medicalTest], 201);
    }

    public function show($id)
    {
        $medicalTest = MedicalTest::findOrFail($id);
        return response()->json(['success' => true, 'data' => $medicalTest]);
    }

    public function update(Request $request, $id)
    {
        $medicalTest = MedicalTest::findOrFail($id);

        $request->validate([
            'test_name' => 'sometimes|required|string',
            'date' => 'sometimes|required|date',
            'result' => 'nullable|string',
        ]);

        $medicalTest->update($request->all());
        return response()->json(['success' => true, 'data' => $medicalTest]);
    }

    public function destroy($id)
    {
        $medicalTest = MedicalTest::findOrFail($id);
        $medicalTest->delete();
        return response()->json(['success' => true, 'message' => 'Medical Test deleted successfully'], 204);
    }
}
