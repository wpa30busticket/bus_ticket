<?php

namespace App\Http\Controllers;
use App\Route;
use Illuminate\Http\Request;
use \App\Seat;
use DB;
class SeatController extends Controller
{
    public function __construct() {
        $this->middleware('backend');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $seats = Seat::all();

        return view('backend.seat.index', compact("seats"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.seat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seat = $request->validate([
            'route_id'=> 'required',
            'seat_no'=> 'required',
            'price'=> 'required',
            'status'=> 'required',
        ]);
        Seat::create($seat);
        return redirect()->route('seats.index');

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
         $seat = Seat::find($id);
         return view('backend.seat.edit', compact("seat"));
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
        $request->validate([
        'route_id'=> 'required',
            'seat_no'=> 'required',
            'price'=> 'required',
            'status'=> 'required',
    ]);
      $seats =  Seat::find($id);
      $seats->update($request->except("_token"));
      return redirect()->route('seats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('seats')->delete($id);
        return redirect()->back();
    }
}
