<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $fillable = [
        'user_id',        
        'type',          
        'data',            
    ];

    public function buses() 
    {
       return $this->belongsTo(User::class);
    }
}
