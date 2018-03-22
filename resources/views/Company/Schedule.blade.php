@extends('CompanyLayout.app')

@section('content')

<div class="row">
   <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>{{$user->Name}} Staff Registration</h4>
                </div>
  <div class="card-body">
    
    <div class="col-md-6 offset-md-4">
          <div id="map"></div>

    </div>

<form method="POST" action="/company/schedule">
      @csrf
      @if(isset($error))
      <span style="color: red;"></span>
      @endif
      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Origin') }}</label>
        <div class="col-md-6">
          <select name="origin"  id="origin" onchange="getOrigin()" class="form-control">
            @foreach($cityData as $airports)
            <option  value="{{$airports->Airport}}">{{$airports->City}} ({{$airports->Airport}})</option>
            @endforeach
          </select>
        </div>
        
      </div>

      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Origin Date') }}</label>
        <div class="col-md-6">
        <input name="originDate" class="form-control calendar" data-enable-time="true" data-time_24hr="true">
        </div>
      </div>

      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Destination') }}</label>
        <div class="col-md-6">
          <select name="destination" id="destination" onchange="getDestination()" class="form-control">
            @foreach($cityData as $airports)
            <option  value="{{$airports->Airport}}">{{$airports->City}} ({{$airports->Airport}})</option>
            @endforeach
          </select>
        </div>
        
      </div>

      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Destination Date') }}</label>
        <div class="col-md-6">
        <input name="destinationDate" class="form-control calendar" data-enable-time="true" data-time_24hr="true">
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