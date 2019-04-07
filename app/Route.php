<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    protected $guarded = [];

    public function booking()
    {
    	return $this->hasMany(TicketBooking::class,'route_id');
    }
}
