<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = ['title', 'content', 'type', 'roles', 'start_date', 'end_date'];
}
