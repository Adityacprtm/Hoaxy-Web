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
	<meta name="description" content="Adityacprtm.com is a personal website on behalf of Aditya Chamim Pratama which contains portfolio, blog and owner information." />
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta property="twitter:card" content="summary_large_image">
	<meta property="twitter:url" content="https://adityacprtm.com/">
	<meta property="twitter:site" content="@adityacprtm">
	<meta property="twitter:title" content="Adityacprtm.">
	<meta property="twitter:description" content="Adityacprtm.com is a personal website on behalf of Aditya Chamim Pratama which contains portfolio, blog and owner information.">
	<meta property="twitter:image" content="{{ asset('assets/main/images/social.png') }}">

	<meta property="og:title" content="Adityacprtm." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://adityacprtm.com" />
	<meta property="og:image" content="{{ asset('assets/main/images/social.png') }}" />
	<meta property="og:description" content="Adityacprtm.com is a personal website on behalf of Aditya Chamim Pratama which contains portfolio, blog and owner information." />
	<meta property="og:site_name" content="adityacprtm.com" />

	<link rel="shortcut icon" href="{{ asset('assets/main/images/favicons/favicon.ico') }}">
	<link rel="icon" sizes="16x16 32x32 64x64" href="{{ asset('assets/main/images/favicons/favicon.ico') }}">
	<link rel="icon" type="image/png" sizes="196x196" href="{{ asset('assets/main/images/favicons/favicon-192.png') }}">
	<link rel="icon" type="image/png" sizes="160x160" href="{{ asset('assets/main/images/favicons/favicon-160.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/main/images/favicons/favicon-96.png') }}">
	<link rel="icon" type="image/png" sizes="64x64" href="{{ asset('assets/main/images/favicons/favicon-64.png') }}">
	<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/main/images/favicons/favicon-32.png') }}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/main/images/favicons/favicon-16.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/main/images/favicons/favicon-57.png') }}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/main/images/favicons/favicon-114.png') }}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/main/images/favicons/favicon-72.png') }}">
	<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/main/images/favicons/favicon-144.png') }}">
	<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/main/images/favicons/favicon-60.png') }}">
	<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/main/images/favicons/favicon-120.png') }}">
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/main/images/favicons/favicon-76.png') }}">
	<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/main/images/favicons/favicon-152.png') }}">
	<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/main/images/favicons/favicon-180.png') }}">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="{{ asset('assets/main/images/favicons/favicon-144.png') }}">
	<meta name="msapplication-config" content="{{ asset('assets/main/images/favicons/browserconfig.xml') }}">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/main/styles/style.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/forms/theme-checkbox-radio.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/main/styles/prism.css') }}" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">

	<script data-ad-client="ca-pub-7614452738762603" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

	@stack('css')
</head>

