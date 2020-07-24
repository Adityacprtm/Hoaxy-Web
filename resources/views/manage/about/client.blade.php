@extends('manage.layouts.default')
@section('title', 'About Client Editor')

@push('css')
<!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/custom_dt_custom.css') }}">
<!-- END PAGE LEVEL CUSTOM STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('assets/manage/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME GLOBAL STYLES -->
{{-- <link href="{{ asset('assets/manage/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" /> --}}
{{-- <script src="{{ asset('assets/manage/plugins/sweetalerts/promise-polyfill.js') }}"></script> --}}
{{-- <link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" /> --}}
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
<!-- END THEME GLOBAL STYLES -->

<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/forms/theme-checkbox-radio.css') }}">
@endpush

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">

	<div class="layout-px-spacing">
		<div class="row layout-spacing">
			<div class="col-lg-12">
				<div class="statbox widget box box-shadow">
					<div class="widget-content widget-content-area mt-5">
						<div class="table-responsive mb-4">
							<table id="style-3" class="table style-3  table-hover">
								<button id="addUser" type="button" class="btn btn-primary mt-1 mb-1 ml-3 mr-3" data-toggle="modal" data-target="#exampleModal">
									Add Client
								</button>
								<thead>
									<tr>
										<th class="checkbox-column text-center"> ID </th>
										<th>Title</th>
										<th>Image</th>
										<th>URL</th>
										<th class="text-center">Status</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">File Upload</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg>
					</button>
				</div>
				<div class="modal-body">
					<form id="user-form" class="section general-info" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="user_id" id="user_id">
						<div class="widget-content widget-content-area">
							<div>
								<label for="client_title">Title Client</label>
								<input type="text" class="form-control mb-4" id="client_title" placeholder="Title">
							</div>
							<div>
								<label for="client_url">URL Client</label>
								<input type="text" class="form-control mb-4" id="client_url" placeholder="http://example.com">
							</div>
							<div class="custom-file-container" data-upload-id="myFirstImage">
								<label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
								<label class="custom-file-container__custom-file">
									<input type="file" id="client_image" class="custom-file-container__custom-file__custom-file-input" accept="image/*" data-max-file-size="2M">
									<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
									<span class="custom-file-container__custom-file__custom-file-control"></span>
								</label>
								<div class="custom-file-container__image-preview"></div>
							</div>
							<div>
								<label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
									<input id="checkbox-activated" type="checkbox" class="form-control new-control-input">
									<span class="new-control-indicator"></span> Activate
								</label>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
					<button type="submit" id="saveBtn" class="btn btn-primary" value="create">Uplaod</button>
				</div>
			</div>
		</div>
	</div>

	@include('manage.includes.footer')

</div>
<!--  END CONTENT AREA  -->
@endsection

@push('js')
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/manage/plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('assets/manage/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.js') }}"></script>

<script>
	//First upload
	var firstUpload = new FileUploadWithPreview('myFirstImage')
</script>
<!-- END PAGE LEVEL PLUGINS -->

<script>
	$('#menu-about').addClass('active');
    $('#menu-about a').attr('data-active','true');

	$("#exampleModal").on("hidden.bs.modal", function(){
        $(this).find("input").val('').end();
	});
	
	c3 = $('#style-3').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('manage.about.client') }}",
            "columns": [
                {data: 'id', name: 'id', className: "text-center"},
                {data: 'title', name: 'title'},
				{data: 'image', name: 'image'},
				{
					data: 'url', 
					name: 'url',
					render: function ( data, type, row ) {
                        return '<a target="_blank" href="'+data+'">'+data+'</a>';
                    }
				},
                {
					data: 'activated', 
					name: 'activated', 
					className: "text-center",
					render: function ( data, type, row ) {
                        var badge = (data) ? 'primary' : 'danger';
                        var text = (data) ? 'Active' : 'Not Active';
                        return '<span class="shadow-none badge badge-'+badge+'">'+text+'</span>';
                    }
				},
                {data: 'action', name: 'action', className: "text-center"},
            ],
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

	multiCheck(c3);

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
	
	$('body').on('click', '.editClient', function () {
        var data = c3.row( $(this).parents('tr') ).data();

        $('.modal-title').html("Edit Client");
        $('#saveBtn').html("Update");
        $('#exampleModal').modal('show');
        $('#user_id').val(data.id);
		$('#client_title').val(data.title);
		$('#client_url').val(data.url);

        // Approval
        if (data.activated) {
            $('#checkbox-activated').prop('checked', true);
        } else {
            $('#checkbox-activated').prop('checked', false);
        }
    });

	$('body').on('click', '.deleteClient', function () {
        var data = c3.row( $(this).parents('tr') ).data();
        var user_id = data.id;
        swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            padding: '2em'
        }).then(function(result) {
            if (result.value){
                $.ajax({
                    type: "post",
                    url: "{{ route('manage.about.client.delete') }}",
                    data: { id: user_id},
                    success: function (data) {
                        swal({
                            title: 'Deleted!',
                            text: 'Client has been deleted.',
                            type: 'success',
                            padding: '2em',
                            timer: 3000
                        }).then(function() {
                            c3.draw();
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
                            window.location.reload()
                        })
                    }
                });
            }
        })
	});
	
	$('#saveBtn').click(function (e) {
        e.preventDefault();

        var formdata = new FormData();

        var fileInput = document.getElementById('client_image');
        if (fileInput) {
			var file = fileInput.files[0];
            formdata.append('image', file);
		}
		
		var activated
		if ($("#checkbox-activated").is( ':checked' )) {
            activated = +$("#checkbox-activated").is( ':checked' );
        } else {
			activated = 0;
		}

        formdata.append('id', $("#user_id").val());
		formdata.append('title', $("#client_title").val());
		formdata.append('url', $("#client_url").val());
		formdata.append('activated', activated);

        $.ajax({
            url: "{{ route('manage.about.client.update') }}",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (data) {
                swal({
                    title: 'Success!',
                    text: 'Client data has been updated.',
                    type: 'success',
                    padding: '2em',
                    timer: 3000
                }).then(function() {
                    $('#user-form').trigger("reset");
                    $('#exampleModal').modal('hide');
                    c3.draw();
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
                    window.location.reload()
                })
            }
        });
	});
</script>
@endpush