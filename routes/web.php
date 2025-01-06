<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PrescriptionController;

Route::resource('prescriptions', PrescriptionController::class);


// Resource route for appointments
Route::resource('appointments', AppointmentController::class);

// Root route
Route::get('/', function () {
    return view('welcome');
});
