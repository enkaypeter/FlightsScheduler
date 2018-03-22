@extends('CompanyLayout.app')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">View Assigned Flights for this Airline</h4>
                                    <p class="category">Here is basic information about {{$user->Name}} Fleets</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Schedule ID</th>
                                            <th>Airline_Name</th>
                                            <th>Origin(Location)</th>
                                            <th>Origin(Date)</th>
                                            <th>Designation(Location)</th>
                                            <th>Designation(Date)</th>
                                        </thead>
                                        <tbody>
                                             @foreach($route as $value)
                                                <tr>
                                                    <td>{{$value->id}}</td>
                                                    <td>{{$value->Airline_Name}}</td>
                                                    <td>{{$value->Origin}}</td>
                                                    <td>{{$value->OriginDate}}</td>
                                                    <td>{{$value->Destination}}</td>
                                                    <td>{{$value->DestinationDate}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection