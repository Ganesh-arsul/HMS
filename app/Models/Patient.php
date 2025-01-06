<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['name', 'birthday', 'phone', 'gender', 'blood', 'address', 'weight', 'height'];
}

