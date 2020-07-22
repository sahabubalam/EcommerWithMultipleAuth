@extends('layouts.app')

@section('content')





<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
        @csrf
          <div class="form-group">
            <div class="form-label-group">
              <input type="email" id="inputEmail" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
              @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
              @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
          </div>
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="remember-me">
                Remember Password
              </label>
            </div>
          </div>
         
          <button type="submit" value="submit"  class="btn btn-primary btn-block">
                                        login
                                    </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="{{ route('register') }}">Register an Account</a>
          @if (Route::has('password.request'))
          <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
          @endif
          </div>
            </div>
        </div>
    </div>
</div>




@endsection
