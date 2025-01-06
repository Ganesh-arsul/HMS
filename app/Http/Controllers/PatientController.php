<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Resources\PatientResource;

class PatientController extends Controller
{
    public function store(Request $request)
    {
        $patient = Patient::create($request->all());
        return new PatientResource($patient);
    }

    public function update($id, Request $request)
    {
        $patient = Patient::findOrFail($id);
        $patient->update($request->all());
        return new PatientResource($patient);
    }

    public function destroy($id)
    {
        Patient::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

