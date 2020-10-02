@extends('main.layouts.default')
@section('title', 'Resume')
@section('description', 'Adityacprtm.com is a personal website on behalf of Aditya Chamim Pratama which contains
portfolio, blog and owner information. This page contains my resume.')

@section('content')
<div class="box box-content">
	<div class="pb-2">
		<h1 class="title title--h1 first-title title__separate">Resume</h1>
	</div>

	<!-- Education -->
	<div class="row">
		<div class="col">
			<h2 class="title title--h3"><img class="title-icon" src="{{ asset('assets/main/icons/icon-education.svg') }}"
					alt="" /> Education</h2>
			<div class="timeline">

				@foreach ($education as $edu)
				<article class="timeline__item">
					<h5 class="title title--h5 timeline__title">{{ $edu->institution }}</h5>
					<span class="timeline__period">{{ $edu->year }}</span>
					<p class="timeline__description">{{ $edu->description }}{!! ($edu->description) ? '<br>' : ''
						!!}{{ $edu->city }} - {{ $edu->country }}</p>
				</article>
				@endforeach

			</div>
		</div>
		<div class="col">
			<h2 class="title title--h3"><img class="title-icon" src="{{ asset('assets/main/icons/icon-education.svg') }}"
					alt="" /> Non-formal Education</h2>
			<div class="timeline">

				@foreach ($nonformalEducation as $edu)
				<article class="timeline__item">
					<h5 class="title title--h5 timeline__title">{{ $edu->institution }}</h5>
					<span class="timeline__period">{{ $edu->year }} ({!! ($edu->hours) ? $edu->hours : '' !!} hours)</span>
					<p class="timeline__description">{{ $edu->description }}{!! ($edu->description) ? '<br>' : ''
						!!}{{ $edu->location }}</p>
				</article>
				@endforeach

			</div>
		</div>
	</div>

	<!-- Experience -->
	<div class="row mt-4">
		<div class="col-12">
			<h2 class="title title--h3"><img class="title-icon" src="{{ asset('assets/main/icons/icon-experience.svg') }}"
					alt="" /> Experience</h2>
			<div class="timeline">

				@foreach ($experience as $exp)
				<article class="timeline__item">
					<h5 class="title title--h5 timeline__title">{{ $exp->company }} <small>as</small> {{ $exp->position }}
					</h5>
					<span class="timeline__period">{{ $exp->startDate }} - {{ $exp->endDate }}</span>
					<p class="timeline__description">{{ $exp->description }}</p>
				</article>
				@endforeach

			</div>
		</div>
	</div>

	<!-- Skills -->
	<div class="row mt-4">
		<div class="col-12">
			<h2 class="title title--h3">My Skills</h2>
			<div class="box box__border">

				@foreach ($skills as $skill)

				@if ($skill->activated == 1)

				@if ($skill->level == 1)
				@php $value = '33'; $text = 'Beginner' @endphp
				@elseif ($skill->level == 2)
				@php $value = '66'; $text = 'Intermediate' @endphp
				@elseif ($skill->level == 3)
				@php $value = '100'; $text = 'Expert' @endphp
				@endif

				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0"
						aria-valuemax="100">
						<div class="progress-text"><span>{{ $skill->title }}</span><span>{{$text}}</span></div>
					</div>
					<div class="progress-text"><span>{{ $skill->title }}</span></div>
				</div>

				@endif

				@endforeach

			</div>
		</div>
	</div>

	<!-- Code Skills -->
	<div class="row mt-4">
		<div class="col-12">
			<h2 class="title title--h3">Code Skills</h2>
			<div class="box box__border">

				@foreach ($codeSkills as $skill)

				@if ($skill->level == 1)
				@php $value = '33'; $text = 'Beginner' @endphp
				@elseif ($skill->level == 2)
				@php $value = '66'; $text = 'Intermediate' @endphp
				@elseif ($skill->level == 3)
				@php $value = '100'; $text = 'Expert' @endphp
				@endif

				<div class="progress">
					<div class="progress-bar" role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0"
						aria-valuemax="100">
						<div class="progress-text"><span>{{ $skill->title }}</span><span>{{$text}}</span></div>
					</div>
					<div class="progress-text"><span>{{ $skill->title }}</span></div>
				</div>
				@endforeach

			</div>
		</div>
	</div>
</div>
@endsection