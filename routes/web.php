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

// Route::get('/', function () {
//     return view('bus.index');
// });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'BusController@index')->name('bus.index');
Route::get('bus/{type}', 'BusController@select')->name('bus.select');
Route::get('/seats', 'BusController@seats')->name('bus.seats');
Route::get('/seats/customerlogin', 'BusController@customerlogin')->name('customer.login');
Route::get('/seats/guest', 'BusController@guest')->name('guest.login');
Route::post('/seats/guest', 'BusController@store')->name('guest.store');
Route::get('/seats/payment', 'BusController@payment')->name('seats.payment');
// Route::resource('users','Admin\UserController',['as' => 'admin']);

//backend login
Route::group(['prefix' => 'backend'], function() {     

	Route::get("/", "BackLoginController@getLogin")->name("backend.get");
	Route::post("/", "BackLoginController@postLogin")->name("backend.post");
	Route::get("/logout", "BackLoginController@logout")->name("backend.logout");
});

//backend dashboard
Route::group(['prefix' => 'dashboard',], function( ) {
	// Route::get('/', 'BackendController@index')->name('dashboard.index');
	Route::get('/', 'DashController@login')->name('dashboard.index');
	Route::get('registered_users', 'DashController@index')->name('registered.users');
	Route::delete('registered_users/{id}/delete', 'DashController@destroy')->name('registered_users.destroy');
	Route::get('guest_users', 'DashController@guest')->name('guest.users');
	Route::delete('guest_users/{id}/delete', 'DashController@guestDestroy')->name('guest_users.destroy');
});

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
