<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\NotificationController;

Route::resource('prescriptions', PrescriptionController::class);


// Resource route for appointments
Route::resource('appointments', AppointmentController::class);

// routing for billing 
Route::resource('billings', BillingController::class);

// routing for doctors 
Route::resource('doctors', DoctorController::class);

// routing for petient 
Route::resource('patients', PatientController::class);

//routing for notification
Route::resource('notifications', NotificationController::class);




// Root route
Route::get('/', function () {
    return view('welcome');
});
