@extends('main.layouts.default')
@section('title', $blog->title)

@push('css')
<style>
	.content {
		margin-top: 2.5rem;
		margin-bottom: 2.5rem;
		padding-left: 6rem;
		padding-right: 6rem;
		width: 100%;
		position: relative;
	}

	@media only screen and (max-width: 992px) {
		.content {
			margin-top: 2.5rem;
			margin-bottom: 2.5rem;
			padding-left: 4rem;
			padding-right: 4rem;
			width: 100%;
			position: relative;
		}
	}

	@media only screen and (max-width: 450px) {
		.content {
			margin-top: 2.5rem;
			margin-bottom: 2.5rem;
			padding-left: 2rem;
			padding-right: 2rem;
			width: 100%;
			position: relative;
		}
	}
</style>
@endpush

@section('content')
<div class="content ">
	@if ($blog)
	<div class="pb-3">
		<header class="header-post">
			<h1 class="title title--h1">{{ $blog->title }}</h1>
			{{-- <div class="caption-post">
				<p>Above all, think of life as a prototype. We can conduct experiments, make discoveries, and change our perspectives. We can look for opportunities to turn processes into projects that have tangible outcomes.</p>
			</div> --}}
			<div class="header-post__image-wrap">
				<img class="cover lazyload" data-zoom src="{{ asset($blog->thumbnail) }}" alt="" />
			</div>
		</header>
		{!! $blog->content !!}
		<footer class="footer-post">
			<div class="addthis_inline_share_toolbox"></div>
		</footer>

		<hr>

		<div id="disqus_thread"></div>
	</div>
	@else
	<p>Oops, not available at this time</p>
	@endif
</div>
@endsection

@push('js')
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5edb1a20894e63c7"></script>
@endpush