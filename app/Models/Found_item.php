<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Found_item extends Model
{
    //

    protected $fillable = [
        'route_id',         
        'title',          
        'decription', 
        'found_at',
        'status',
    ];

    public function users() 
    {
       return $this->belongsTo(User::class);
    }
}
