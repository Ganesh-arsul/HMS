<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    protected $fillable = ['user_id', 'date', 'medication', 'instructions'];
}
