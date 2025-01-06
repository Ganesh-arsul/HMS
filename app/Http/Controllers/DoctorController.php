<?php

namespace App\Http\Controllers;


use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Resources\DoctorResource;

class DoctorController extends Controller
{
    public function store(Request $request)
    {
        $doctor = Doctor::create($request->all());
        return new DoctorResource($doctor);
    }

    public function update($id, Request $request)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->update($request->all());
        return new DoctorResource($doctor);
    }

    public function destroy($id)
    {
        Doctor::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

