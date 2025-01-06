<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedicalTest extends Model
{
    protected $fillable = [
        'user_id',
        'test_name',
        'date',
        'result',
    ];
}
