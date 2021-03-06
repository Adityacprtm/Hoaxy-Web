<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
	<meta charset="utf-8" />
	<title>@yield('title') | Adityacprtm</title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no" />
	<meta name="format-detection" content="address=no" />
	<meta name="author" content="Aditya Chamim Pratama" />
	<meta name="description" content="@yield('description')" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://adityacprtm.com/">
	<meta property="twitter:site" content="@adityacprtm">
	<meta property="twitter:title" content="@yield('title') | Adityacprtm">
	<meta property="twitter:description" content="@yield('description')">
	<meta property="twitter:image" content="{!! asset(Info::where('key','SOCIAL_IMAGE')->value('value')) !!}">

	<meta property="og:title" content="@yield('title') | Adityacprtm" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://adityacprtm.com" />
	<meta property="og:image" content="{!! asset(Info::where('key','SOCIAL_IMAGE')->value('value')) !!}" />
	<meta property="og:description" content="@yield('description')" />
	<meta property="og:site_name" content="adityacprtm.com" />

	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1e73be">
	<meta name="msapplication-TileColor" content="#1e73be">
	<meta name="theme-color" content="#ffffff">

	<link rel="canonical" href="{!! (Request::is('about')) ? 'https://adityacprtm.com' : url()->current() !!}" />

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/main/styles/style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/main/demo/style-demo.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets/main/styles/style-dark.css') }}" media="(prefers-color-scheme: dark)">

	@stack('css')

	<script data-ad-client="ca-pub-7614452738762603" async
		src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body class="bg-triangles">
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader__wrap">
			<div class="circle-pulse">
				<div class="circle-pulse__1"></div>
				<div class="circle-pulse__2"></div>
			</div>
			<div class="preloader__progress"><span></span></div>
		</div>
	</div>

	<main class="main">
		<!-- Header Image -->
		{{-- <div class="header-image">
			<div class="js-parallax" style="background-image: url(assets/main/images/image-header.jpg);"></div>
		</div> --}}

		<div class="container gutter-top">
			<!-- Header -->
			@include('main.includes.header')

			<div class="row sticky-parent">
				<!-- Sidebar nav -->
				@include('main.includes.sidebar')

				<!-- Content -->
				<div class="col-12 col-md-12 col-lg-10">
					@yield('content')

					<!-- Footer -->
					@include('main.includes.footer')
				</div>
			</div>
		</div>
	</main>

	<!-- SVG masks -->
	<svg class="svg-defs">
		<clipPath id="avatar-box">
			<path
				d="M1.85379 38.4859C2.9221 18.6653 18.6653 2.92275 38.4858 1.85453 56.0986.905299 77.2792 0 94 0c16.721 0 37.901.905299 55.514 1.85453 19.821 1.06822 35.564 16.81077 36.632 36.63137C187.095 56.0922 188 77.267 188 94c0 16.733-.905 37.908-1.854 55.514-1.068 19.821-16.811 35.563-36.632 36.631C131.901 187.095 110.721 188 94 188c-16.7208 0-37.9014-.905-55.5142-1.855-19.8205-1.068-35.5637-16.81-36.63201-36.631C.904831 131.908 0 110.733 0 94c0-16.733.904831-37.9078 1.85379-55.5141z" />
		</clipPath>
		<clipPath id="avatar-hexagon">
			<path
				d="M0 27.2891c0-4.6662 2.4889-8.976 6.52491-11.2986L31.308 1.72845c3.98-2.290382 8.8697-2.305446 12.8637-.03963l25.234 14.31558C73.4807 18.3162 76 22.6478 76 27.3426V56.684c0 4.6805-2.5041 9.0013-6.5597 11.3186L44.4317 82.2915c-3.9869 2.278-8.8765 2.278-12.8634 0L6.55974 68.0026C2.50414 65.6853 0 61.3645 0 56.684V27.2891z" />
		</clipPath>
	</svg>

	<div class="back-to-top"></div>

	<!-- Demo Menu -->
	<div class="btnSlideNav slideOpen"></div>
	<div class="btnSlideNav slideClose"></div>
	<div class="slideNav">
		<ul class="list-unstyled">
			@foreach (CategorySidebar::all() as $cs)

			<li class="slideNav__item rtl-mode mt-4">
				<span class="title title--5">{{ $cs->category_sidebar_name }}</span>
			</li>

			@foreach (Sidebar::all() as $s)
			@if ($s->category_sidebar_id == $cs->id)
			<li class="slideNav__item"><a href="{{ $s->link }}" target="_blank" rel="noopener">{{ $s->title }}</a></li>
			@endif
			@endforeach

			@endforeach
		</ul>
	</div>
	<div class="overlay-slideNav"></div>
	<!-- Demo Menu -->

	<!-- JavaScripts -->
	{{-- <script src="{{ asset('assets/main/js/jquery-3.4.1.min.js') }}"></script> --}}
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"
		integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="{{ asset('assets/main/js/plugins.min.js') }}"></script>
	<script src="{{ asset('assets/main/js/common.js') }}"></script>
	<script src="{{ asset('assets/main/demo/plugins-demo.js') }}"></script>
	<!-- <script type="text/javascript">if (self == top) { function netbro_cache_analytics(fn, callback) { setTimeout(function () { fn(); callback(); }, 0); } function sync(fn) { fn(); } function requestCfs() { var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://"); var idc_glo_r = Math.floor(Math.random() * 99999999999); var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JQuX3gzRncX%2fA8kBOnGtM382k9JS%2bpySjTh9UNzvKAfo7D7wP7FpOPKSqYlgUQy0RK0smYFRRdCsrOid3vl41NZfu%2b8N4yLfInPMMfqeUc%2bnrZcEIWVt1k7sAmI6XCjFbq003bKvfUFGvGrKNvrGRPPGIL2uwiJ%2bhOIOMLQZFpWzEnT3a8lr6NE9I%2fr8YKMsFQ8hxLbBEClxtEjkvJIbVD2Hwo85UxskRtDLEqCNmI5ikPwovpIsoBSIcKsf%2bQxv5HJoFtVilhNjD5W4NqVdBr%2fazFlHCpH%2biPpjw%2f5soztTeOuUIDff4SHrxisfWJ5UuG59rZJj2tQ5f%2fA%2fM%2f9HSJs5K5bxC%2f0f75aC4X4ZOZQK%2bMwrVEfXOnoESD%2fPkaQs3ZyWMKaTFxkSveh5olIdbByO2UBSvl0831ahTVXPIiX5UztkoqxjF1yYZ6tdit8rJoOe4TJnAeSeclWzgR9Ay8zR0H30VOdoRLlawgGkT2fp83o%2fZP0QcY%3d" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height; var bsa = document.createElement('script'); bsa.type = 'text/javascript'; bsa.async = true; bsa.src = url; (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa); } netbro_cache_analytics(requestCfs, function () { }); };</script> -->

	@stack('js')
</body>

</html>