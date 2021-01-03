@extends('layouts.app')

@section('content')
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="{{url('/')}}" class="h1" style="text-decoration: none;"><b>SI Ruang Baca</b></a>
    </div>

    <div class="card-body">
      <p class="login-box-msg">Login dulu ya..</p>

      <form action="{{ route('login') }}" method="post">
        @csrf

        <div class="input-group mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>


        <div class="input-group mb-3">
          <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <!-- <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                  {{ __('Remember Me') }}
                </label>
              </div>
            </div> -->
        <!-- /.col -->

        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>

        <!-- /.col -->
    </div>


    <div class="row justify-content-center pb-4">
      <div class="col-5">
        @if (Route::has('password.request'))
        <a class="btn btn-dark" href="{{ route('password.request') }}">
          {{ __('Lupa Password?') }}
        </a>
        @endif
      </div>
      <div class="col-5">
        @if (Route::has('register'))
        <a href="{{url('/register')}}" class="btn btn-success">Register Akun!</a>
        @endif
      </div>
    </div>

    </form>



  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->
</div>
<!-- /.login-box -->
@endsection