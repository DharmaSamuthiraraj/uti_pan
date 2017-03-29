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

	Route::get('new', 'UserController@showNewForm');
	
	Route::get('edit/{uid}', 'UserController@showEditForm');

	Route::post('new', 'UserController@storeDetails');

	Route::get('verify/{uid}', 'UserController@verify');

	Route::get('track', 'UserController@track');

	Route::get('lost', 'UserController@lostOrDamage');

	Route::post('payment', 'UserController@postPayment');

    Route::get('payment/{uid}', 'UserController@paymentSummary');

	Route::get('change', 'UserController@change');

	Route::get('pdfview', array('as'=>'pdfview','uses'=>'PanController@pdfview'));

});

