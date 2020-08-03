@extends('manage.layouts.default')
@section('title', 'Dashboard')

@push('css')
{{-- <link href="{{ asset('assets/manage/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css"> --}}
{{-- <link href="{{ asset('assets/manage/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" class="dashboard-analytics" /> --}}

<style>
	.center {
		position: absolute;
		width: 100%;
		height: 50px;
		top: 50%;
		left: 50%;
		margin-left: -70px;
		/* margin is -0.5 * dimension */
		margin-top: -25px;
	}
</style>
@endpush

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">
		{{-- <div class="row layout-top-spacing"> --}}
		<h1 class="center"><i class="fas fa-door-open"></i> W e l c o m e .</h1>
		{{-- </div> --}}
	</div>

	@include('manage/includes/footer');
</div>
<!--  END CONTENT AREA  -->
@endsection

@push('js')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
{{-- <script src="{{ asset('assets/manage/plugins/apex/apexcharts.min.js') }}"></script> --}}
{{-- <script src="{{ asset('assets/manage/assets/js/dashboard/dash_1.js') }}"></script> --}}
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script>
	$('#menu-dashboard').addClass('active');
    $('#menu-dashboard a').attr('data-active','true');
</script>
@endpush