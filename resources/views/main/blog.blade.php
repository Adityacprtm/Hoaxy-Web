@extends('main.layouts.default')
@section('title', 'Blog')
@section('content')

{{-- Content --}}
<div class="content">
	<div class="section mt-0">
		<h1 class="title title--h1 title__separate">Blog</h1>
	</div>

	{{-- News --}}
	<div class="news-grid section">
		{{-- Post --}}
		<article class="news-item box">
			<div class="news-item__image-wrap overlay overlay--45">
				<div class="news-item__date">16<span>Sep</span></div>
				<a class="news-item__link" href="single-post.html"></a>
				<img class="cover lazyload" src="../assets/img/image_02.jpg" alt="" />
			</div>
			<div class="news-item__caption">
				<h3 class="title title--h3">Design Conferences in 2019</h3>
				<p>veritatis et quasi architecto beatae vitae dicta sunt, explicabo...</p>
			</div>
		</article>

		{{-- Post --}}
		<article class="news-item box">
			<div class="news-item__image-wrap overlay overlay--45">
				<div class="news-item__date">15<span>Sep</span></div>
				<a class="news-item__link" href="single-post.html"></a>
				<img class="cover lazyload" src="../assets/img/image_06.jpg" alt="" />
			</div>
			<div class="news-item__caption">
				<h3 class="title title--h3">Best Fonts Every Designer</h3>
				<p>Sed perspiciatis nam libero tempore, cum soluta nobis est eligendi...</p>
			</div>
		</article>

		{{-- Post --}}
		<article class="news-item box">
			<div class="news-item__image-wrap overlay overlay--45">
				<div class="news-item__date">14<span>Sep</span></div>
				<a class="news-item__link" href="single-post.html"></a>
				<img class="cover lazyload" src="../assets/img/image_08.jpg" alt="" />
			</div>
			<div class="news-item__caption">
				<h3 class="title title--h3">Design Digest #80</h3>
				<p>Excepteur sint occaecat cupidatat no proident, quis nostrum ullam...</p>
			</div>
		</article>

		{{-- Post --}}
		<article class="news-item box">
			<div class="news-item__image-wrap overlay overlay--45">
				<div class="news-item__date">13<span>Sep</span></div>
				<a class="news-item__link" href="single-post.html"></a>
				<img class="cover lazyload" src="../assets/img/image_07.jpg" alt="" />
			</div>
			<div class="news-item__caption">
				<h3 class="title title--h3">UI Interactions of the week</h3>
				<p>enim ad minim veniam, consectetur adipiscing elit, quis nostrud nisi...</p>
			</div>
		</article>

		{{-- Post --}}
		<article class="news-item box">
			<div class="news-item__image-wrap overlay overlay--45">
				<div class="news-item__date">12<span>Sep</span></div>
				<a class="news-item__link" href="single-post.html"></a>
				<img class="cover lazyload" src="../assets/img/image_05.jpg" alt="" />
			</div>
			<div class="news-item__caption">
				<h3 class="title title--h3">The Forgotten Art of Spacing</h3>
				<p>maxime placeat, sed do eiusmod tempor incididunt ut labore...</p>
			</div>
		</article>

		{{-- Post --}}
		<article class="news-item box">
			<div class="news-item__image-wrap overlay overlay--45">
				<div class="news-item__date">11<span>Sep</span></div>
				<a class="news-item__link" href="single-post.html"></a>
				<img class="cover lazyload" src="../assets/img/image_01.jpg" alt="" />
			</div>
			<div class="news-item__caption">
				<h3 class="title title--h3">Design Digest #79</h3>
				<p>Sed perspiciatis nam libero tempore, cum soluta nobis est eligendi...</p>
			</div>
		</article>
	</div>
</div>{{-- Content End --}}
@endsection