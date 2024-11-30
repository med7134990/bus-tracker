<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bus extends Model
{


   protected $fillable =[
      'bus_number',    // The number or unique identifier for the bus
    'bus_capacity',  // The seating capacity of the bus
    'route_id',   //the route associated with this bus
   ];
    public function routes() 
    {
       return $this->belongsTo(Route::class);
    }

    public function bus_locations(): HasMany
    {
       return $this->hasMany(Bus_location::class);
    }
}
