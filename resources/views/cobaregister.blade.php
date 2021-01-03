@extends('layouts.app')

@section('content')

<div class="limiter">
	<div class="container-login100" style="background-image: url('images/library.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
			<form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
				@csrf
				<span class="login100-form-title p-b-49">
					{{ __('Register') }}
				</span>


				<div class="wrap-input100 validate-input m-b-23" data-validate="Nama is required">
					<span class="label-input100">{{ __('Name') }}</span>
					<input class="input100" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Nama Anda" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
					<span class="focus-input100" data-symbol="&#xf206;"></span>

					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="wrap-input100 validate-input m-b-23" data-validate="Email is required">
					<span class="label-input100">{{ __('E-Mail Address') }}</span>
					<input class="input100" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
					<span class="focus-input100" data-symbol="&#xf206;"></span>

					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">{{ __('Password') }}</span>
					<input class="input100" type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
					<span class="focus-input100" data-symbol="&#xf190;"></span>

					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="wrap-input100 validate-input" data-validate="Password is required">
					<span class="label-input100">{{ __('Confirm Password') }}</span>
					<input class="input100" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
					<span class="focus-input100" data-symbol="&#xf190;"></span>
				</div>

				<br></br>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button type="submit" class="login100-form-btn">
							{{ __('Register') }}
						</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>
@endsection