<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">


{{-- Mirrored from netgon.net/artstyles/v-card2/full/one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 May 2020 05:37:41 GMT --}}

<head>
    <meta charset="utf-8" />
    <title>Adityacprtm - @yield('title')</title>

    {{-- Meta Data --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="author" content="ArtTemplate" />
    <meta name="description" content="vCard" />

    {{-- Twitter data --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ArtTemplates">
    <meta name="twitter:title" content="vCard">
    <meta name="twitter:description" content="vCard">
    <meta name="twitter:image" content="{{ asset('assets/main/images/social.html') }}">

    {{-- Open Graph data --}}
    <meta property="og:title" content="ArtTemplate" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="your url website" />
    <meta property="og:image" content="{{ asset('assets/main/images/social.html') }}" />
    <meta property="og:description" content="vCard" />
    <meta property="og:site_name" content="vCard" />

    {{-- Favicons --}}
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/main/images/favicons/apple-touch-icon-144x144.png') }}"">
	<link rel=" apple-touch-icon" sizes="114x114" href="{{ asset('assets/main/images/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/main/images/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/main/images/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="shortcut icon" href="{{ asset('assets/main/images/favicons/favicon.png" type="image/png') }}">

    {{-- Styles --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/styles/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/demo/style-demo.css') }}" />

    {{-- tambahan css --}}
    @stack('css')

    @if (Route::currentRouteName() == 'contact')
    {{-- Mapbox--}}
    <script src='{{ asset('assets/main/api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.js') }}'></script>
    <link href='{{ asset('assets/main/api.mapbox.com/mapbox-gl-js/v1.4.1/mapbox-gl.css') }}' rel='stylesheet' />
    @endif

</head>

<body class="bg-triangles full-page">
    {{-- Preloader --}}
    <div class="preloader">
        <div class="preloader__wrap">
            <svg class="spinner-container" viewBox="0 0 52 52">
                <circle class="path" cx="26px" cy="26px" r="20px" fill="none" stroke-width="4px" />
            </svg>
            <div class="preloader__progress"><span></span></div>
        </div>
    </div>

    <main class="main">
        {{-- Menu --}}
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
                <li class="nav__item"><a class="{{ (Route::currentRouteName() == 'about') ? "active" : "" }}" href="{{ route('about') }}">About</a></li>
                <li class="nav__item"><a class="{{ (Route::currentRouteName() == 'resume') ? "active" : "" }}" href="{{ route('resume') }}">Resume</a></li>
                <li class="nav__item"><a class="{{ (Route::currentRouteName() == 'portfolio') ? "active" : "" }}" href="{{ route('portfolio') }}">Portfolio</a></li>
                <li class="nav__item"><a class="{{ (Route::currentRouteName() == 'blog') ? "active" : "" }}" href="{{ route('blog') }}">Blog</a></li>
                <li class="nav__item"><a class="{{ (Route::currentRouteName() == 'contact') ? "active" : "" }}" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>

        <div class="wrapper sticky-parent">
            {{-- Sidebar --}}
            <aside class="sidebar">
                <div class="sticky-column">
                    <div class="avatar-wrap">
                        <svg class="avatar avatar--180" viewBox="0 0 188 188">
                            <g class="avatar__box">
                                <image xlink:href="{{ asset('assets/main/img/avatar-1.jpg') }}" height="100%" width="100%" />
                            </g>
                        </svg>
                    </div>
                    <div class="text-center">
                        <h3 class="title sidebar__user-name"><span class="weight--500">Felecia</span> Brown</h3>
                        <div class="badge badge--gray">Creative Director</div>

                        {{-- Social --}}
                        <div class="social">
                            <a class="social__link" href="https://www.facebook.com/"><i class="font-icon icon-facebook"></i></a>
                            <a class="social__link" href="https://www.behance.com/"><i class="font-icon icon-twitter"></i></a>
                            <a class="social__link" href="https://www.linkedin.com/"><i class="font-icon icon-linkedin2"></i></a>
                        </div>
                    </div>

                    <ul class="contact-block">
                        <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="Birthday">
                            <i class="font-icon icon-calendar2"></i>March 25, 1995
                        </li>
                        <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="Address">
                            <i class="font-icon icon-map-pin"></i>San-Francisco, USA
                        </li>
                        <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="E-mail">
                            <a href="mailto:example@mail.com"><i class="font-icon icon-mail"></i>example@mail.com</a>
                        </li>
                        <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="Phone">
                            <i class="font-icon icon-smartphone"></i>+1 (070) 123-4567
                        </li>
                        <li class="contact-block__item" data-toggle="tooltip" data-placement="top" title="Skype">
                            <a href="skype:skype-example"><i class="font-icon icon-skype"></i>Felecia_Brown</a>
                        </li>
                    </ul>

                    <a class="btn" href="#"><i class="font-icon icon-download"></i> Download CV</a>
                </div>
            </aside>

            @yield('content')

        </div>{{-- Wrapper End --}}
    </main>

    {{-- SVG masks --}}
    <svg class="svg-defs">
        <clipPath id="avatar-box">
            <path d="M1.85379 38.4859C2.9221 18.6653 18.6653 2.92275 38.4858 1.85453 56.0986.905299 77.2792 0 94 0c16.721 0 37.901.905299 55.514 1.85453 19.821 1.06822 35.564 16.81077 36.632 36.63137C187.095 56.0922 188 77.267 188 94c0 16.733-.905 37.908-1.854 55.514-1.068 19.821-16.811 35.563-36.632 36.631C131.901 187.095 110.721 188 94 188c-16.7208 0-37.9014-.905-55.5142-1.855-19.8205-1.068-35.5637-16.81-36.63201-36.631C.904831 131.908 0 110.733 0 94c0-16.733.904831-37.9078 1.85379-55.5141z" />
        </clipPath>
        <clipPath id="avatar-hexagon">
            <path d="M0 27.2891c0-4.6662 2.4889-8.976 6.52491-11.2986L31.308 1.72845c3.98-2.290382 8.8697-2.305446 12.8637-.03963l25.234 14.31558C73.4807 18.3162 76 22.6478 76 27.3426V56.684c0 4.6805-2.5041 9.0013-6.5597 11.3186L44.4317 82.2915c-3.9869 2.278-8.8765 2.278-12.8634 0L6.55974 68.0026C2.50414 65.6853 0 61.3645 0 56.684V27.2891z" />
        </clipPath>
    </svg>

    {{-- Demo Menu --}}
    <div class="btnSlideNav slideOpen"></div>
    <div class="btnSlideNav slideClose"></div>
    <ul class="slideNav">
        <li class="slideNav__item rtl-mode">
            <h4 class="title title--5">More pages</h4>
        </li>
        {{-- <li class="slideNav__item"><a href="one-page.html">1. Single page</a><span class="lable-new">NEW</span></li>
        <li class="slideNav__item"><a href="background-2.html">2. Background 2</a></li>
        <li class="slideNav__item"><a href="background-3.html">3. Background 3</a></li>
		<li class="slideNav__item"><a href="background-4.html">4. Background 4</a></li>
		<li class="slideNav__item"><a href="background-5.html">5. Background 5</a></li>
		<li class="slideNav__item"><a href="background-6.html">6. Background 6</a></li> --}}
        <li class="slideNav__item"><a href="one-page.html">Single page</a><span class="lable-new">NEW</span></li>
        <li class="slideNav__item"><a href="{{ route('manage') }}">Manage</a></li>
        <li class="slideNav__item"><a href="{{ route('old.v1') }}">Old Version 1</a></li>
        <li class="slideNav__item"><a href="{{ route('old.v2') }}">Old Version 2</a></li>
    </ul>
    <div class="overlay-slideNav"></div>
    {{-- Demo Menu --}}

    {{-- JavaScripts --}}
    <script src="{{ asset('assets/main/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/plugins.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/common.js') }}"></script>

    <script src="{{ asset('assets/main/demo/plugins-demo.js') }}"></script>

    {{-- tambahan js --}}
    @stack('javascript')

    @if (Route::currentRouteName() == 'contact')
    {{-- Mapbox init --}}
    <script src="{{ asset('assets/main/js/mapbox.init.js') }}"></script>
    @endif
</body>

{{-- Mirrored from netgon.net/artstyles/v-card2/full/one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 May 2020 05:37:41 GMT --}}

</html>