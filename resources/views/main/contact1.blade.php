@extends('main.layouts.default')
@section('title', 'Contact')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/main/api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css') }}">
@endpush

@section('content')
<div class="content">
	<div class="section mt-0">
		<h1 class="title title--h1 title__separate">Contact</h1>
	</div>
	<div class="map section" id="map"></div>
	<h2 class="title title--h2">Contact Form</h2>
	<form id="contact-form" class="contact-form" data-toggle="validator">
		<div class="row">
			<div class="form-group col-12 col-md-6">
				<i class="font-icon icon-user"></i>
				<input type="text" class="input input__icon form-control" id="name" name="name" placeholder="Full name" required="required" autocomplete="on" oninvalid="setCustomValidity('Fill in the field')" onkeyup="setCustomValidity('')">
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group col-12 col-md-6">
				<i class="font-icon icon-at"></i>
				<input type="email" class="input input__icon form-control" id="email" name="email" placeholder="Email address" required="required" autocomplete="on" oninvalid="setCustomValidity('Email is incorrect')" onkeyup="setCustomValidity('')">
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group col-12 col-md-12">
				<textarea class="textarea form-control" id="message" name="message" placeholder="Your Message" rows="6" required="required" oninvalid="setCustomValidity('Fill in the field')" onkeyup="setCustomValidity('')"></textarea>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group col-12 col-md-12">
				{!! NoCaptcha::renderJs() !!}
				{!! NoCaptcha::display() !!}
				<div class="help-block with-errors"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-left">
				<div id="validator-contact" class="hidden"></div>
			</div>
			<div class="col-12 col-md-6 order-1 order-md-2 text-right">
				<button type="submit" class="btn"><i class="font-icon icon-send"></i> Send Message</button>
			</div>
		</div>
	</form>
</div>
@endsection

@push('js')
<script src="{{ asset('assets/main/api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js') }}"></script>
<script src="{{ asset('assets/main/js/mapbox.init.js') }}"></script>
@endpush