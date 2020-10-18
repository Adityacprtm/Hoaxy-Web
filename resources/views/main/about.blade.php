@extends('main.layouts.default')
@section('title', 'About')
@section('description', 'Adityacprtm.com is a personal website on behalf of Aditya Chamim Pratama which contains
portfolio, blog and owner information. This page contains a summary about me.')

@section('content')
<div class="box box-content">
	<!-- About -->
	<div class="pb-0 pb-sm-2">
		<h1 class="title title--h1 first-title title__separate">About Me</h1>
		{!! About::where('id','1')->value('content') !!}
	</div>

	<!-- What -->
	<div class="mt-1">
		<h2 class="title title--h3">What I'm Doing</h2>
		<div class="row">
			<!-- Case Item -->
			<div class="col-12 col-lg-6">
				<div class="case-item">
					{{-- <img class="case-item__icon" src="assets/icons/icon-design.svg" alt="" /> --}}
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-cloud text-primary mb-3"
						fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z" />
					</svg>
					<div>
						<h3 class="title title--h4">Cloud Computing</h3>
						<p class="case-item__caption">I build many things using cloud computing including IoT, applications
							and websites.</p>
					</div>
				</div>
			</div>

			<!-- Case Item -->
			<div class="col-12 col-lg-6">
				<div class="case-item">
					{{-- <img class="case-item__icon" src="assets/icons/icon-dev.svg" alt="" /> --}}
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-code-slash text-primary mb-3"
						fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0zm-.999-3.124a.5.5 0 0 1 .33.625l-4 13a.5.5 0 0 1-.955-.294l4-13a.5.5 0 0 1 .625-.33z" />
					</svg>
					<div>
						<h3 class="title title--h4">Web Development</h3>
						<p class="case-item__caption">I enjoy developing and managing websites either for personal or specific
							purposes.</p>
					</div>
				</div>
			</div>

			<!-- Case Item -->
			<div class="col-12 col-lg-6">
				<div class="case-item">
					{{-- <img class="case-item__icon" src="assets/icons/icon-app.svg" alt="" /> --}}
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-hdd-network text-primary mb-3"
						fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M14 3H2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z" />
						<path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
						<path fill-rule="evenodd"
							d="M7.5 10V7h1v3a1.5 1.5 0 0 1 1.5 1.5h5.5a.5.5 0 0 1 0 1H10A1.5 1.5 0 0 1 8.5 14h-1A1.5 1.5 0 0 1 6 12.5H.5a.5.5 0 0 1 0-1H6A1.5 1.5 0 0 1 7.5 10zm0 1a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z" />
					</svg>
					<div>
						<h3 class="title title--h4">Networking</h3>
						<p class="case-item__caption">I love to make everything connected to communicate with each other, such
							as computing devices and now the IoT.</p>
					</div>
				</div>
			</div>

			<!-- Case Item -->
			<div class="col-12 col-lg-6">
				<div class="case-item">
					{{-- <img class="case-item__icon" src="assets/icons/icon-photo.svg" alt="" /> --}}
					<svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-shield-shaded text-primary mb-3"
						fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
							d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z" />
						<path
							d="M8 2.25c.909 0 3.188.685 4.254 1.022a.94.94 0 0 1 .656.773c.814 6.424-4.13 9.452-4.91 9.452V2.25z" />
					</svg>
					<div>
						<h3 class="title title--h4">Cybersecurity</h3>
						<p class="case-item__caption">I'm also in practice to protect systems, networks, and programs from
							digital attacks.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Clients -->
	<div class="mt-4">
		<h2 class="title title--h3">Clients</h2>

		<div class="swiper-container js-carousel-clients">
			<div class="swiper-wrapper">

				@foreach ($clients as $client)
				<div class="swiper-slide">
					<a target="_blank" rel="noopener" href="{{ $client->url }}" title="{{ $client->title }}"><img width="200"
							height="93" src="{{ asset($client->image) }}" alt="Logo" /></a>
				</div>
				@endforeach

			</div>

			<div class="swiper-pagination"></div>
		</div>
	</div>
</div>
@endsection