<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index() {
    	$guest = \Session::get('guest');

    	return view('bus.payment',compact('guest'));
    }
}
