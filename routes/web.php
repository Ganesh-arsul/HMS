<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\MedicalTestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DocumentController;

use App\Http\Controllers\BillingController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\NotificationController;




// routing for billing 
Route::resource('billings', BillingController::class);

// routing for doctors 
Route::resource('doctors', DoctorController::class);

// routing for petient 
Route::resource('patients', PatientController::class);

//routing for notification
Route::resource('notifications', NotificationController::class);


Route::resource('documents', DocumentController::class);


Route::resource('transactions', TransactionController::class);


Route::resource('users', UserController::class);


Route::resource('medical-tests', MedicalTestController::class);


Route::resource('prescriptions', PrescriptionController::class);


// Resource route for appointments
Route::resource('appointments', AppointmentController::class);

// Root route
Route::get('/', function () {
    return view('welcome');
});
