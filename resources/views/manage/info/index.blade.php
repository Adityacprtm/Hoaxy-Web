@extends('manage.layouts.default')
@section('title', 'Personal Info Editor')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/custom_dt_custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/file-upload/file-upload-with-preview.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/forms/theme-checkbox-radio.css') }}">
@endpush

@section('content')
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
							<div class="table-responsive mb-4">
								<table id="style-3" class="table style-3  table-hover">
									<button id="addInfo" type="button" class="btn btn-primary mt-1 mb-1 ml-3 mr-3" data-toggle="modal" data-target="#formModal">
										Add Info
									</button>
									<thead>
										<tr>
											<th class="checkbox-column text-center"> ID </th>
											<th>Type</th>
											<th>Key</th>
											<th>Value</th>
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
	</div>

	<!-- Modal -->
	<div class="modal fade " id="formModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="formModalLabel">Modal Title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg>
					</button>
				</div>
				<div class="modal-body">
					<form id="info-form" class="section general-info" enctype="multipart/form-data">
						<input type="hidden" name="info_id" id="info_id">
						<div class="widget-content widget-content-area">
							<div class="mb-4">
								<label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
									<input id="checkbox-image" type="checkbox" class="form-control new-control-input">
									<span class="new-control-indicator"></span> Image Type
								</label>
							</div>
							<div class="mb-4">
								<label for="key">Key</label>
								<input type="text" class="form-control" id="key" placeholder="Key" required>
							</div>
							<div class="mb-4" id="div_value_text">
								<label for="value_text">Value text</label>
								<input type="text" class="form-control" id="value_text" placeholder="Link or Text" required>
							</div>
							<div class="custom-file-container" data-upload-id="myFirstImage" id="div_value_image">
								<label>Value Image <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
								<label class="custom-file-container__custom-file">
									<input type="file" id="value_image" class="custom-file-container__custom-file__custom-file-input" accept="image/*" data-max-file-size="2M" required>
									<input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
									<span class="custom-file-container__custom-file__custom-file-control"></span>
								</label>
								<div class="custom-file-container__image-preview"></div>
							</div>
						</div>
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal">Discard</button>
							<button type="submit" id="saveBtn" class="btn btn-primary">Save</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	@include('manage.includes.footer')

</div>
@endsection

@push('js')
<script src="{{ asset('assets/manage/plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script>
	$('#menu-info').addClass('active');
    $('#menu-info a').attr('data-active','true');
	$('#div_value_image').hide();

	var firstUpload = new FileUploadWithPreview('myFirstImage')

	$("#formModal").on("hidden.bs.modal", function(){
		$(this).find("form")[0].reset();
		$('#div_value_text').show();
		$('#div_value_image').hide();
	});
	
	c3 = $('#style-3').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('manage.info') }}",
            "columns": [
                {data: 'id', name: 'id', className: "text-center"},
                {
					data: 'type', 
					name: 'type', 
					className: "text-center",
					render: function (data,type,row) {
						return (data == 1) ? 'IMAGE' : 'TEXT';
					}
				},
				{data: 'key', name: 'key'},
				{data: 'value', name: 'value'},
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

	$('#checkbox-image').change(function() {
		if ($("#checkbox-image").is( ':checked' )) {
			$('#div_value_text').hide();
			$('#value_text').prop('required', false);
			$('#div_value_image').show();
		} else {
			$('#div_value_text').show();
			$('#div_value_image').hide();
			$('#value_image').prop('required', false);
		}
	})
	
	$('body').on('click', '.editInfo', function () {
        var data = c3.row( $(this).parents('tr') ).data();

        $('.modal-title').html("Edit Client");
        $('#saveBtn').html("Update");
        $('#formModal').modal('show');
        $('#info_id').val(data.id);
		$('#key').val(data.key);

        if (data.type == 1) {
			$('#checkbox-image').prop('checked', true);
			$('#value_text').prop('required', false);
			$('#div_value_text').hide();
			$('#div_value_image').show();
        } else {
			$('#checkbox-image').prop('checked', false);
			$('#value_image').prop('required', false);
			$('#value_text').val(data.value);
        }
    });

	$('body').on('click', '.deleteInfo', function () {
        var data = c3.row( $(this).parents('tr') ).data();
        var info_id = data.id;
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
                    url: "{{ route('manage.info.delete') }}",
                    data: { id: info_id},
                    success: function (data) {
						if (data.status == 'success') {
							swal({
								title: 'Deleted!',
								text: data.message,
								type: 'success',
								padding: '2em',
								timer: 3000
							}).then(function() {
								c3.draw();
							})
						}
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
	
	$('#info-form').submit(function (e) {
        e.preventDefault();

        var formdata = new FormData();

		formdata.append('id', $("#info_id").val());
		formdata.append('key', $("#key").val());

		if ($("#checkbox-image").is( ':checked' )) {
			var fileInput = document.getElementById('value_image');
			if (fileInput) {
				var file = fileInput.files[0];
				formdata.append('value_image', file);
				formdata.append('type', 1);
			}
		} else {
			formdata.append('value_text', $("#value_text").val());
			formdata.append('type', 0);
		}

        $.ajax({
            url: "{{ route('manage.info.update') }}",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (data) {
				if (data.status == 'success') {
					swal({
						title: 'Success!',
						text: data.message,
						type: 'success',
						padding: '2em',
						timer: 3000
					}).then(function() {
						$('#formModal').modal('hide');
						c3.draw();
					})
				} else {
					swal({
						title: 'Oops!',
						text: data.message,
						type: 'error',
						padding: '2em',
						timer: 3000
					}).then(function() {
						window.location.reload()
					})
				}
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