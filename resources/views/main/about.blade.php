@extends('main.layouts.default')
@section('title', 'About')
@section('content')
{{-- Content --}}
<div class="content">
	{{-- About --}}
	<div class="section mt-0">
		<h1 class="title title--h1 title__separate">About Me</h1>
		<div class="pt-2 pt-sm-3">
			<p>I was Born in Pangkalan Bun, June 21, 1997 at 13:00. I live in Banjarbaru, South Kalimantan, Indonesia. Currently pursuing a bachelor's degree at the Faculty of Computer Science, Universitas Brawijaya focuses on Network Based Computing.</p>
			<p class="mb-0">Become one of the selected participants to take part in the Partner Certification of the DIGITALENT 2019 program implemented by the Ministry of Communication and Information.</p>
		</div>
	</div>

	{{-- What --}}
	<div class="section">
		<h2 class="title title--h2">What I'm Doing</h2>
		<div class="row">
			{{-- Case Item --}}
			<div class="col-12 col-lg-6 case-item-wrap">
				<div class="case-item">
					{{-- <img class="case-item__icon" src="{{ asset('assets/main/icons/icon-design.svg') }}" alt="" /> --}}
					<i style="color: #0045FF; opacity: 0.7;" class="case-item__icon fas fa-cloud fa-5x"></i>
					<h3 class="title title--h3">Cloud Computing</h3>
					<p class="case-item__caption">NA</p>
				</div>
			</div>

			{{-- Case Item --}}
			<div class="col-12 col-lg-6 case-item-wrap">
				<div class="case-item">
					{{-- <img class="case-item__icon" src="{{ asset('assets/main/icons/icon-dev.svg') }}" alt="" /> --}}
					<i style="color: #0045FF; opacity: 0.7;" class="case-item__icon fas fa-laptop-code fa-5x"></i>
					<h3 class="title title--h3">Web Development</h3>
					<p class="case-item__caption">NA</p>
				</div>
			</div>

			{{-- Case Item --}}
			<div class="col-12 col-lg-6 case-item-wrap">
				<div class="case-item">
					{{-- <img class="case-item__icon" src="{{ asset('assets/main/icons/icon-app.svg') }}" alt="" /> --}}
					<i style="color: #0045FF; opacity: 0.7;" class="case-item__icon fas fa-network-wired fa-5x"></i>
					<h3 class="title title--h3">Networking</h3>
					<p class="case-item__caption">NA</p>
				</div>
			</div>

			{{-- Case Item --}}
			<div class="col-12 col-lg-6 case-item-wrap">
				<div class="case-item">
					{{-- <img class="case-item__icon" src="{{ asset('assets/main/icons/icon-photo.svg') }}" alt="" /> --}}
					<i style="color: #0045FF; opacity: 0.7;" class="case-item__icon fas fa-microchip fa-5x"></i>
					<h3 class="title title--h3">Internet of Things</h3>
					<p class="case-item__caption">NA</p>
				</div>
			</div>
		</div>
	</div>

	{{-- Testimonials --}}
	{{-- <div class="section">
		<h2 class="title title--h2">Testimonials</h2>
		<div class="swiper-container js-carousel-review">
			<div class="swiper-wrapper">
				
				<div class="swiper-slide review-item">
					<svg class="avatar avatar--80" viewBox="0 0 84 84">
						<g class="avatar__hexagon">
							<image xlink:href="{{ asset('assets/main/img/avatar-2.jpg') }}" height="100%" width="100%" />
						</g>
					</svg>
					<h4 class="title title--h3">Daniel Lewis</h4>
					<p class="review-item__caption">Felicia was hired to create a corporate identity. We were very pleased with the work done. She has a lot of experience and is very concerned about the needs of client.</p>
				</div>

				<div class="swiper-slide review-item">
					<svg class="avatar avatar--80" viewBox="0 0 84 84">
						<g class="avatar__hexagon">
							<image xlink:href="{{ asset('assets/main/img/avatar-3.jpg') }}" height="100%" width="100%" />
						</g>
					</svg>
					<h4 class="title title--h3">Jessica Miller</h4>
					<p class="review-item__caption">Felicia was hired to create a corporate identity. We were very pleased with the work done. She has a lot of experience and is very concerned about the needs of client.</p>
				</div>

				<div class="swiper-slide review-item">
					<svg class="avatar avatar--80" viewBox="0 0 84 84">
						<g class="avatar__hexagon">
							<image xlink:href="{{ asset('assets/main/img/avatar-4.jpg') }}" height="100%" width="100%" />
						</g>
					</svg>
					<h4 class="title title--h3">Tanya Ruiz</h4>
					<p class="review-item__caption">Felicia was hired to create a corporate identity. We were very pleased with the work done. She has a lot of experience and is very concerned about the needs of client.</p>
				</div>

				<div class="swiper-slide review-item">
					<svg class="avatar avatar--80" viewBox="0 0 84 84">
						<g class="avatar__hexagon">
							<image xlink:href="{{ asset('assets/main/img/avatar-5.jpg') }}" height="100%" width="100%" />
						</g>
					</svg>
					<h4 class="title title--h3">Thomas Castro</h4>
					<p class="review-item__caption">Felicia was hired to create a corporate identity. We were very pleased with the work done. She has a lot of experience and is very concerned about the needs of client.</p>
				</div>
			</div>

			<div class="swiper-pagination"></div>
		</div>
	</div> --}}

	{{-- Clients --}}
	<div class="section">
		<h2 class="title title--h2">Clients</h2>
		<div class="swiper-container js-carousel-clients">
			<div class="swiper-wrapper">
				{{-- Item client --}}
				<div class="swiper-slide">
					<a href="#"><img src="{{ asset('assets/main/img/logo-partner.svg') }}" alt="Logo" /></a>
				</div>

				{{-- Item client --}}
				<div class="swiper-slide">
					<a href="#"><img src="{{ asset('assets/main/img/logo-partner.svg') }}" alt="Logo" /></a>
				</div>

				{{-- Item client --}}
				<div class="swiper-slide">
					<a href="#"><img src="{{ asset('assets/main/img/logo-partner.svg') }}" alt="Logo" /></a>
				</div>

				{{-- Item client --}}
				<div class="swiper-slide">
					<a href="#"><img src="{{ asset('assets/main/img/logo-partner.svg') }}" alt="Logo" /></a>
				</div>
			</div>

			<div class="swiper-pagination"></div>
		</div>
	</div>
</div>{{-- Content End --}}
@endsection