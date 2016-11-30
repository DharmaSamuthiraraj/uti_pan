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

Route::get('/newpan', function () {
    return view('newpan_step1');
});

Route::get('/newpan_verify', function () {
    return view('newpan_step2');
});

Route::get('/panchanges', function () {
    return view('panchanges');
});

Route::get('/damagedpancard', function () {
    return view('damagedpancard');
});

Route::get('/track_pancard', function () {
    return view('track_pancard');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/document', function () {
    return view('document');
});

Route::post('newpan_step2', 'UserController@saveCustomer');
//Route::get('/newpan/step2', array('as' => 'step2', 'uses' => 'UserController@showProfile'));

