<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        return response()->json(Appointment::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'date' => 'required|date',
            'time_start' => 'required|date_format:H:i',
            'time_end' => 'required|date_format:H:i|after:time_start',
            'visited' => 'required|boolean',
        ]);

        $appointment = Appointment::create($request->all());
        return response()->json(['success' => true, 'data' => $appointment], 201);
    }

    public function show($id)
    {
        $appointment = Appointment::findOrFail($id);
        return response()->json(['success' => true, 'data' => $appointment]);
    }

    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $request->validate([
            'time_start' => 'sometimes|required|date_format:H:i',
            'time_end' => 'sometimes|required|date_format:H:i|after:time_start',
            'visited' => 'sometimes|required|boolean',
        ]);

        $appointment->update($request->all());
        return response()->json(['success' => true, 'data' => $appointment]);
    }

    public function destroy($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->delete();
        return response()->json(['success' => true, 'message' => 'Appointment deleted successfully'], 204);
    }
}
