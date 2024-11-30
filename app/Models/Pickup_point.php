<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pickup_point extends Model
{
    //


    protected $fillable=[
        'name',
        'latitude',
        'longitude'
    ];


    public function routes():BelongsToMany
     {
      return  $this->belongsToMany(Route::class,'route_pickup_points');
     }
}
