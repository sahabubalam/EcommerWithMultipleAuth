@extends('layouts.app')

@section('content')

<div class="container">

<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
    <div class="card-header">{{ __('Register') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
        @csrf
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="firstName" class="form-control" placeholder="First name" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                  
                  @error('first_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                 
                </div>
              </div>
              <div class="col-md-6">
              <div class="form-label-group">
                  <input type="text" id="lastName" class="form-control" placeholder="Last name" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                  
                  @error('last_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                 
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
         
            <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
              @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             
            </div>
          
          </div>
          <div class="form-group">
        
            <div class="form-label-group">
              <input type="text" id="presentaddress" class="form-control" placeholder="Present address" class="form-control @error('present_address') is-invalid @enderror" name="present_address" value="{{ old('present_address') }}" required autocomplete="present_address" autofocus>
              @error('present_address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            
            </div>
          
          </div>
        <div class="form-group">
        
        <div class="form-label-group">
          <input type="text" id="phonenumber" class="form-control" placeholder="Phone Number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
          @error('phone_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        
        </div>
      
      </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                 
                </div>
              </div>
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
        <div class="text-center">
          <a class="d-block small mt-3" href="{{route('login')}}">Login Page</a>
         
        </div>
        </div>
            </div>
        </div>
    </div>
</div>





@endsection
