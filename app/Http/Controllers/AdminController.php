<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller{
    
   public function getOkta(){
   		$state = "testing";
    	$nonce = uniqid();
    	$query = http_build_query([
		    'client_id' => '0oae8huduqeRqeoGE0h7',
		    'response_type' => 'code',
		    'response_mode' => 'query',
		    'scope' => 'openid profile',
		    'redirect_uri' => 'http://localhost:8000/admin',
		    'state' => $state,
		    'nonce' => $nonce
		]);

    	$url = "https://dev-438021.oktapreview.com/oauth2/default/v1/authorize?$query";
		// dd($url);
		return redirect($url);
   }

   public function home(){
  		return view('Admin.Landing');
   }

   public function view_airlines(){
   		$airlines = User::get()->all();
   		return view('Admin.view_companies')
   		->with(compact('airlines'));
   }
}
