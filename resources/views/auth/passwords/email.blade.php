@extends('auth.layouts.app')
@section('title', 'Password Recovery')
@section('content')
<img src="{{ asset('assets/manage/assets/img/logo.png') }}" width="100" height="100" alt="">
<h1 class="">Password Recovery</h1>
<p class="signup-link recovery">Enter your email and instructions will sent to you!</p>
<form class="needs-validation text-left" method="POST" action="{{ route('password.email') }}" novalidate>
    @csrf

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    <div class="form">
        <div id="email-field" class="field-wrapper input">
            <div class="d-flex justify-content-between">
                <label for="email">EMAIL</label>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                <circle cx="12" cy="12" r="4"></circle>
                <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
            </svg>
            <input id="email" name="email" type="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required>
            <div class="invalid-feedback">
                Please fill the email correctly
            </div>
        </div>

        <div class="d-sm-flex justify-content-between mt-3">
            <div class="field-wrapper">
                <button type="submit" class="btn btn-primary" value="">{{ __('Send Password Reset Link') }}</button>
            </div>
        </div>

        <p class="signup-link copyright">Configured with <i style="font-size: 19px; color: #FF5959">&hearts;</i> at 2020 <br> by <a target="_blank" href="https://adityacprtm.com"><strong>Adityacprtm.com</strong></a></p>

    </div>
</form>
@endsection