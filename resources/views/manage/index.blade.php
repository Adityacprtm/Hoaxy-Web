@extends('manage.layouts.default')
@section('title', 'Dashboard')

@push('css')
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
<div id="content" class="main-content">
	<div class="layout-px-spacing">
		<h1 class="center"><i class="fas fa-door-open"></i> W e l c o m e .</h1>
	</div>

	@include('manage/includes/footer');
</div>
@endsection

@push('js')
<script>
	$('#menu-dashboard').addClass('active');
    $('#menu-dashboard a').attr('data-active','true');
</script>
@endpush