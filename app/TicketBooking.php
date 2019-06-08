<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketBooking extends Model
{
    protected $guarded = [];

    public function route()
    {
    	return $this->belongsTo(Route::class);
    }

	public function fromTownship()
    {
    	return $this->belongsTo(Township::class,'from','id');
    }
    public function toTownship()
    {
    	return $this->belongsTo(Township::class,'to','id');
    }

    public function guestName()
    {
    	return $this->belongsTo(Guest::class, 'user_id', 'id');
    }    

    public function userName()
    {
    	return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function busName()
    {
    	return $this->belongsTo(Bus::class, 'bus_id', 'id');
    }
}
