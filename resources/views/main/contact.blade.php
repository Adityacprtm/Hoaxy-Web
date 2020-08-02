@extends('main.layouts.default')
@section('title', 'Contact')

@push('css')
{{-- Mapbox--}}
{{-- <script src='{{ asset('assets/main/api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js') }}'></script>
<link href='{{ asset('assets/main/api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css') }}' rel='stylesheet' /> --}}
<script src='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.8.1/mapbox-gl.css' rel='stylesheet' />
@endpush

@section('content')

{{-- Content --}}
<div class="content">
	<div class="section mt-0">
		<h1 class="title title--h1 title__separate">Contact</h1>
	</div>

	{{-- Contact --}}
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
				<textarea class="textarea form-control" id="message" name="message" placeholder="Your Message" rows="9" required="required" oninvalid="setCustomValidity('Fill in the field')" onkeyup="setCustomValidity('')"></textarea>
				<div class="help-block with-errors"></div>
			</div>
			<div class="form-group col-12 col-md-12">
				<div class="float-center">
					{!! NoCaptcha::renderJs() !!}
					{!! NoCaptcha::display() !!}
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-left">
				<div id="validator-contact" class="hidden"></div>
			</div>
			<div class="col-12 col-md-6 order-1 order-md-2 text-right">
				<button id="saveBtn" class="btn"><i class="font-icon icon-send"></i> Send Message</button>
			</div>
		</div>
	</form>
</div>{{-- Content End --}}
@endsection

@push('js')
{{-- Mapbox init --}}
<script src="{{ asset('assets/main/js/mapbox.init.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});

	$('#saveBtn').click(function (e) {
        e.preventDefault();

        var formdata = new FormData();

		if (!grecaptcha.getResponse()) {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Are u robot? fill Recaptcha!',
			})
		}else if (($("#name").val().length===0) || ($("#email").val().length===0) || ($("#message").val().length===0)){
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Please fill in all fields!',
			})
		} else {
			formdata.append('name', $("#name").val());
			formdata.append('email', $("#email").val());
			formdata.append('message', $("#message").val());
			formdata.append('g-recaptcha-response', grecaptcha.getResponse());

			$.ajax({
				url: "{{ route('contact.store') }}",
				type: "POST",
				data: formdata,
				processData: false,
				contentType: false,
				beforeSend: function() {
					Swal.showLoading();
				},
				success: function (data) {
					Swal.fire({
						title: 'Success!',
						text: 'Message received!',
						icon: 'success',
						timer: 3000
					}).then(function() {
						$('#contact-form').trigger("reset");
						grecaptcha.reset();
					})
				},
				error: function (xhr) {
					Swal.fire({
						title: 'Oops!',
						text: xhr.statusText + xhr.responseText,
						icon: 'error',
						padding: '2em',
						timer: 3000
					}).then(function() {
						window.location.reload()
					})
				}
			});
		}
	});
</script>
@endpush