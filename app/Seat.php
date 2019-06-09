<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
	// protected $fillable = ['bus_id','seat_no'];
	protected $guarded = [];

	public function fromTownship()
	{
		return $this->belongsTo(Township::class,'from','id');
	}
	public function toTownship()
	{
		return $this->belongsTo(Township::class,'to','id');
	}

}
