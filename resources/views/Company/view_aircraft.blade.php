@extends('CompanyLayout.app')
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
                          <th>Aircraft ID</th>
                          <th>Airline Name</th>
                          <th>Capacity</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($allAircraft as $values)
                        <tr>
                          <th scope="row">{{$values->AircraftID}}</th>
                          <td>{{$values->Name}}</td>
                          <td>{{$values->AirlineName}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
@endsection