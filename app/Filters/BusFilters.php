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
//     	$from = $value[0];
//     	$to = $value[1];

//     	$routes = \App\Route::where('from',$from)->where('to',$to)->with('seat')->get();

//     	if ($routes) {
//     		foreach ($routes as $key => $route) {
//     			// return $this->builder->whereHas('seat', function($query) use ($route) {
//     		// 	$query->where('route_id',$route->id)->where('status',0);
//     		// });
// 		        return  $this->builder->whereHas('booking', function($query) use ($route) {
// 		        	$query->where('route_id',$route->id);
// 		        });
//     		}

//     	} 
// //     	dd($booking);

// //     	    	foreach ($routes as $key => $value) {
// //     		$seat = \App\Seat::where('route_id',$value->id)->where('status',0)->get();
// //     		dd($seat);
// //     	}
// // dd($seat);

    }

}