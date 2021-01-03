@extends('layouts.app')

@section('content')

<div class="limiter">
	<div class="container-login100" style="background-image: url('images/library.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			<form action="{{ route('login') }}" method="post" class="login100-form validate-form">
				@csrf
				<span class="login100-form-title p-b-49">
					Login Ruang Baca
				</span>

				<div class="wrap-input100 validate-input m-b-23" data-validate="Email is required">
					<span class="label-input100">Email</span>
					<input class="input100" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
					<span class="focus-input100" data-symbol="&#xf206;"></span>

					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">Password</span>
					<input class="input100" type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
					<span class="focus-input100" data-symbol="&#xf190;"></span>

					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<!-- <div class="text-right p-t-8 p-b-31">
					@if (Route::has('password.request'))
					<a href="{{ route('password.request') }}">
						{{ __('Forgot Password?') }}
					</a>
					@endif
				</div> -->

				<br>
				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button type="submit" class="login100-form-btn">
							{{ __('Login') }}
						</button>
					</div>
				</div>


				<div class="txt1 text-center p-t-54 p-b-20">
					<span>
						Or
					</span>

					@if (Route::has('register'))
					<a href="{{ url('register') }}" class="txt1">Sign Up</a>
					@endif
				</div>
			</form>



		</div>
	</div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>

</html>