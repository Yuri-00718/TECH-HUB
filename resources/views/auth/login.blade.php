@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="css/Login-form.css">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-10">
      <div class="glassmorphism-card">
        <div class="card-header-H1">
          <h5> Login </h5>
        </div>

        <div class="card-body">
          <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>

            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>

            <div class="row mb-3">
            <div class="col-md-6 offset-md-3">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember" style="font-family: 'Poppins', sans-serif; color: #8C52FF;">
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div>
          </div>
            <div class="row mb-0">
              <div class="col-md-8 offset-md-2 text-center">
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
                @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
