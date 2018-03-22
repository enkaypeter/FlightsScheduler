<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin/register-airlines', function () {
    return view('Admin.Register_Airlines');
});
Route::get('/company/login', function () {
    return view('Company.Login_Staff');
});


Route::get('/admin/login', 'AdminController@getOkta');
Route::get('/admin', 'AdminController@home');
Route::get('/admin/view-airlines', 'AdminController@view_airlines');
Route::get('/company', 'CompanyController@home');
Route::get('/company/register-staff', 'RegistrationController@CompanyStaffView');
Route::get('/company/register-aircraft', 'RegistrationController@CompanyAircraftView');
Route::get('/company/schedule', 'ScheduleController@view');
Route::get('/company/view-aircraft', 'ViewController@view_aircraft');
Route::get('/company/view-staff', 'ViewController@view_staff');
Route::get('/company/fleet-assign', 'ScheduleController@view_fleet_reg');//Fleets Assignment form
Route::get('/company/view-fleet', 'ScheduleController@view_fleet');//View Fleets Assigned
Route::get('/company/view-schedule', 'ScheduleController@view_schedule');//View created schedules

Route::get('/staff','StaffController@display');
Route::get('/staff/login','StaffController@view_login');
// Route::get('/staff/staff-info','StaffController@view_info');


Route::post('/staff/login','StaffController@authenticate');
Route::post('/admin/register-airlines', 'RegistrationController@Adminstore');
Route::post('/company/register-aircraft', 'RegistrationController@CompanyAircraftStore');
Route::post('/company/login', 'LoginController@AirlineLogin');
Route::post('/company/register', 'RegistrationController@CompanyStore');
Route::post('/company/register-staff', 'RegistrationController@CompanyStaffStore');
Route::post('/company', 'CompanyController@check');
Route::post('/api/city-data', 'ScheduleController@cities');
Route::post('/company/schedule', 'ScheduleController@store');
Route::post('/company/fleet-assign', 'ScheduleController@store_fleet');


