<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BillingResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'patient_id' => $this->patient_id,
            'payment_mode' => $this->payment_mode,
            'payment_status' => $this->payment_status,
            'due_amount' => $this->due_amount,
            'deposited_amount' => $this->deposited_amount,
            'vat' => $this->vat,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
