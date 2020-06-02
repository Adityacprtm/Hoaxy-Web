@extends('manage.layouts.auth')
@section('title', 'Login')
@section('content')
<img src="{{ asset('assets/manage/assets/img/logo.png') }}" width="100" height="100" alt="">
<h1 class="">Sign In</h1>
{{-- <p class="">Log in to your account to <a href="https://adityacprtm.com"><span class="brand-name">Adityacprtm Core</span></a>.</p> --}}
<p class="signup-link register">Not registered ? <a href="{{ route('register') }}">Create an account</a></p>

<form class="needs-validation text-left" method="post" action="{{ route('dologin') }}" novalidate>
    {{ csrf_field() }}

    @if ($message = Session::get('status'))
    <div class="alert alert-arrow-right alert-icon-right alert-light-danger mb-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> ... </svg></button>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
            <circle cx="12" cy="12" r="10"></circle>
            <line x1="12" y1="8" x2="12" y2="12"></line>
            <line x1="12" y1="16" x2="12" y2="16"></line>
        </svg>
        {{ $message }}
    </div>
    @endif

    <div class="form">

        <div id="email-field" class="field-wrapper input">
            <label for="email">EMAIL</label>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <input id="email" name="email" type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
            <div class="invalid-feedback">
                Please fill the email correctly
            </div>
        </div>

        <div id="password-field" class="field-wrapper input mb-3">
            <div class="d-flex justify-content-between">
                <label for="password">PASSWORD</label>
                {{-- <a href="auth_pass_recovery_boxed.html" class="forgot-pass-link">Forgot Password?</a> --}}
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock">
                <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
            <input id="password" name="password" type="password" class="form-control" placeholder="Password" required>
            <div class="invalid-feedback">
                Please fill the password
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="toggle-password" class="feather feather-eye">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
            </svg>
        </div>
        <div class="d-sm-flex justify-content-between">
            <div class="field-wrapper">
                <button type="submit" class="btn btn-primary" value="">Log In</button>
                <a href="{{ route('about') }}" class="btn btn-dark btn-block btn-lg mt-2" value="">Cancel</a>
            </div>
        </div>

        {{-- <div class="division">
            <span>OR</span>
        </div>

        <div class="social">
            <a href="javascript:void(0);" class="btn social-fb">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook">
                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                </svg>
                <span class="brand-name">Facebook</span>
            </a>
            <a href="javascript:void(0);" class="btn social-github">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github">
                    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                </svg>
                <span class="brand-name">Github</span>
            </a>
        </div> --}}

        {{-- <p class="signup-link">Not registered ? <a href="{{ route('register') }}">Create an account</a></p> --}}
        <p class="signup-link copyright">Configured with <i style="font-size: 19px; color: #FF5959">&hearts;</i> at 2020 <br> by <a target="_blank" href="https://adityacprtm.com"><strong>Adityacprtm.com</strong></a></p>

    </div>
</form>
@endsection