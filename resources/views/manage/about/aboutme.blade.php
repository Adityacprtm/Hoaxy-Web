@extends('manage.layouts.default')
@section('title', 'About Me Editor')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/editors/quill/quill.snow.css') }}">
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
	<div class="layout-px-spacing">
		<div class="layout-top-spacing">
			<div class="row layout-spacing">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="statbox widget box box-shadow">
						<div class="widget-header">
							<div class="row">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12">
									<h6></h6>
								</div>
							</div>
						</div>
						<div class="widget-content widget-content-area">
							<p>Active</p>
							<div class="alert alert-primary">
								{!! $content->content !!}
							</div>
							<hr>
							<p>Editor</p>
							<div id="content-container">
								<div id="toolbar-container">
									<button class="ql-bold" data-toggle="tooltip" data-placement="bottom" title="Bold"></button>
									<button class="ql-underline" data-toggle="tooltip" data-placement="bottom" title="Underline"></button>
									<button class="ql-italic" data-toggle="tooltip" data-placement="bottom" title="Add italic text <cmd+i>"></button>
									{{-- <button class="ql-image" data-toggle="tooltip" data-placement="bottom" title="Upload image"></button> --}}
									{{-- <button class="ql-code-block" data-toggle="tooltip" data-placement="bottom" title="Show code"></button> --}}
								</div>
								<div id="quill-tooltip">
									{!! $content->content !!}
								</div>
								<button class="saveAbout btn btn-primary mt-3">Save</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('manage.includes.footer')

</div>
@endsection

@push('js')
<script src="{{ asset('assets/manage/plugins/editors/quill/quill.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/editors/quill/custom-quill.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script>
	$('#menu-about').addClass('active');
	$('#menu-about a').attr('data-active','true');
	
	$('.saveAbout').click(function (){
		var myEditor = document.querySelector("#quill-tooltip");
		var contentText = myEditor.children[0].innerHTML;
		
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$.ajax({
			url: "{{ route('manage.about.me.update') }}",
            type: "POST",
            data: { content: contentText },
            // processData: false,
            // contentType: false,
            success: function (data) {
                swal({
                    title: 'Success!',
                    text: 'About has been updated.',
                    type: 'success',
                    padding: '2em',
                    timer: 3000
                }).then(function() {
                    window.location.reload();
                })
            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal({
                    title: 'Oops!',
                    text: xhr.responseText,
                    type: 'error',
                    padding: '2em',
                    timer: 3000
                }).then(function() {
                    window.location.reload();
                })
            }
		})
	})
</script>
@endpush