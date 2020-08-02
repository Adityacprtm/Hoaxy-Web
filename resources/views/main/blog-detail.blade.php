@extends('main.layouts.default')
@section('title', 'Blog Detail')

@push('css')
<style>
	.content {
		max-height: 680px;
		margin-top: 2.5rem;
		margin-bottom: 2.5rem;
		padding-left: 7rem;
		padding-right: 7rem;
		width: 100%;
		position: relative;
	}

	pre {
		background-color: whitesmoke;
		padding: 10px;
	}
</style>
@endpush

@section('content')

{{-- Content --}}
<div class="content ">
	{{-- Post --}}
	@if (!$blog->isEmpty())
	<div class="pb-3">

		@foreach ($blog as $blog)

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

		@endforeach

		<footer class="footer-post">
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<div class="addthis_inline_share_toolbox"></div>
		</footer>

		<hr>

		<div id="disqus_thread"></div>

	</div>
	@else
	<p>Not Available</p>
	@endif

</div>{{-- Content End --}}
@endsection

@push('js')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5edb1a20894e63c7"></script>
@endpush