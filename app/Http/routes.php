<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/contactus', function () {
    return view('pages.contact');
});

Route::get('/documents', function () {
    return view('pages.document');
});


Route::group(array('prefix' => 'pan'), function(){
	
	Route::get('new', 'PanController@getForm');

	Route::post('new', 'PanController@storeDetails');

	Route::get('verify', 'PanController@verify');

	Route::get('track', 'PanController@track');

	Route::get('lost', 'PanController@lostOrDamage');

	Route::post('payment', 'PanController@postPaymentSummary');

    Route::get('payment', 'PanController@payment');

	Route::get('change', 'PanController@change');

});

