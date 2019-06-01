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
    public function index(BusFilters $filter,Request $request)
    {

            // dd($request->all());
        $townships = Township::get();
        if (request('route')) {
            $route = Bus::filter($filter)->get();
            if (!$route->isEmpty()) {
                $routes = null;
                return view('bus.select_seat',compact('routes'));
            }

            $routes = \App\Route::where('from',$request->route[0])->where('to',$request->route[1])->get();
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
        
        return view('bus.seats',compact('route'));
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
        $request->session()->put('guest', $guest);
        $guest = $request->session()->get('guest');    
        // dd($guest);
        // dd($guest['name']);    
        return redirect()->route('bus.payment', compact("guest"));


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
