<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
// use Auth;
class CompanyController extends Controller{
    
    public function home(){
        $user =  Auth::user();
        if($user){
    	   return view('Company.Landing')->with(compact('user')); 
        }else{
            return redirect('/login');
        }
	
    }

    public function check(Request $request){
    	$userName = $request->email;
    	$password = $request->password;

    	$user = User::where('Email',$userName)->first();
    	if (Hash::check($password, $user->Password)) {
    		Auth::loginUsingId($user->id);
    		return view('Company.Landing')->with(compact('user'));
    	}
    }

    public function register(Request $request){
    	$user = Auth::user();
    	return view('Company.Register_Staff')->with(compact('user'));

    }
}
