<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('bus', 'BusController@index')->name('bus.index');
Route::get('bus/{type}', 'BusController@select')->name('bus.select');
Route::get('/seats', 'BusController@seats')->name('bus.seats');
Route::resource('users','Admin\UserController',['as' => 'admin']);

//backend login
Route::get("backend", "BackLoginController@getLogin")->name("backend.get");
Route::post("backend", "BackLoginController@postLogin")->name("backend.post");
Route::get("backend/logout", "BackLoginController@logout")->name("backend.logout");

//backend dashboard
Route::get('dashboard', 'BackendController@index')->name('dashboard.index');


Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();