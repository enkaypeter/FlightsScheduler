@extends('CompanyLayout.app')

@section('content')

<div class="row">
   <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>{{$user->Name}} Fleet Assignment</h4>
                </div>
  <div class="card-body">
    
    <div class="col-md-6 offset-md-4">
          <div id="map"></div>

    </div>

<form method="POST" action="/company/fleet-assign">
      @csrf
      @if(isset($error))
      <span style="color: red;"></span>
      @endif
      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Staff One') }}</label>
        <div class="col-md-6">
          <select name="staff_1"  id="staff_1" class="form-control" required>
            @foreach($staff as $staff_a)
              <option></option>
              <option  value="{{$staff_a->Name}}({{$staff_a->Designation}})">{{$staff_a->Name}} ({{$staff_a->Designation}})</option>
            @endforeach
          </select>
        </div>
        
      </div>
      
      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Staff Two') }}</label>
        <div class="col-md-6">
          <select name="staff_2"  id="staff_2" class="form-control" required>
            @foreach($staff as $staff_b)
              <option></option>
              <option  value="{{$staff_b->Name}}({{$staff_b->Designation}})">{{$staff_b->Name}}  ({{$staff_b->Designation}})</option>
            @endforeach
          </select>
        </div>
        
      </div>

      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Staff Three') }}</label>
        <div class="col-md-6">
          <select name="staff_3"  id="staff_3" class="form-control" required>
            @foreach($staff as $staff_c)
              <option></option>
              <option  value="{{$staff_c->Name}}({{$staff_c->Designation}})">{{$staff_c->Name}} ({{$staff_c->Designation}})</option>
            @endforeach
          </select>
        </div>
        
      </div>


      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Origin') }}</label>
        <div class="col-md-6">
          <select name="origin" id="origin" class="form-control" required>
            @foreach($fleet_details as $origin)
            <option  value="{{$origin->Origin}}">{{$origin->Origin}}</option>
            @endforeach
          </select>
        </div>
        
      </div>

      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Destination') }}</label>
        <div class="col-md-6">
          <select name="destination" id="destination" class="form-control" required>
        @foreach($fleet_details as $destination)
            <option  value="{{$destination->Destination}}">{{$origin->Destination}}</option>
            @endforeach
          </select>
        </div>
        
      </div> 

      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Aircraft') }}</label>
        <div class="col-md-6">
          <select name="aircraft" id="aircraft" class="form-control" required>
            @foreach($aircrafts as $aircraft)
            <option  value="{{$aircraft->Name}}">{{$aircraft->Name}}</option>
            @endforeach
          </select>
        </div>
        
      </div>


      <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
              </button>
          </div>
      </div>
</form>
    </div>
  </div>
</div>

@endsection