<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $fillable = [
        'patient_id', 'payment_mode', 'payment_status', 'due_amount', 'deposited_amount', 'vat'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}

