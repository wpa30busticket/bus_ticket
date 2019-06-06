<?php

namespace App\Http\Controllers;
use DB;
use App\TicketBooking;
use App\Guest;
use App\User;
use App\Route;
use Illuminate\Http\Request;

class DashController extends Controller
{
	public function __construct() {
		$this->middleware('backend');
	}

    public function login() {

        $users = User::count();
        $reg = Guest::count();
        $order = TicketBooking::count();

    	return view('backend.index', compact('users', 'reg', 'order'));
    }

    public function order() {
        $route = Route::get();
        $orders = TicketBooking::get();
        return view('backend.orders', compact("orders", "route"));
    }

    public function calendar() {
        return view('layouts.calendar');
    }

    public function index() {
    	$users = User::get();
    	return view('backend.registered_users', compact("users"));
    }

    public function guest() {
        $search = request('search');
        $guests = DB::table('guests')->where('name','like', '%'.$search.'%')->paginate(10);
        return view('backend.guest', compact("guests",'search'));
    }

    public function guestDestroy($id) {
        DB::table('guests')->delete($id);
        return redirect()->back();
    }


    public function destroy($id) {
    	DB::table('users')->delete($id);
    	return redirect()->back();
    }
}
