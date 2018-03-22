@extends('CompanyLayout.app')
@section('content')
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                       
                        <div class="col-md-12">
                            <div class="card card-plain">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">View registered Staff</h4>
                                    <p class="category">Here is basic information about registered Staff</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Employee ID</th>
                                            <th>Name</th>
                                            <th>Airline</th>
                                            <th>Address</th>
                                            <th>Designation</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                        </thead>
                                        <tbody>
                                             @foreach($allStaff as $value)
                                                <tr>
                                                    <td>{{$value->EmpID}}</td>
                                                    <td>{{$value->Name}}</td>
                                                    <td>{{$value->Airline}}</td>
                                                    <td>{{$value->Address}}</td>
                                                    <td>{{$value->Designation}}</td>
                                                    <td>{{$value->Phone}}</td>
                                                    <td>{{$value->Email}}</td>
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