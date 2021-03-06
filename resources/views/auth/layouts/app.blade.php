<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<title>Adityacprtm - @yield('title')</title>

	{{-- <link rel="icon" type="image/x-icon" href="{{ asset('assets/manage/assets/img/favicon.ico') }}" /> --}}
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1e73be">
	<meta name="msapplication-TileColor" content="#1e73be">
	<meta name="theme-color" content="#ffffff">

	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('assets/manage/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/manage/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/manage/assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/elements/alert.css') }}">
	<style>
		.btn-light {
			border-color: transparent;
		}
	</style>
	@stack('css')
</head>

<body class="form">

	<div class="form-container outer">
		<div class="form-form">
			<div class="form-form-wrap">
				<div class="form-container">
					<div class="form-content">

						@yield('content')

					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="{{ asset('assets/manage/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('assets/manage/bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/manage/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/manage/assets/js/forms/bootstrap_validation/bs_validation_script.js') }}"></script>
	<script src="{{ asset('assets/manage/assets/js/authentication/form-2.js') }}"></script>
	@stack('js')
</body>

</html>