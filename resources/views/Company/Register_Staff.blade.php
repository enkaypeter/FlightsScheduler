@extends('CompanyLayout.app')

@section('content')
   <div class="row">
   <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>{{$user->Name}} Staff Registration</h4>
                </div>
  <div class="card-body">
<form method="POST" action="/company/register-staff">
      @csrf
      <div class="form-group row">
          <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Staff Name') }}</label>

          <div class="col-md-6">
              <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

              @if ($errors->has('name'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
          </div>
      </div>                        

      <div class="form-group row">
          <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

          <div class="col-md-6">
              <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

              @if ($errors->has('phone'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('phone') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group row">
          <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

          <div class="col-md-6">
              <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>

              @if ($errors->has('address'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('address') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group row">
          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

          <div class="col-md-6">
              <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
                  <span class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                  </span>
              @endif
          </div>
      </div>
      
      <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right">{{ __('Designation') }}</label>
        <div class="col-md-6">
          <select name="designation" class="form-control">
            <option value="Air Host">Air Host</option>
            <option value="Air Hostess">Air Hostess</option>
            <option value="Pilot">Pilot</option>
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