<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Buslist;
class BuslistController extends Controller
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
        $buses = DB::table('buses')->get();
        return view('backend.buslist.index', compact("buses"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.buslist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return($request);
        $bus = $request->validate([
            'name'=> 'required',
            'type'=> 'required',
            'bus_no'=> 'required',
        ]);
        \App\Bus::create($bus);
        return redirect()->route('buslist.index');
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
        $bus = \App\Bus::find($id);
        return view("backend.buslist.edit", compact("bus"));
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
        'name'=> 'required',
        'type'=> 'required',
        'bus_no'=> 'required',
    ]);
      $bus = \App\Bus::find($id);
      $bus->update($request->except("_token"));
      return redirect()->route('buslist.index');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('buses')->delete($id);
        return redirect()->back(); 
    }
}
