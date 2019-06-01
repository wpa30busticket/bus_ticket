<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TicketBooking;

class PaymentController extends Controller
{
    public function index() {
    	$guest = \Session::get('guest');
    	$totalAmount = \Session::get('totalAmount');
    	$seat = \Session::get('seat');
    	$route = \Session::get('route');
// dd($route);
    	return $route;
    	$booking = new TicketBooking;
    	$booking->user_id = $guest->id;
    	// $booking->bus_id = $route->bus_id;
    	// $booking->route_id = $route->id;
    	$booking->save();


    	return view('bus.payment',compact('guest'));
    }
}
