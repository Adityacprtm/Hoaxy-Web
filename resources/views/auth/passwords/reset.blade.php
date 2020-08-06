@extends('auth.layouts.app')
@section('title', 'Password Reset')

@section('content')
<img src="{{ asset('assets/manage/assets/img/logo.png') }}" width="100" height="100" alt="">
<h1 class="">Reset Password</h1>
<p class="signup-link recovery">Enter your email and new password!</p>
<form class="needs-validation text-left" method="POST" action="{{ route('password.update') }}" novalidate>
	@csrf
	<input type="hidden" name="token" value="{{ $token }}">
	<div class="form">
		<div id="email-field" class="field-wrapper input">
			<div class="d-flex justify-content-between">
				<label for="email">EMAIL</label>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
				<circle cx="12" cy="12" r="4"></circle>
				<path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
			</svg>
			<input id="email" name="email" type="email" class="form-control" value="{{ $email ?? old('email') }}" placeholder="Email" required autofocus>
			<div class="invalid-feedback">
				Please fill the email correctly
			</div>
		</div>
		<div id="password-field" class="field-wrapper input">
			<div class="d-flex justify-content-between">
				<label for="password">PASSWORD</label>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
				<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
				<path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
			</svg>
			<input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
				<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
				<circle cx="12" cy="12" r="3"></circle>
			</svg>
			<div class="invalid-feedback">
				Please fill the password
			</div>
		</div>
		<div id="password-field-confirm" class="field-wrapper input">
			<div class="d-flex justify-content-between">
				<label for="password-confirm">CONFIRM PASSWORD</label>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
				<rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
				<path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
			</svg>
			<input id="password-confirm" name="password_confirmation" type="password" class="form-control" placeholder="Password Confirmation" required>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
				<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
				<circle cx="12" cy="12" r="3"></circle>
			</svg>
			<div class="invalid-feedback">
				Please fill the password
			</div>
		</div>

		<div class="d-sm-flex justify-content-between mt-3">
			<div class="field-wrapper">
				<button type="submit" class="btn btn-primary" value="">Reset Password</button>
			</div>
		</div>

	</div>
</form>
@endsection