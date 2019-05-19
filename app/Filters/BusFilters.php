<?php

namespace App\Filters;

class BusFilters extends Filters
{

	/**
	 * Register filter properties
	 */
	protected $filters = [
		'route'
	];

	public function route($value)
    {
    	$from = $value[0];
    	$to = $value[1];

    	$route = \App\Route::where('from',$from)->where('to',$to)->first();

    	if ($route) {
    		// return $this->builder->whereHas('seat', function($query) use ($route) {
    		// 	$query->where('route_id',$route->id)->where('status',0);
    		// });
	        return $this->builder->whereHas('booking', function($query) use ($route) {
	        	$query->where('route_id',$route->id);
	        });

    	} 

    }

}