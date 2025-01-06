<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\MedicalTestController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\DocumentController;

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
