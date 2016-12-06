<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Redirect;

class PanController extends Controller
{
    
    /*
    * return new form page
    */
    public function getForm() {
        return view('pages.pan-new');
    }

    /*
    * store pan details in session
    */
    public function storeDetails(Request $request)
    {
        $request->session()->put('panuser', $request->all());
        return redirect('pan/verify');
    }
    
    /*
    * return verify page view
    */
    public function verify(Request $request) {
        $customer = $request->session()->get('panuser');
        return view('pages.pan-verify')->with('customer', $customer);
    }

    /*
    * return track page view
    */
    public function track() {
        return view('pages.pan-track');
    }

    public function lostOrDamage() {
        return view('pages.pan-lost');
    }

    public function payment() {
        return view('pages.pan-payment');
    }

    public function change() {
        return view('pages.pan-change');
    }
   


}
