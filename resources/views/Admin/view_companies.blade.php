@extends('layouts.adminApp')
@section('content')
	<section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">View registered airlines</h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>registered airlines</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Airline ID</th>
                          <th>Airline Name</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($airlines as $airline)
                        <tr>
                          <th scope="row">{{$airline->id}}</th>
                          <td>{{$airline->id}}</td>
                          <td>{{$airline->Name}}</td>
                          <td>{{$airline->Phone}}</td>
                          <td>{{$airline->Email}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection