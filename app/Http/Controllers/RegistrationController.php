<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\LoginDetails;
use App\Airline;
use App\User;
use App\Staff;
use App\Aircraft;

class RegistrationController extends Controller{
    
    public function Adminstore(Request $request){
    	$airlines 				= new Airline;
    	$password 				= uniqid();
    	$airlines->Name 		= $request->name;
    	$airlines->Phone 		= $request->phone;
    	$airlines->Address 		= $request->address;
    	$airlines->Email 		= $request->email;
    	$airlines->Password 	= $password;

    	$emailAdd = $request->email;
    	$mailDetails = ["email" => $emailAdd,"password" => $password];
    	\Mail::to($emailAdd)->send(new LoginDetails($mailDetails));

    	$airlines->save();

    	return redirect('/admin');

    }

    public function CompanyStaffView(){

    	$user = Auth::user();

    	return view('Company.Register_Staff')
    	->with(compact('user'));
    }

    public function CompanyStaffStore(Request $request){
    	$user 					= Auth::user();
    	$staff 					= new Staff;
		$password 				= uniqid();
    	
    	$staff->Name 			= $request->name;
    	$staff->Phone 			= $request->phone;
    	$staff->Email 			= $request->email;
    	$staff->Address 		= $request->address;
    	$staff->Designation 	= $request->designation;
    	$staff->Airline 		= $user->Name;
    	$staff->Password 		= $password;

    	$emailAdd 		= $request->email;
    	$mailDetails 	= ["email" => $emailAdd,"password" => $password];
    	\Mail::to($emailAdd)->send(new LoginDetails($mailDetails));

    	$staff->save();

		return view('Company.Register_Staff')
    		->with(compact('user'));
    		
    }

    public function CompanyAircraftView(Request $request){
    	$user 		= Auth::user();
    	return view('Company.Register_Aircraft')
    	->with(compact('user'));	

    }

    public function CompanyAircraftStore(Request $request){
    	$user 		= Auth::user();
    	$aircraft 	= new Aircraft;
    	
    	$aircraft->Capacity 	= $request->capacity;
    	$aircraft->Name 		= $request->name;
    	$aircraft->AirlineName 	= $user->Name;
    	$aircraft->save();

    	return redirect('/company');
    }
}

