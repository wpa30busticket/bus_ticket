<?php

namespace App\Http\Controllers;
use App\Route;
use Illuminate\Http\Request;
use DB;
class RouteController extends Controller
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
        // $routes = DB::table('routes')->leftJoin('buses')->get();
        $routes = Route::get();
        return view('backend.route.index', compact("routes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $townships = DB::table('townships')->get();
        $buses = DB::table('buses')->get();
        return view('backend.route.create', compact("townships", "buses"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $route = $request->validate([
            'from'=> 'required',
            'to'=> 'required',
            'bus_id'=> 'required',
        ]);
        Route::create($route);
        return redirect()->route('route.index');

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
        $route =  \App\Route::find($id);
        $townships = DB::table('townships')->get();
        $buses = DB::table('buses')->get();
        return view('backend.route.edit', compact("route","townships",'buses'));
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
        'bus_id'=> 'required',
        'from'=> 'required',
        'to'=> 'required',
    ]);
      $route = \App\Route::find($id);
      $route->update($request->except("_token"));
      return redirect()->route('route.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('routes')->delete($id);
        return redirect()->back();
    }
}
