@extends('main.layouts.default')
@section('title', 'Resume')
@section('content')

{{-- Content --}}
<div class="content">
	<div class="section mt-0">
		<h1 class="title title--h1 title__separate">Resume</h1>
	</div>

	{{-- Experience --}}
	<div class="section">
		<h2 class="title title--h2"><img class="title-icon" src="{{ asset('assets/main/icons/icon-education.svg') }}" alt="" /> Education</h2>
		<div class="timeline">
			{{-- Item --}}
			<article class="timeline__item">
				<h5 class="title title--h3 timeline__title">University of Brawijaya</h5>
				<span class="timeline__period">2015 - 2020</span>
				<p class="timeline__description">Informatics Engineering focused on Network-Based Computing.<br>Malang - Indonesia.</p>
			</article>

			{{-- Item --}}
			<article class="timeline__item">
				<h5 class="title title--h3 timeline__title">SMA N 1 Banjarbaru</h5>
				<span class="timeline__period">2012 - 2015</span>
				<p class="timeline__description">Majored in Science.<br> Banjarbaru - Indonesia.</p>
			</article>

			{{-- Item --}}
			<article class="timeline__item">
				<h5 class="title title--h3 timeline__title">SMP N 1 Kuranji</h5>
				<span class="timeline__period">2009 - 2012</span>
				<p class="timeline__description">Tanah Bumbu - Indonesia.</p>
			</article>
		</div>
	</div>

	<div class="section">
		<h2 class="title title--h2"><img class="title-icon" src="{{ asset('assets/main/icons/icon-experience.svg') }}" alt="" /> Experience</h2>
		<div class="timeline">
			{{-- Item --}}
			<article class="timeline__item">
				<h5 class="title title--h3 timeline__title">AWS Cloud Computing Training</h5>
				<span class="timeline__period">2019</span>
				<p class="timeline__description">Digital Talent Scholarship 2019.</p>
			</article>

			{{-- Item --}}
			<article class="timeline__item">
				<h5 class="title title--h3 timeline__title">NOC FIA UB</h5>
				<span class="timeline__period">2018</span>
				<p class="timeline__description">Network Engineer Intern.</p>
			</article>

			{{-- Item --}}
			<article class="timeline__item">
				<h5 class="title title--h3 timeline__title">Laboratory Learning FILKOM UB</h5>
				<span class="timeline__period">2017 - 2019</span>
				<p class="timeline__description">Computer Network Practicum Assistant.</p>
			</article>

			{{-- Item --}}
			<article class="timeline__item">
				<h5 class="title title--h3 timeline__title">FILKOM Abdimasa</h5>
				<span class="timeline__period">2017 - 2018</span>
				<p class="timeline__description">Chief Executive.</p>
			</article>
		</div>
	</div>

	{{-- Skills --}}
	<div class="section">
		<h2 class="title title--h2">My Skills</h2>
		<div class="box-gray">
			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Amazon Web Service</span><span>Intermediate</span></div>
				</div>
				<div class="progress-text"><span>Amazon Web Service</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Microsoft Office</span><span>Intermediate</span></div>
				</div>
				<div class="progress-text"><span>Microsoft Office</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Web Development</span><span>Intermediate</span></div>
				</div>
				<div class="progress-text"><span>Web Development</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Computer Networking</span><span>Intermediate</span></div>
				</div>
				<div class="progress-text"><span>Computer Networking</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Linux Environment</span><span>Intermediate</span></div>
				</div>
				<div class="progress-text"><span>Linux Environment</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Dota2</span><span>Expert</span></div>
				</div>
				<div class="progress-text"><span>Dota2</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Futsal</span><span>Expert</span></div>
				</div>
				<div class="progress-text"><span>Futsal</span></div>
			</div>
		</div>
	</div>

	{{-- Code Skills --}}
	<div class="section">
		<h2 class="title title--h2">Code Skills</h2>
		<div class="box-gray">
			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>PHP (Laravel / CI)</span><span>Intermediate</span></div>
				</div>
				<div class="progress-text"><span>PHP (Laravel / CI)</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Python</span><span>Intermediate</span></div>
				</div>
				<div class="progress-text"><span>Python</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Node.js</span><span>Intermediate</span></div>
				</div>
				<div class="progress-text"><span>Node.js</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>HTML + CSS</span><span>Beginner</span></div>
				</div>
				<div class="progress-text"><span>HTML + CSS</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Java</span><span>Beginner</span></div>
				</div>
				<div class="progress-text"><span>Java</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>Ruby</span><span>beginner</span></div>
				</div>
				<div class="progress-text"><span>Ruby</span></div>
			</div>

			{{-- Progress --}}
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
					<div class="progress-text"><span>MySQL</span><span>Intermediate</span></div>
				</div>
				<div class="progress-text"><span>MySQL</span></div>
			</div>
		</div>
	</div>
</div>{{-- Content End --}}
@endsection