@extends('main.layouts.default')
@section('title', 'Journey')
@section('description', 'Adityacprtm.com is a personal website on behalf of Aditya Chamim Pratama which contains
portfolio, blog and owner information. This page contains my resume.')

@section('content')
<div class="box box-content">
	<div class="pb-2">
		<h1 class="title title--h1 first-title title__separate">Journey</h1>
	</div>

	<!-- Journey -->
	<div class="row">
		<div class="col-12">
			<div class="timeline">

				@foreach ($journey as $journey)
				<article class="timeline__item">
					<h5 class="title title--h5 timeline__title"> {{ date('d F Y', strtotime($journey->date)) }}
						<span style="font-weight:normal">
							{!! $journey->description !!}
						</span>
					</h5>
				</article>
				@endforeach

			</div>
		</div>
	</div>

</div>
@endsection