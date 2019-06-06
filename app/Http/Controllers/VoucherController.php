<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \App\TicketBooking;
use Session;
class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // return $request;

        $final_data =    $request->validate([
            'cc-name' => 'required|max:255',
            'cc-number' => 'required|max:255',
            'cc-exp' => 'required|max:255',
            'x_card_code' => 'required|max:255',
            'x_zip' => 'required|max:255',
        ]);

        $data = Session::get('data');
        $route_id = Session::get('id');
        $seat  = Session::get('seat');
        $total  = Session::get('total');
        $guest_id = Session::get('guest_id');
        $id = $request->session()->get('id');
        $route = \App\Route::findOrFail($id);

        // return $data;
        // return $route->created_at;   
        // return $guest_id;

        $ticket_bookings =  new TicketBooking;
        $ticket_bookings->user_id = Session::get('guest_id');
        $ticket_bookings->bus_id = $route->bus_id;
        $ticket_bookings->route_id = $route->id;
        $ticket_bookings->going_date = $route->created_at;
        $ticket_bookings->purchase_date = $route->created_at;
        $ticket_bookings->price = $total;

        $ticket_bookings->save();



        // dd($route);
        return view('bus.voucher', compact('data', 'route', 'seat', 'total'));
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
        //
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
