<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aircraft;
use App\Staff;
use Auth;
class ViewController extends Controller{
    public function view_aircraft(){
    	$user = Auth::user();
    	if($user){
    		$allAircraft = Aircraft::get()->all();
    		return view('Company.view_aircraft')
    		->with(compact('allAircraft'))
    		->with(compact('user'));
    	}else{
    		return redirect('login');
    	}
    }

    public function view_staff(){
    	$user = Auth::user();
    	if($user){
    		$allStaff = Staff::get()->all();
    		return view('Company.view_staff')
    		->with(compact('allStaff'))
    		->with(compact('user'));
    	}
    	
    }

}
