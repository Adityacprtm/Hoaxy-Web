<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>@yield('title') - Adityacprtm Manage</title>

	<link rel="icon" type="image/x-icon" href="{{ asset('assets/manage/assets/img/favicon.ico') }}" />
	<link href="{{ asset('assets/manage/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('assets/manage/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ asset('assets/manage/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	@stack('css')
</head>

<body>

	<!-- BEGIN LOADER -->
	<div id="load_screen">
		<div class="loader">
			<div class="loader-content">
				<div class="spinner-grow align-self-center"></div>
			</div>
		</div>
	</div>
	<!--  END LOADER -->

	<!--  BEGIN NAVBAR  -->
	<div class="header-container fixed-top">
		<header class="header navbar navbar-expand-sm">
			<ul class="navbar-item flex-row">
				<li class="nav-item align-self-center page-heading">
					<div class="page-header">
						<div class="page-title">
							<h3>@yield('title')</h3>
						</div>
					</div>
				</li>
			</ul>

			<a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
					<line x1="8" y1="6" x2="21" y2="6"></line>
					<line x1="8" y1="12" x2="21" y2="12"></line>
					<line x1="8" y1="18" x2="21" y2="18"></line>
					<line x1="3" y1="6" x2="3" y2="6"></line>
					<line x1="3" y1="12" x2="3" y2="12"></line>
					<line x1="3" y1="18" x2="3" y2="18"></line>
				</svg>
			</a>

			<ul class="navbar-item flex-row search-ul">
				{{-- Search here --}}
			</ul>

			<ul class="navbar-item flex-row navbar-dropdown">

				{{-- Notification here --}}

				<li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
					<a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
							<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
							<circle cx="12" cy="7" r="4"></circle>
						</svg>
					</a>
					<div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="userProfileDropdown">
						<div class="user-profile-section">
							<div class="media mx-auto">
								<img src="{{ asset(Auth::user()->avatar) }}" class="img-fluid mr-2" alt="avatar">
								<div class="media-body">
									<h5>{{ Auth::user()->name }}</h5>
									<p>{{ (Auth::user()->admin) ? 'Admin' : 'User' }}</p>
								</div>
							</div>
						</div>
						<div class="dropdown-item">
							<a href="{{ route('manage.user.profile') }}">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
									<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
									<circle cx="12" cy="7" r="4"></circle>
								</svg> <span>My Profile</span>
							</a>
						</div>
						<div class="dropdown-item">
							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
									<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
									<polyline points="16 17 21 12 16 7"></polyline>
									<line x1="21" y1="12" x2="9" y2="12"></line>
								</svg><span>{{ __('Logout') }}</span>
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</div>
				</li>
			</ul>
		</header>
	</div>
	<!--  END NAVBAR  -->

	<!--  BEGIN MAIN CONTAINER  -->
	<div class="main-container" id="container">

		<div class="overlay"></div>
		{{-- <div class="search-overlay"></div> --}}

		@include('manage.includes.sidebar')

		@yield('content')

	</div>
	<!-- END MAIN CONTAINER -->

	<script src="{{ asset('assets/manage/assets/js/loader.js') }}"></script>
	<script src="{{ asset('assets/manage/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
	<script src="{{ asset('assets/manage/bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('assets/manage/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('assets/manage/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
	<script src="{{ asset('assets/manage/assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/manage/assets/js/custom.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
	<script>
		$(document).ready(function() {
            App.init();
        });
	</script>
	@stack('js')
</body>

</html>