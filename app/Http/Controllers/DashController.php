<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DashController extends Controller
{
	public function __construct() {
		$this->middleware('backend');
	}

    public function login() {
    	$users = DB::table('users')->get();
        // $reg = \App\Guest::count();
        $reg = DB::table('guests')->get();
    	return view('backend.index', compact("users",'reg'));
    }

    public function calendar() {
        return view('layouts.calendar');
    }

    public function index() {
    	$users = DB::table('users')->get();
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
