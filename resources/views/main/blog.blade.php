@extends('main.layouts.default')
@section('title', 'Blog')

@section('content')
<div class="content">
	<div class="section mt-0">
		<h1 class="title title--h1 title__separate">Blog</h1>
	</div>
	<div class="news-grid section">
		@forelse ($blog as $b)
		<article class="news-item box">
			<div class="news-item__image-wrap overlay overlay--45">
				<div class="news-item__date">{{ date('d', strtotime($b->created_at)) }}<span>{{ date('M', strtotime($b->created_at)) }}</span></div>
				<a class="news-item__link" href="{{ route('blog.detail', $b->slug) }}"></a>
				<img class="cover lazyload" src="{{ asset($b->thumbnail) }}" alt="{{ $b->title }}" />
			</div>
			<div class="news-item__caption">
				<h3 class="title title--h3">{{ $b->title }}</h3>
				{!! substr($b->content,0,90) !!} ....
			</div>
		</article>
		@empty
	</div>
	<p class="text-center mt-5">Oops, not available at this time</p>
	@endforelse
</div>
@endsection