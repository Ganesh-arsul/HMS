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

// Root route
Route::get('/', function () {
    return view('welcome');
});

// Routing for billing 
Route::prefix('api')->group(function () {
    Route::resource('billings', BillingController::class);
    Route::resource('doctors', DoctorController::class);
    Route::resource('patients', PatientController::class);
    Route::resource('notifications', NotificationController::class);
    Route::resource('documents', DocumentController::class);
    Route::resource('transactions', TransactionController::class);
    Route::resource('users', UserController::class);
    Route::resource('medical-tests', MedicalTestController::class);
    Route::resource('prescriptions', PrescriptionController::class);
    Route::resource('appointments', AppointmentController::class);
});
