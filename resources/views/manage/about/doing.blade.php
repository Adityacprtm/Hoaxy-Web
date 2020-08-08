@extends('manage.layouts.default')
@section('title', 'What I\'m Doing Editor')

@push('css')

@endpush

@section('content')
<div id="content" class="main-content">
</div>

@endsection

@push('js')
<script>
	$('#menu-about').addClass('active');
    $('#menu-about a').attr('data-active','true');
</script>
@endpush