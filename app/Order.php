<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
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
