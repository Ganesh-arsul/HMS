<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'user_id', 
        'date', 
        'time_start', 
        'time_end', 
        'visited', 
        'reason'
    ];
}
