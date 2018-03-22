@extends('Staff.app')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">View your assigned fleet details</h4>
                                    <p class="category">Here is basic information</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Staff ID</th>
                                            <th>Schedule ID</th>
                                            <th>Airline_Name</th>
                                            <th>Origin(Location)</th>
                                            <th>Origin(Date)</th>
                                            <th>Destination(Location)</th>
                                            <th>Destination(Date)</th>
                                            <th>Name</th>
                                            <th>Designation</th>
                                        </thead>
                                        <tbody>
                                             @foreach($authStaff as $value)
                                                <tr>
                                                    <td>{{$value->EmpID}}</td>
                                                    <td>{{$staffSchedule->id}}</td>
                                                    <td>{{$value->Airline}}</td>
                                                    <td>{{$staffSchedule->Origin}}</td>
                                                    <td>{{$staffSchedule->OriginDate}}</td>
                                                    <td>{{$staffSchedule->Destination}}</td>
                                                    <td>{{$staffSchedule->DestinationDate}}</td>
                                                    <td>{{$value->Name}}</td>
                                                    <td>{{$value->Designation}}</td>
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