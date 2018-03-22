<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CityData;
use App\User;
use App\Schedule;
use App\Aircraft;
use App\Staff;
use App\FleetAssignment;
use Auth;
class ScheduleController extends Controller{
    public function cities(){
    	
    	$city_data = new CityData;

    	$city_data = CityData::get();
    	return $city_data;
    }

    public function view(){
    	$user = Auth::user();
    	$cityData = $this->cities();
    	if(!$user){
    		return redirect('/login');
    	}
    	return view('Company.Schedule')
    	->with(compact('user'))
    	->with(compact('cityData'));
    }

    public function store(Request $request){
    	$cityData 	= $this->cities();
    	$user 		= Auth::user();
    	$schedules 	= new Schedule;
    	$schedules->Airline_Name 		= $user->Name;
    	$schedules->Origin 				= $request->origin;
    	$schedules->OriginDate 			= $request->originDate;
    	$schedules->DestinationDate 	= $request->destinationDate;
    	$schedules->Destination 		= $request->destination;

    	$checkSchedules = Schedule::where('Origin',$request->origin)
    	->where('OriginDate',$request->OriginDate)
    	->where('Destination',$request->destination)
    	->where('DestinationDate',$request->destinationDate)->first();
    	if(!isset($checkSchedules)){
    		$schedules->save();
    		return redirect('/company/schedule');
    	}else{
    		$error = "Route already Exists!!";
    		return view('Company.Schedule')
    		->with(compact('user'))
    		->with(compact('cityData'))
    		->with(compact('error'));
    	}

    }

    public function store_fleet(Request $request){
            $user = Auth::user();
            $fleet = new FleetAssignment();

            $fleet->Route_Origin       = $request->origin;
            $fleet->Route_Destination  = $request->destination;
            $fleet->Staff_1            = $request->staff_1;
            $fleet->Staff_2            = $request->staff_2;
            $fleet->Staff_3            = $request->staff_3;
            $fleet->Aircraft_Name      = $request->aircraft;
            $fleet->Airline_Name       = $user->Name;
            $fleet->save();
            // dd($fleet);

            return redirect('/company');

    }

    public function view_fleet_reg(Request $request){
        $user           = Auth::user();
        $fleet_details  = Schedule::where('Airline_Name',$user->Name)->get()->all();
        $aircrafts      = Aircraft::where('AirlineName',$user->Name)->get()->all();
        $staff          = Staff::where('Airline',$user->Name)->get()->all();
        // dd($staff);
        return view('Company.FleetAssignment')
        ->with(compact('user'))
        ->with(compact('fleet_details'))
        ->with(compact('aircrafts'))
        ->with(compact('staff'));
    }

    public function view_fleet(){
        $user = Auth::user();
        $fleets = FleetAssignment::where('Airline_Name',$user->Name)->first();
        $route  = Schedule::where('Airline_Name',$user->Name)->first();
        $fleets = FleetAssignment::where('Airline_Name',$user->Name)->get()->all();
        return view('Company.view_fleet')
        ->with(compact('fleets'))
        ->with(compact('user'))
        ->with(compact('route'));
    }

    public function view_schedule(){
        $user   = Auth::user();
        $route  = Schedule::get()->all();
        return view('Company.view_schedule')
        ->with(compact('user'))
        ->with(compact('route'));
    }
}
