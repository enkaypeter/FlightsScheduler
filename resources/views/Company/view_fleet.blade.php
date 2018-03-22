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
                                            <th>Fleet ID</th>
                                            <th>Aircraft</th>
                                            <th>Origin(Location)</th>
                                            <th>Origin(Date)</th>
                                            <th>Designation(Location)</th>
                                            <th>Designation(Date)</th>
                                            <th>Staff(Designation)</th>
                                            <th>Staff(Designation)</th>
                                            <th>Staff(Desgination)</th>
                                        </thead>
                                        <tbody>
                                             @foreach($fleets as $value)
                                                <tr>
                                                    <td>{{$value->fleet_id}}</td>
                                                    <td>{{$value->Aircraft_Name}}</td>
                                                    <td>{{$route->Origin}}</td>
                                                    <td>{{$route->OriginDate}}</td>
                                                    <td>{{$route->Destination}}</td>
                                                    <td>{{$route->DestinationDate}}</td>
                                                    <td>{{$value->Staff_1}}{{($value->)}}</td>
                                                    <td>{{$value->Staff_2}}</td>
                                                    <td>{{$value->Staff_3}}</td>
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