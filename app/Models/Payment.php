<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    //

    protected $fillable = [
        'user_id',         // References the user making the payment
        'amount',          // The payment amount
        'transaction_id',  // Unique identifier for the transaction
        'status',          // Status of the payment (e.g., pending, completed, failed)
    ];

    public function users()
    {
       return $this->belongsTo(User::class);
    }
}
