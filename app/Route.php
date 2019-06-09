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

    public function seat()
    {
        return $this->hasMany(Seat::class,'route_id');
    }

    public function bus()
    {
    	return $this->belongsTo(Bus::class);
    }


    public function fromTownship()
    {
    	return $this->belongsTo( Township::class,'from','id');
    }
    public function toTownship()
    {
    	return $this->belongsTo( Township::class,'to','id');
    }
}
