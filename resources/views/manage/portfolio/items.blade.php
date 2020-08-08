@extends('manage.layouts.default')
@section('title', 'Portfolio Editor')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/custom_dt_custom.css') }}">
<link href="{{ asset('assets/manage/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
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
									<button id="addPortfolio" type="button" class="btn btn-primary mt-1 mb-1 ml-3 mr-3" data-toggle="modal" data-target="#formModal">
										Add Portfolio
									</button>
									<thead>
										<tr>
											<th class="checkbox-column text-center"> ID </th>
											<th>Category</th>
											<th>Title</th>
											<th>Media</th>
											<th>Link</th>
											<th>Text Link</th>
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
					<h5 class="modal-title" id="formModalLabel">Add Portfolio</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg>
					</button>
				</div>
				<div class="modal-body">
					<form id="portfolio-form" class="section general-info" enctype="multipart/form-data">
						<input type="hidden" name="portfolio_id" id="portfolio_id">
						<div class="widget-content widget-content-area">
							<div class="row mb-4">
								<div class="col">
									<label for="category">Category</label>
									<select class="form-control" name="category" id="category" disabled required>
										<option selected disabled>-Select-</option>
									</select>
								</div>
								<div class="col">
									<div class="mb-4">
										<label for="title">Title</label>
										<input type="text" class="form-control" id="title" placeholder="Title" required>
									</div>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col">
									<label for="link">Link <span class="badge badge-warning">Optional</span></label>
									<input type="text" class="form-control" id="link" placeholder="http://example.com">
								</div>
								<div class="col">
									<label for="text_link">Text Link <span class="badge badge-warning">Optional</span></label>
									<input type="text" class="form-control" id="text_link" placeholder="text link">
								</div>

							</div>
							<div class="custom-file-container" data-upload-id="myFirstImage">
								<label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
								<label class="custom-file-container__custom-file">
									<input type="file" id="media" class="custom-file-container__custom-file__custom-file-input" accept="image/*" data-max-file-size="2M" required>
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
	$('#menu-portfolio').addClass('active');
	$('#menu-portfolio a').attr('data-active','true');
	
	var firstUpload = new FileUploadWithPreview('myFirstImage')

	$("#formModal").on("hidden.bs.modal", function(){
        $(this).find("form")[0].reset();
		$('#category').empty().append('<option selected disabled>-Select-</option>');
		$('#media').val('');
	});

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});
	
	c3 = $('#style-3').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('manage.portfolio.index') }}",
            "columns": [
                {data: 'id', name: 'id', className: "text-center"},
				{data: 'category_name', name: 'category_name'},
                {data: 'title', name: 'title'},
				{data: 'media', name: 'media'},
				{
					data: 'link', 
					name: 'link',
					render: function ( data, type, row ) {
						if (data == null) {
							data = '#';
						}
                        return '<a target="_blank" href="'+data+'">'+data+'</a>';
                    }
				},
				{data: 'text_link', name: 'text_link'},
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

	$('#addPortfolio').click(function(){
		getAjaxCategory();
		$('#portfolio_id').val('');
	});
	
	$('body').on('click', '.editPortfolio', function () {
        var data = c3.row( $(this).parents('tr') ).data();
		$('#formModal').modal('show');
        $('.modal-title').html("Edit Portfolio");
        $('#saveBtn').html("Update");
        $('#portfolio_id').val(data.id);
		$('#title').val(data.title);
		$('#link').val(data.link);
		$('#text_link').val(data.text_link);
		$('#media').prop('required', false);
		getAjaxCategory(data.category_name);
    });

	$('body').on('click', '.deletePortfolio', function () {
        var data = c3.row( $(this).parents('tr') ).data();
        var portfolio_id = data.id;
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
                    url: "{{ route('manage.portfolio.delete') }}",
                    data: { id: portfolio_id},
                    success: function (data) {
                        swal({
                            title: 'Deleted!',
                            text: 'Portfolio has been deleted.',
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
	
	$('#portfolio-form').submit(function (e) {
        e.preventDefault();

        var formdata = new FormData();

        var fileInput = document.getElementById('media');
        if (fileInput) {
			var file = fileInput.files[0];
            formdata.append('media', file);
		}

        formdata.append('id', $("#portfolio_id").val());
		formdata.append('title', $("#title").val());
		formdata.append('link', $("#link").val());
		formdata.append('text_link', $("#text_link").val());
		formdata.append('category_id', $('#category option:selected').val());

        $.ajax({
            url: "{{ route('manage.portfolio.update') }}",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (data) {
				if (data.status == success) {
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

	function getAjaxCategory(selected) {
		$.ajax({
			type: "get",
			url: "{{ route('manage.portfolio.category.get') }}",
			success: function (data) {
				$('#category').attr('disabled', false);
				data = JSON.parse(data);
				data.forEach(element => {
					if (element.category_name == selected) {
						$("#category").append('<option value="' + element.id + '" selected>' + element.category_name + '</option>');		
					} else {
						$("#category").append('<option value="' + element.id + '">' + element.category_name + '</option>');	
					}
				});      	
			},
			error: function (xhr, ajaxOptions, thrownError) {
				alert('gagal');
			}
		});
	}
</script>
@endpush