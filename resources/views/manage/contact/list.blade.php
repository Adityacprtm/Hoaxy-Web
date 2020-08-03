@extends('manage.layouts.default')
@section('title', 'Contact List')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/custom_dt_custom.css') }}">
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
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
							<div class="table-responsive mb-4">
								<table id="style-3" class="table style-3  table-hover">
									<button id="addContact" type="button" class="btn btn-primary mt-1 mb-1 ml-3 mr-3" data-toggle="modal" data-target="#exampleModal">
										Add Category
									</button>
									<thead>
										<tr>
											<th class="checkbox-column text-center">ID</th>
											<th>Name</th>
											<th>Email</th>
											<th>Message</th>
											<th>Created At</th>
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
	<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg>
					</button>
				</div>
				<div class="modal-body">
					<form id="education-form" class="section general-info">
						@csrf
						<input type="hidden" name="user_id" id="user_id">
						<div class="widget-content widget-content-area">
							<div class="row mb-4">
								<div class="col">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" id="name">
								</div>
								<div class="col">
									<label for="email">Email</label>
									<input type="text" class="form-control" name="email" id="email">
								</div>
							</div>
							<div class="mb-4">
								<label for="message">Message</label>
								<textarea class="form-control" name="message" id="message" rows="10"></textarea>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
					<button type="submit" id="saveBtn" class="btn btn-primary" value="create">Save</button>
				</div>
			</div>
		</div>
	</div>

	@include('manage.includes.footer')

</div>

@endsection

@push('js')
<script src="{{ asset('assets/manage/plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script>
	$('#menu-contact').addClass('active');
	$('#menu-contact a').attr('data-active','true');

	$("#exampleModal").on("hidden.bs.modal", function(){
		$(this).find("input").val('').end();
	});

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});

	c3 = $('#style-3').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('manage.contact') }}",
            "columns": [
                {data: 'id', name: 'id', className: "text-center"},
				{data: 'name', name: 'name'},
				{data: 'email', name: 'email'},
				{data: 'message', name: 'message'},
				{data: 'created_at', name: 'created_at'},
                {data: 'action', name: 'action', className: "text-center"},
            ],
			"order": [[4, 'desc']],
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [7, 10, 20, 50],
            "pageLength": 7
        });

	multiCheck(c3);

	$('#addContact').click(function(){
		$('#saveBtn').html("Save");
	});

	$('body').on('click', '.editContact', function () {
        var data = c3.row( $(this).parents('tr') ).data();
        $('.modal-title').html("Edit Contact");
        $('#saveBtn').html("Update");
        $('#exampleModal').modal('show');
        $('#user_id').val(data.id);
		$('#name').val(data.name);
		$('#email').val(data.email);
		$('#message').val(data.message);
	});
	
	$('#saveBtn').click(function (e) {
        e.preventDefault();

        var formdata = new FormData();

        formdata.append('id', $("#user_id").val());
		formdata.append('name', $("#name").val());
		formdata.append('email', $("#email").val());
		formdata.append('message', $("#message").val());

        $.ajax({
            url: "{{ route('manage.contact.update') }}",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (data) {
                swal({
                    title: 'Success!',
                    text: 'Contact data has been updated.',
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

	$('body').on('click', '.deleteContact', function () {
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
                    url: "{{ route('manage.contact.delete') }}",
                    data: { id: user_id},
                    success: function (data) {
						console.log(data);
                        if (data.status == 'error') {
							swal({
								title: 'Oops!',
								text: data.message,
								type: 'error',
								padding: '2em',
								timer: 3000
							}).then(function() {
								c3.draw();
							})
						} else {
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
</script>
@endpush