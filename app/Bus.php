<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
	protected $guarded = [];

    public function scopeFilter($query, $filters) 
    {
        $filters->apply($query);
    }

    public function route()
    {
    	return $this->hasMany(Route::class,'bus_id');
    }    

    public function booking()
    {
    	return $this->hasMany(TicketBooking::class,'bus_id');
    }
}
