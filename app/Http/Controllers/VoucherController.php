<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use \App\TicketBooking;
use App\Route;
use App\Transaction;
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
        $data = Session::get('data');
        $route_id = Session::get('id');
        $seat  = Session::get('seat');
        $total  = Session::get('total');
        $guest_id = Session::get('guest_id');
        $id = $request->session()->get('id');
        $route = Route::findOrFail($id);
        // return $data;
        // return $route->created_at;   
        // return $guest_id;

        $ticket_bookings =  new TicketBooking;
        $ticket_bookings->user_id = $guest_id;
        $ticket_bookings->bus_id = $route->bus_id;
        $ticket_bookings->route_id = $id;
        $ticket_bookings->going_date = $route->created_at;
        $ticket_bookings->purchase_date = $route->created_at;
        $ticket_bookings->price = $total;
        $ticket_bookings->seat = $seat;
        $ticket_bookings->save();

        $updateSeats = explode(',', $ticket_bookings->seat);

        foreach ($updateSeats as $value) {
            $updateSeat = \App\Seat::where('route_id',$ticket_bookings->route_id)->where('seat_no',$value)->first();
            $updateSeat->update(['status' => 1]);
        }

        $final_data =    $request->validate([
            'cc_name' => 'required|max:255',
            'cc_number' => 'required|max:255',
            'cc_exp' => 'required|max:255',
            'x_card_code' => 'required|max:255',
            'x_zip' => 'required|max:255',
        ]);

        $transaction =  new Transaction;
        $transaction->user_id = $ticket_bookings->user_id;
        $transaction->booking_id = $ticket_bookings->id;
        $transaction->cc_name = $request->cc_name;
        $transaction->cc_number = $request->cc_number;
        $transaction->cc_exp = $request->cc_exp;
        $transaction->x_card_code = $request->x_card_code;
        $transaction->x_zip = $request->x_zip;
        $transaction->save();

        // return $transaction;
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
