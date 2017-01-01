<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DateTime;
//date_default_timezone_set('UTC');
use Uuid;
use Carbon\Carbon;
use Session;
use Redirect;

class UserController extends Controller
{
      
    /*
    * return new form page
    */
    public function showNewForm() {      
        
        return view('pages.pan-new', ['user' => array()]);
    }

    /*
    * store pan details in session
    */
    public function storeDetails(Request $request) {

    	if($request->input('uid') != '') {
    		$uid = $request->input('uid');
    		Session::forget('user');
    	} else {
    		$uid = uniqid();
    	}  

    	$user = $request->all();
        $user['uid'] = $uid;
    	Session::put('user', $user);        
        return redirect('pan/verify/'.$uid);
    }
    
    /*
    * return verify page view
    */
    public function verify($uid) {
        if(Session::has('user') && Session::get('user')['uid'] == $uid) {
            $user =  Session::get('user');           
            return view('pages.pan-verify', ['user' => $user]);
        } 
        return response('Invalid Id', 404)
                  ->header('Content-Type', 'text/plain');  
       
    }

    /*
    * return Edit form page
    */
    public function showEditForm($uid) { 
        if(Session::has('user') && Session::get('user')['uid'] == $uid) {
            $user =  Session::get('user');             
            return view('pages.pan-new', ['user' => $user]);
        }

        return response('Invalid Id', 404)
                  ->header('Content-Type', 'text/plain');          
        
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

    public function postPayment(Request $request) {     	
    	if(Session::has('user')) {
    		$user = Session::get('user');
    		$user['payment'] = $request->all();
    		Session::forget('user');
    		Session::put('user', $user);
    		return redirect('pan/payment/'.$user['uid']);
    	}
         
        return response('Invalid Id', 404)
                  ->header('Content-Type', 'text/plain');        
    }

    public function paymentSummary($uid) {
    	print $uid;
    	if(Session::has('user') && Session::get('user')['uid'] == $uid) {
    		$user = Session::get('user');
    		$payment = $user['payment'];
    		print_r($payment);
        	return view('pages.pan-payment', ['payment' => $payment]);

    	}
        
    }
    
    public function change() {
        return view('pages.pan-change');
    }

    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function saveCustomer(Request $request)
    {
       $uuid = Uuid::generate(4);
	   	   	   
	   $customer_name = $request->input('firstName');
	   
	   /* Customers table insert  */
	   $customer_id = DB::table('customers')->insertGetId([
	   					'customer_uid' => $uuid, 
	   					'customer_name' => $customer_name,
	   					'created_at' => Carbon::now()
	   					]);	
		//print_r($customer_id);
	   
	  if($customer_id) {
		  $dob = $request->input('date').'-'.$request->input('month').'-'.$request->input('year'); 
		  $d = new DateTime($dob);
		  $formatted_dob = $d->format('Y-m-d');		
			
	   		/* Personal info table insert */ 
	   		$personal_info_result = DB::table('personal_info')->insert([
	   							'customer_id' => $customer_id,
	   							'category' => $request->input('category'),
	   							'first_name' => $request->input('firstName'),
	   							'middle_name' => $request->input('middleName'),
	   							'last_name' => $request->input('lastName'),
	   							'gender' => $request->input('gender'),
	   							'marital_status' => $request->input('maritalStatus'),
	   							'dob' => $formatted_dob,
	   							'first_name_on_pancard' => $request->input('pancardFirstname'),
	   							'last_name_on_pancard' => $request->input('pancardLastname'),
	   							'other_name' => '',
	   							'father_first_name' => $request->input('fathersFirstname'),
	   							'father_middle_name' => $request->input('fathersMiddlename'),
	   							'father_last_name' => $request->input('fathersLastname')
	   						]);	 
				//print_r($personal_info_result);	   		

	   		/* Contacts table insert */
	   		$contacts_result = DB::table('contacts')->insert([
	   							'customer_id' => $customer_id,
	   							'mobile' => $request->input('mobile'),
	   							'email' => $request->input('emailId'),
	   							'landline' => $request->input('std') + $request->input('landLine'),
	   							'communication_pref' => $request->input('communication')	   							   							
	   						]);
				//print_r($contacts_result);   

	   		/* Document proof table insert  */ 
	   		$document_proof_result = DB::table('document_proof')->insert([
	   							'customer_id' => $customer_id,
	   							'id_proof' => $request->input('idProof'),
	   							'address_proof' => 'Gas bill',
	   							'dob_proof' => $request->input('dateOfbirthProof'),
	   							'office_address_proof' => 'Office Id'	   							   							
	   						]);

	   		/* Income source table insert  */
	   		$income_source_result = DB::table('income_source')->insert([
	   							'customer_id' => $customer_id,
	   							'no_income' => $request->input('noIncome'),
	   							'salary' => $request->input('salary'),
	   							'captial_gains' => $request->input('capitalGains'),
	   							'business_or_proffession' => $request->input('businessProfession'),
	   							'house_property' => $request->input('houseProperty'),
	   							'other_sources' => $request->input('otherSources')	   							   							
	   						]);
	   		$communication_pref = $request->input('communication');

	   		if($communication_pref == 'Residence') {
		   		/* Residence address table insert */ 
		   		$address_result = DB::table('address')->insert([
		   							'customer_id' => $customer_id,
		   							'address_type' => $communication_pref,
		   							'door_number' => $request->input('resi_Doorno'),
		   							'building_name' => $request->input('resbuildingName'),
		   							'street_name' => $request->input('resStreet'),
		   							'area_name' => $request->input('resArea'),
		   							'city' => $request->input('res_city'),
		   							'state' => $request->input('resState'),
		   							'pin_code' => $request->input('resPincode'),
		   							'country' => $request->input('resCountry')	   							
		   						]);	  		
	   			
	   		} 
	   		else {
		   		/* Office address table insert */  
		   		$address_result = DB::table('address')->insert([
		   							'customer_id' => $customer_id,
		   							'address_type' => $communication_pref,
		   							'office_name' => $request->input('officeName'),
		   							'door_number' => $request->input('off_Doorno'),
		   							'building_name' => $request->input('offBuilding'),
		   							'street_name' => $request->input('offStreetname'),
		   							'area_name' => $request->input('OffLocality'),
		   							'city' => $request->input('offCity'),
		   							'state' => $request->input('offState'),
		   							'pin_code' => $request->input('offPincode'),
		   							'country' => 'India'	   							
		   						]); 		   		
	   		}	   		
			
			
	   		
	   		$customer = DB::table('customers')
            ->join('contacts', 'customers.customer_id', '=', 'contacts.customer_id')
            ->join('personal_info', 'customers.customer_id', '=', 'personal_info.customer_id')
            ->join('document_proof', 'customers.customer_id', '=', 'document_proof.customer_id')
            ->join('income_source', 'customers.customer_id', '=', 'income_source.customer_id')
            ->join('address', 'customers.customer_id', '=', 'address.customer_id')
            ->select('customers.*', 'contacts.*', 'personal_info.*', 'document_proof.*', 'income_source.*', 'address.*')
			->where('customers.customer_id', '=', $customer_id)
            ->get();
			
			return view('newpan_step2')->with('customer', $customer);
			
			//return redirect()->route('step2', ['customer' => $customer]);

	  }
    
  }
}
