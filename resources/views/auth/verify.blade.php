@extends('auth.layouts.app')
@section('title', 'Verify Email Address')

@section('content')
<img src="{{ asset('assets/manage/assets/img/logo.png') }}" width="100" height="100" alt="">
<h1 class="">{{ __('Verify Your Email Address') }}</h1>

<p class="signup-link">{{ __('Before proceeding, please check your email for a verification link.') }}</p>
<p class="signup-link mt-0">{{ __('If you did not receive the email, please click the button below') }}</p>

<form class="text-left" method="POST" action="{{ route('verification.resend') }}">
	@csrf

	@if (session('resent'))
	<div class="alert alert-arrow-left alert-icon-left alert-light-success mb-4" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" data-dismiss="alert" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close">
				<line x1="18" y1="6" x2="6" y2="18"></line>
				<line x1="6" y1="6" x2="18" y2="18"></line>
			</svg></button>
		<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
			<path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
			<path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
		</svg>
		<strong>Success!</strong> {{ __('A fresh verification link has been sent to your email address.') }}
	</div>
	@endif

	<div class="form">
		<div class="d-sm-flex justify-content-between">
			<div class="field-wrapper">
				<button type="submit" class="btn btn-primary" value="">{{ __('click here to request another') }}</button>
			</div>
		</div>
	</div>

	<p class="signup-link copyright">Configured with <i style="font-size: 19px; color: #FF5959">&hearts;</i> at 2020 <br> by <a target="_blank" href="https://adityacprtm.com"><strong>Adityacprtm.com</strong></a></p>

</form>
@endsection