@extends('main.layouts.default')
@section('title', 'Blog')
@section('content')

{{-- Content --}}
<div class="content">
	<div class="section mt-0">
		<h1 class="title title--h1 title__separate">Blog</h1>
	</div>

	@forelse ($blog as $b)

	<div class="news-grid section">
		<article class="news-item box">
			<div class="news-item__image-wrap overlay overlay--45">
				<div class="news-item__date">{{ date('d', strtotime($b->created_at)) }}<span>{{ date('M', strtotime($b->created_at)) }}</span></div>
				<a class="news-item__link" href="{{ route('blog.detail', $b->slug) }}"></a>
				<img class="cover lazyload" src="{{ asset($b->thumbnail) }}" alt="{{ $b->title }}" />
			</div>
			<div class="news-item__caption">
				<h3 class="title title--h3">{{ $b->title }}</h3>
				{!! substr($b->content,0,100).'....' !!}
			</div>
		</article>

	</div>
	@empty
	<p class="text-center mt-5">Not Available</p>
	@endforelse
</div>{{-- Content End --}}
@endsection