<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Route extends Model
{
    protected $fillable=[
      'name'
    ];

    public function pickup_ponts():BelongsTo
    {
       return $this->belongsMany(Pickup_point::class, 'route_pickup_points');
    }

    public function buses():HasMany
    {
       return $this->hasMany(Bus::class);
    }
}
