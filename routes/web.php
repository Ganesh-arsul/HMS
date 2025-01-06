<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;

// Resource route for appointments
Route::resource('appointments', AppointmentController::class);

// Root route
Route::get('/', function () {
    return view('welcome');
});
