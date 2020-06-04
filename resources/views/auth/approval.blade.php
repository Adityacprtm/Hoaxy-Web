@extends('auth.layouts.app')
@section('title', 'Waiting for Approval')
@section('content')
<img src="{{ asset('assets/manage/assets/img/logo.png') }}" width="100" height="100" alt="">
<h1 class="">{{ __('Waiting for Approval') }}</h1>

<p class="signup-link">{{ __('Your account is waiting for our administrator approval.') }}</p>
<p class="signup-link mt-0">{{ __('Please check back later.') }}</p>
<p class="signup-link mt-0">{{ __('While waiting for approval, you can view my personal website by pressing the button below') }}</p>
<a href="{{ route('about') }}" class="btn btn-primary btn-block mb-4 mr-2">Adityacprtm.com</a>

<p class="signup-link copyright">Configured with <i style="font-size: 19px; color: #FF5959">&hearts;</i> at 2020 <br> by <a target="_blank" href="https://adityacprtm.com"><strong>Adityacprtm.com</strong></a></p>
@endsection