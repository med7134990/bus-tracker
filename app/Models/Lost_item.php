<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lost_item extends Model
{
    protected $fillable = [
                
        'title',          
        'description', 
        'user_id' ,
       'status',
    ];

    public function user() 
    {
       return $this->belongsTo(User::class);
    }
}
