@extends('main.layouts.default')
@section('title', 'Portfolio')

@section('content')
<div class="content">
	<div class="section mt-0">
		<h1 class="title title--h1 title__separate">Portfolio</h1>
	</div>

	<div class="select section">
		<span class="placeholder">Select category</span>
		<ul class="filter">
			<li class="filter__item">Category</li>
			<li class="filter__item active" data-filter="*"><a class="filter__link active" href="#filter">All</a></li>
			@foreach ($category as $c)
			<li class="filter__item" data-filter=".category-{{ $c->category_name }}"><a class="filter__link" href="#filter">{{ $c->category_name }}</a></li>
			@endforeach
		</ul>
		<input type="hidden" name="changemetoo" />
	</div>

	<div class="gallery-grid js-grid js-filter-container">
		<div class="gutter-sizer"></div>
		@foreach ($portfolio as $p)
		<figure class="gallery-grid__item category-{{ $p->categoryPortfolio->category_name ?? '' }}">
			<div class="gallery-grid__image-wrap">
				<img class="gallery-grid__image cover lazyload" src="{{ asset($p->media) }}" data-zoom alt="TryHackMe">
			</div>
			<figcaption class="gallery-grid__caption">
				<h4 class="title title--h4 gallery-grid__title">{{ $p->title }}</h4>
				<a target="_blank" href="{{ $p->link }}">{{ $p->text_link }}</a>
				<span class="gallery-grid__category">{{ $p->categoryPortfolio->category_name ?? '' }}</span>
			</figcaption>
		</figure>
		@endforeach
	</div>
</div>
@endsection