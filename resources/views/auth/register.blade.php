@extends('auth.layouts.app')
@section('title', 'Register')

@section('content')
<img src="{{ asset('assets/manage/assets/img/logo.png') }}" width="100" height="100" alt="">
<h1 class="">Register</h1>
<p class="signup-link register mb-0">Already have an account? <a href="{{ route('login') }}">Log in</a></p>

<form class="needs-validation text-left" method="POST" action="{{ route('register') }}" novalidate>
	@csrf

	@if ($errors->any())
	<div class="alert alert-arrow-right alert-icon-right alert-light-danger mb-4" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
			<circle cx="12" cy="12" r="10"></circle>
			<line x1="12" y1="8" x2="12" y2="12"></line>
			<line x1="12" y1="16" x2="12" y2="16"></line>
		</svg>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</div>
	@endif

	<div class="form">

		<div id="name-field" class="field-wrapper input">
			<label for="name">NAME</label>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
				<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
				<circle cx="12" cy="7" r="4"></circle>
			</svg>
			<input id="name" name="name" type="text" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
			<div class="invalid-feedback">
				Please fill the name
			</div>
		</div>

		<div id="email-field" class="field-wrapper input">
			<label for="email">EMAIL</label>
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign register">
				<circle cx="12" cy="12" r="4"></circle>
				<path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
			</svg>
			<input id="email" name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
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

		<div id="password-field-confirm" class="field-wrapper input mb-3">
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

		<div class="d-sm-flex justify-content-between">
			<div class="field-wrapper">
				<button type="submit" class="btn btn-primary" value="">Get Started!</button>
				<a href="{{ route('about') }}" class="btn btn-dark btn-block btn-lg mt-2" value="">Cancel</a>
			</div>
		</div>

	</div>

	<p class="signup-link">Configured with <i style="font-size: 19px; color: #FF5959">&hearts;</i> at 2020 <br> by <a target="_blank" href="https://adityacprtm.com"><strong>Adityacprtm.com</strong></a></p>
</form>
@endsection