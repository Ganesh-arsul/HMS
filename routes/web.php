<?php

use Illuminate\Support\Facades\Route;

// Root route
Route::get('/', function () {
    return view('welcome');
});

// Include API routes from api.php
require base_path('routes/api.php');



