@extends('manage.layouts.default')
@section('title', 'Add Blog')

@push('css')
<link href="{{ asset('assets/manage/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/forms/theme-checkbox-radio.css') }}">

<style>
	.bootstrap-tagsinput {
		width: 100% !important;
	}

	.bootstrap-tagsinput .tag {
		margin-right: 2px;
		color: white;
	}

	.label {
		display: inline;
		padding: .2em .6em .3em;
		font-size: 75%;
		font-weight: 700;
		line-height: 1;
		color: #fff;
		text-align: center;
		white-space: nowrap;
		vertical-align: baseline;
		border-radius: .25em;
	}

	.label-info {
		background-color: #2196f3;
	}
</style>
@endpush

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">

	<div class="layout-px-spacing">
		<div class="layout-top-spacing">
			<div class="row layout-spacing">
				<div class="col-lg-12">
					<div class="statbox widget box box-shadow">
						<div class="widget-header">
							<div class="row">
								<div class="col-xl-12 col-md-12 col-sm-12 col-12">
									<h6></h6>
								</div>
							</div>
						</div>
						<div class="widget-content widget-content-area">
							<form id="blog-form" class="section general-info" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="user_id" id="user_id" value="{{ isset($blog) ? $blog->id : '' }}">
								<div class="widget-content widget-content-area">

									<div class="mb-4">
										<label for="title">Title</label>
										<input type="text" class="form-control" id="title" name="title" placeholder="Title" value="{{ (isset($blog) ? $blog->title : '') }}">
									</div>

									<div class="mb-4">
										<label for="editor1">Content</label>
										{{-- <div class="alert alert-warning" role="alert">Tidak perlu menambahkan heading level 1!</div> --}}
										<textarea class="form-control" name="editor">{{ (isset($blog) ? $blog->content : '') }}</textarea>
									</div>

									<div class="row mb-4">
										@isset($blog)
										<div class="col">
											<label for="previewThumbnail">Preview Thumbnail</label><br>
											<img id="previewThumbnail" width="70%" src="{{ isset($blog) ? asset($blog->thumbnail) : '' }}">
										</div>
										@endisset
										<div class="col">
											<div class="custom-file-container" data-upload-id="myFirstImage">
												<label>Upload Thumbnail <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
												<label class="custom-file-container__custom-file">
													<input type="file" id="thumbnail" name="thumbnail" class="custom-file-container__custom-file__custom-file-input" accept="image/*" data-max-file-size="2M">
													<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
													<span class="custom-file-container__custom-file__custom-file-control"></span>
												</label>
												<div class="custom-file-container__image-preview"></div>
											</div>
										</div>
									</div>

									<div class="mb-4">
										<label for="tags">Tags</label>
										<input type="text" data-role="tagsinput" class="form-control" id="tags" name="tags">
									</div>

									<div class="mb-4">
										<label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
											<input id="checkbox-activated" type="checkbox" class="form-control new-control-input" {{ isset($blog) ? ($blog->activated==1 ? 'checked' : '') : '' }}>
											<span class="new-control-indicator"></span> Activate
										</label>
									</div>

									<a class="btn" role="button" href="{{ route('manage.blog') }}">Cancel</a>
									<button type="submit" id="saveBtn" class="btn btn-primary" value="create">Save</button>
								</div>
							</form>
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
<script src="{{ asset('assets/manage/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.js') }}"></script>

{{-- <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script> --}}
<script src="{{ asset('assets/manage/plugins/ckeditor/ckeditor.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>

<script>
	//First upload
	var firstUpload = new FileUploadWithPreview('myFirstImage');

	CKEDITOR.replace('editor', {
		filebrowserUploadUrl: "{{route('manage.blog.upload.image', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form',
		height: "{{ isset($blog) ? 400 : '' }}",
	});

	$('#tags').tagsinput({
		allowDuplicates: false,
		// itemValue: 'id',  // this will be used to set id of tag
		// itemText: 'label' // this will be used to set text of tag
	});

	@if (isset($blog))
		@foreach ($blog->tags as $tag)
			$('#tags').tagsinput('add', '{{$tag->name}}');
		@endforeach
	@endif

	$('#menu-blog').addClass('active');
    $('#menu-blog a').attr('data-active','true');

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
	
	$('#saveBtn').click(function (e) {

        e.preventDefault();

        var formdata = new FormData();

        var fileInput = document.getElementById('thumbnail');
        if (fileInput.files[0]) {
			var file = fileInput.files[0];
            formdata.append('thumbnail', file);
		}

		var activated
		if ($("#checkbox-activated").is( ':checked' )) {
            activated = +$("#checkbox-activated").is( ':checked' );
        } else {
			activated = 0;
		}

        formdata.append('id', $("#user_id").val());
		formdata.append('title', $("#title").val());
		formdata.append('content', CKEDITOR.instances.editor.getData());
		formdata.append('tags', $("#tags").val());
		formdata.append('activated', activated);

        $.ajax({
            url: "{{ route('manage.blog.update') }}",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (data) {
                swal({
                    title: 'Success!',
                    text: 'Portfolio data has been updated.',
                    type: 'success',
                    padding: '2em',
                    timer: 3000
                }).then(function() {
                    window.location.href = "{{ route('manage.blog') }}"
                })
            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal({
                    title: 'Oops!',
                    text: xhr.responseText,
                    type: 'error',
                    padding: '2em',
                    // timer: 3000
                }).then(function() {
                    window.location.reload()
                })
            }
        });
	});
</script>
@endpush