<body class="bg-triangles full-page">
	<div class="preloader">
		<div class="preloader__wrap">
			<svg class="spinner-container" viewBox="0 0 52 52">
				<circle class="path" cx="26px" cy="26px" r="20px" fill="none" stroke-width="4px" />
			</svg>
			<div class="preloader__progress"><span></span></div>
		</div>
	</div>

	<main class="main">
		<div class="circle-menu">
			<div class="hamburger">
				<div class="line"></div>
				<div class="line"></div>
				<div class="line"></div>
				<div class="hamburger__text">MENU</div>
			</div>
		</div>

		<div class="nav-wrap">
			<ul class="nav">
				<li class="nav__item"><a class="{{ (Request::is('/') || Request::is('about')) ? "active" : "" }}" href="{{ route('about') }}">About</a></li>
				<li class="nav__item"><a class="{{ (Route::currentRouteName() == 'resume') ? "active" : "" }}" href="{{ route('resume') }}">Resume</a></li>
				<li class="nav__item"><a class="{{ (Route::currentRouteName() == 'portfolio') ? "active" : "" }}" href="{{ route('portfolio') }}">Portfolio</a></li>
				<li class="nav__item"><a class="{{ (Request::is('blog') || Request::is('blog/*')) ? "active" : "" }}" href="{{ route('blog') }}">Blog</a></li>
				<li class="nav__item"><a class="{{ (Route::currentRouteName() == 'contact') ? "active" : "" }}" href="{{ route('contact') }}">Contact</a></li>
			</ul>
		</div>

		<div class="wrapper sticky-parent">
			@if (!Request::is('blog/*'))
			<aside class="sidebar">
				<div class="sticky-column">
					<div class="avatar-wrap">
						<svg class="avatar avatar--180" viewBox="0 0 188 188">
							<g class="avatar__box">
								<image xlink:href="{!! asset(Info::where('key','PROFILE_IMAGE')->value('value')) !!}" height="100%" width="100%" />
							</g>
						</svg>
					</div>
					<div class="text-center">
						<h3 class="title sidebar__user-name">{!! Info::where('key','FIRST_NAME')->value('value') !!} <span class="weight--500">{!! Info::where('key','LAST_NAME')->value('value') !!}</span></h3>
						<div class="badge badge--gray">{!! Info::where('key','HEADLINE')->value('value') !!}</div>

						<div class="social">
							<a target="_blank" class="social__link" href="{!! Info::where('key','LINK_FACEBOOK')->value('value') !!}"><i class="font-icon icon-facebook"></i></a>
							<a target="_blank" class="social__link" href="{!! Info::where('key','LINK_TWITTER')->value('value') !!}"><i class="font-icon icon-twitter"></i></a>
							<a target="_blank" class="social__link" href="{!! Info::where('key','LINK_INSTAGRAM')->value('value') !!}"><i class="font-icon icon-instagram"></i></a>
							<a target="_blank" class="social__link" href="{!! Info::where('key','LINK_LINKEDIN')->value('value') !!}"><i class="font-icon icon-linkedin2"></i></a>
							<a target="_blank" class="social__link" href="{!! Info::where('key','LINK_GITHUB')->value('value') !!}"><i class="font-icon icon-github"></i></a>
						</div>
					</div>

					<ul class="contact-block">
						<li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="Birthday">
							<i class="font-icon icon-calendar2"></i>{!! Info::where('key','BIRTHDAY')->value('value') !!}
						</li>
						<li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="Address">
							<i class="font-icon icon-map-pin"></i>{!! Info::where('key','ADDRESS')->value('value') !!}
						</li>
						<li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="E-mail">
							<a href="mailto:{!! Info::where('key','EMAIL')->value('value') !!}"><i class="font-icon icon-mail"></i>{!! Info::where('key','EMAIL')->value('value') !!}</a>
						</li>
						<li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="Phone">
							<i class="font-icon icon-smartphone"></i>{!! Info::where('key','PHONE_NUMBER')->value('value') !!}
						</li>
					</ul>

					<a target="_blank" class="btn" href="{!! Info::where('key','LINK_CV')->value('value') !!}"><i class="font-icon icon-download"></i> Download CV</a>
					<div class="n-chk mt-3 float-left">
						<label class="new-control new-checkbox checkbox-dark">
							<input type="checkbox" class="new-control-input">
							<span class="new-control-indicator"></span><span class="weight--500 font-italic ml-2"> Enable Dark mode! </span>
						</label>
					</div>
				</div>
			</aside>
			@endif

			@yield('content')

		</div>
	</main>

	<svg class="svg-defs">
		<clipPath id="avatar-box">
			<path d="M1.85379 38.4859C2.9221 18.6653 18.6653 2.92275 38.4858 1.85453 56.0986.905299 77.2792 0 94 0c16.721 0 37.901.905299 55.514 1.85453 19.821 1.06822 35.564 16.81077 36.632 36.63137C187.095 56.0922 188 77.267 188 94c0 16.733-.905 37.908-1.854 55.514-1.068 19.821-16.811 35.563-36.632 36.631C131.901 187.095 110.721 188 94 188c-16.7208 0-37.9014-.905-55.5142-1.855-19.8205-1.068-35.5637-16.81-36.63201-36.631C.904831 131.908 0 110.733 0 94c0-16.733.904831-37.9078 1.85379-55.5141z" />
		</clipPath>
		<clipPath id="avatar-hexagon">
			<path d="M0 27.2891c0-4.6662 2.4889-8.976 6.52491-11.2986L31.308 1.72845c3.98-2.290382 8.8697-2.305446 12.8637-.03963l25.234 14.31558C73.4807 18.3162 76 22.6478 76 27.3426V56.684c0 4.6805-2.5041 9.0013-6.5597 11.3186L44.4317 82.2915c-3.9869 2.278-8.8765 2.278-12.8634 0L6.55974 68.0026C2.50414 65.6853 0 61.3645 0 56.684V27.2891z" />
		</clipPath>
	</svg>

	<div class="btnSlideNav slideOpen"></div>
	<div class="btnSlideNav slideClose"></div>
	<ul class="slideNav">
		<li class="slideNav__item">
			<h4 class="title title--5">More pages</h4>
		</li>
		<li class="slideNav__item"><a href="{{ route('manage') }}" target="_blank">Manage</a></li>
		<li class="slideNav__item"><a href="http://vlsm-calc.adityacprtm.com/" target="_blank">IPv4 VLSM Calc</a></li>
		<li class="slideNav__item"><a href="{{ route('old.v1') }}">Old Version 1</a></li>
		<li class="slideNav__item"><a href="{{ route('old.v2') }}">Old Version 2</a></li>
	</ul>
	<div class="overlay-slideNav"></div>

	<script src="{{ asset('assets/main/js/jquery-3.4.1.min.js') }}"></script>
	<script src="{{ asset('assets/main/js/plugins.min.js') }}"></script>
	<script src="{{ asset('assets/main/js/common.js') }}"></script>
	<script src="{{ asset('assets/main/js/plugins-demo.js') }}"></script>
	<script src="{{ asset('assets/main/js/prism.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128216763-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-128216763-1');
	</script>

	@stack('js')
</body>

</html>