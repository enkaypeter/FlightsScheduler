@extends('CompanyLayout.app')

@section('content')
   <div class="row">
   <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>{{$user->Name}} Aircraft Registration</h4>
                </div>
  <div class="card-body">
<form method="POST" action="/company/register-aircraft">
      @csrf
      <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Aircraft Name') }}</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="BOEING 111" required autofocus>

              @if ($errors->has('name'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      <div class="form-group row">
          <label for="capacity" class="col-md-4 col-form-label text-md-right">{{ __('Airline Capacity') }}</label>

          <div class="col-md-6">
              <input id="capacity" type="number" class="form-control{{ $errors->has('capacity') ? ' is-invalid' : '' }}" name="capacity" value="{{ old('capacity') }}" required autofocus>

              @if ($errors->has('capacity'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('capacity') }}</strong>
                  </span>
              @endif
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