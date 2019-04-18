<?php

namespace App\Http\Controllers;

use App\Filters\BusFilters;
use App\Township;
use App\Bus;
use App\Guest;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BusFilters $filter)
    {
         //dd($request->all());
        $townships = Township::get();
        if (request('route')) {
            $bus = Bus::filter($filter)->get();
            // return $bus;
            return view('bus.select_seat',compact('bus'));
        }

        $request = request();
        return view('bus.index',compact('townships','request'));
    }

    public function select($type) {

        return view('bus.select_seat');
    }

    public function seats() {
        return view('bus.seats');
    }

    public function customerlogin() {
        return view('auth.login');
    }

    public function guest() {
        return view('bus.guest');
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
        $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|max:255',
        'phone' => 'required|max:15',
        'address' => 'required|max:255',
        'nrc' => 'required|max:255',
    ]);
        $guest =  new \App\Guest;
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->phone = $request->phone;
        $guest->address = $request->address;
        $guest->nrc = $request->nrc;
        
        $guest->save();
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
