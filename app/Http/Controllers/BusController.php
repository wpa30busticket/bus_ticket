<?php

namespace App\Http\Controllers;

use App\Filters\BusFilters;
use App\Township;
use App\Bus;
use App\Guest;
use App\Route;
use App\Seat;
use App\TicketBooking;
use Illuminate\Http\Request;
use Session;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $townships = Township::get();
        if (request('route')) {
            $routes = Route::where('from',$request->route[0])->where('to',$request->route[1])->with('seat')->get();
            // foreach ($routes as $key => $value) {
            //     $booking = TicketBooking::where('route_id',$value->id)->first();
            //     $seat = Seat::where('route_id',$value->id)->where('status',0)->get();
            // }

            $request->session()->put('routes', $routes);
            $routes = $request->session()->get('routes');

            return view('bus.select_seat',compact('routes'));
        }

        $request = request();
        return view('bus.index',compact('townships','request'));
    }

    // public function select($type) {

    //     return view('bus.select_seat');
    // }

    public function seats(Request $request) {

        $request->session()->put('id', $request->id);
        $id = $request->session()->get('id');

        $route = \App\Route::findOrFail($id);
        // $booking = TicketBooking::where('route_id',$route->id)->first();
        $seats = Seat::where('route_id',$route->id)->get();
        $bookingSeats = Seat::where('route_id',$route->id)->where('status',1)->get();
        
        return view('bus.seats',compact('route','seats','bookingSeats'));
    }

    public function customerlogin() {
        return view('auth.login');
    }

    public function guest(Request $request) 
    {
        $request->session()->put('total', $request->sub_totl);
        $totalAmount = $request->session()->get('total');       

         $request->session()->put('seat', $request->seat);
        $seat = $request->session()->get('seat');  

        $request->session()->put('route', $request->route);
        $route = $request->session()->get('route');

        return view('bus.guest',compact('totalAmount','seat','route'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data =    $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|max:15',
            'address' => 'required|max:255',
            'nrc' => 'required|max:255',
        ]);
    // dd($data);

        $guest =  new \App\Guest;
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phone = $request->phone;
        $guest->address = $request->address;
        $guest->nrc = $request->nrc;
        $guest->save();

        $request->session()->put('data', $guest);
        $data= $request->session()->get('data');


        $request->session()->put('guest_id', $guest->id);
        $guest_id = $request->session()->get('guest_id');  

        // dd($guest);
        // dd($guest['name']);    
        return redirect()->route('bus.payment');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
