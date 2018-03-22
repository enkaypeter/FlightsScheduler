<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airline;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{
    
    public function AirlineLogin(Request $request){

    	$findAirline = Airline::where('Email', $request->loginEmail)
    	->where('Password', $request->loginPassword)->get()->all();


    	if($findAirline){
    		if(Auth::attempt([$findAirline->Email => $request->loginEmail,$findAirline->Password => $request->Password])){
    			return view('Company.Landing')
    			->with(compact('findAirline'));
    			
    		}
    	}else{
    		$error="Invalid Email or Password";
    		return view('Company.Login_Staff')
    		->with(compact('error'));
    	}
    }
}
