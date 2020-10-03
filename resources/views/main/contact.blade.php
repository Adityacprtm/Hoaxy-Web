@extends('main.layouts.default')
@section('title', 'Contact')
@section('description', 'Adityacprtm.com is a personal website on behalf of Aditya Chamim Pratama which contains
portfolio, blog and owner information. Can contact me on this page.')

@push('css')
<link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
@endpush

@section('content')
<div class="box box-content">
	<div class="pb-2">
		<h1 class="title title--h1 first-title title__separate">Contact</h1>
		<p>Open for opportunities: <b>Yes</b></p>
	</div>

	<!-- Contact -->
	<div class="map" id="map"></div>
	<h2 class="title title--h3">Contact Form</h2>

	<form id="contact-form" class="contact-form" data-toggle="validator">
		<div class="row">
			<div class="form-group col-12 col-md-6">
				<input type="text" class="form-control" id="name" name="name" placeholder="Full name" required="required"
					autocomplete="on" oninvalid="setCustomValidity('Fill in the field')" onkeyup="setCustomValidity('')">
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group col-12 col-md-6">
				<input type="email" class="form-control" id="email" name="email" placeholder="Email address"
					required="required" autocomplete="on" oninvalid="setCustomValidity('Email is incorrect')"
					onkeyup="setCustomValidity('')">
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group col-12 col-md-12">
				<textarea class="textarea form-control" id="message" name="message" placeholder="Your Message" rows="4"
					required="required" oninvalid="setCustomValidity('Fill in the field')"
					onkeyup="setCustomValidity('')"></textarea>
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
<!-- Mapbox init -->
<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
<script src="{{ asset('assets/main/js/mapbox.init.js') }}"></script>
@endpush