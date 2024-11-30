<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bus_location extends Model
{
    protected $fillable=[
       
       'latitude',
       'longitude',
       'bus_id',
       'user_id'
    ];

    public function users() 
    {
       return $this->belongsTo(User::class);
    }

    public function buses() 
    {
       return $this->belongsTo(Bus::class);
    }
}
