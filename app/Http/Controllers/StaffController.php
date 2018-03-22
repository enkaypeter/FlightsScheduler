<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Schedule;
class StaffController extends Controller{
    
    public function display(){
    	
    }

    public function view_login(){
    	return view('auth.staff_login');
    }

    public function authenticate(Request $request){
    	$checkStaff = new Staff();

    	$email 		= $request->email;
    	$password 	= $request->password;

    	$authStaff = $checkStaff::where('Email',$email)
    	->where('Password',$password)->first();
    	$staffSchedule = Schedule::where('Airline_Name',$authStaff->Airline)->first();
    	$authStaff = $checkStaff::where('Email',$email)
    	->where('Password',$password)->get()->all();
    	// dd($staffSchedule);
    	if($authStaff){
    		return view('Staff.assignments')
    		->with(compact('authStaff'))
    		->with(compact('staffSchedule'));
    	}else{
    		return redirect('/staff/login');
    	}
    }
}
