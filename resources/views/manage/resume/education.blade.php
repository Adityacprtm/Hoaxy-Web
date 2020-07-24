@extends('manage.layouts.default')
@section('title', 'Resume Education Editor')

@push('css')

@endpush

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
</div>

@endsection

@push('js')
<script>
	$('#menu-resume').addClass('active');
    $('#menu-resume a').attr('data-active','true');
</script>
@endpush