<?php

namespace App\Filters;

class BusFilters extends Filters
{

	/**
	 * Register filter properties
	 */
	protected $filters = [
		'user_data','route'
	];

	public function route($value)
    {
    	$from = $value[0];
    	$to = $value[1];
    	$route = \App\Route::where('from',$from)->where('to',$to)->first();
    	if ($route) {
	        return $this->builder->whereHas('booking', function($query) use ($route) {
	        	$query->where('route_id',$route->id);
	        });
    	}
    	// dd($route);
    	return $value;
    }

    // public function user_data($value)
    // {
    //     return $this->builder->where('name', $value)
    //     					->orWhere('email', $value)
    //     					->orWhere('phone', $value)
    //     					->orWhere('user_code', $value);
    // }

	/**
	 * Filter by transaction's user data.
	 */
	// public function user_data($value) 
	// {
	// 	return $this->builder
	// 		->whereHas('user', function ($query) use ($value) {
	// 			$query->where('phone', $value);
	// 		});
	// }

}