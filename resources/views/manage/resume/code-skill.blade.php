@extends('manage.layouts.default')
@section('title', 'Resume Code Skills Editor')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/custom_dt_custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/forms/switches.css') }}">
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
<style>
	datalist {
		width: 130%;
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
	}

	datalist option {
		-webkit-box-flex: 1;
		-webkit-flex-grow: 1;
		-ms-flex-positive: 1;
		flex-grow: 1;
		-webkit-flex-basis: 0;
		-ms-flex-preferred-size: 0;
		flex-basis: 0;
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
							<div class="table-responsive mb-4">
								<table id="style-3" class="table style-3  table-hover">
									<button id="addCodeSkill" type="button" class="btn btn-primary mt-1 mb-1 ml-3 mr-3" data-toggle="modal" data-target="#exampleModal">
										Add Code Skill
									</button>
									<thead>
										<tr>
											<th class="checkbox-column text-center">ID</th>
											<th>Name</th>
											<th>Level</th>
											<th>Status</th>
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
					<h5 class="modal-title" id="exampleModalLabel">Add Code Skill</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg>
					</button>
				</div>
				<div class="modal-body">
					<form id="code-skill-form" class="section general-info">
						@csrf
						<input type="hidden" name="user_id" id="user_id">
						<div class="widget-content widget-content-area">
							<div class="mb-4">
								<label for="title">Code Skill Name</label>
								<input type="text" class="form-control" name="title" id="title" placeholder="Skill name" required>
							</div>
							<div class="mb-4">
								<label for="level">level</label>
								<input type="range" class="form-control " min="1" max="3" value="1" step="1" id="level" list="scale" required>
								<datalist id="scale">
									{{-- <option value="0" label="none"></option> --}}
									<option value="1" label="Beginner"></option>
									<option value="2" label="Intermediate"></option>
									<option value="3" label="Expert"></option>
								</datalist>
							</div>
							<div class="row mb-4">
								<div class="col-2">
									<label for="checkbox-activated">Activate</label>
								</div>
								<div class="col-10">
									<label class="switch s-icons s-outline s-outline-primary mr-2">
										<input id="checkbox-activated" type="checkbox">
										<span class="slider"></span>
									</label>
								</div>
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
<script src="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script>
	$('#menu-resume').addClass('active');
	$('#menu-resume a').attr('data-active','true');
	
	$("#exampleModal").on("hidden.bs.modal", function(){
		// $(this).find("input").val('').end();
		// $('#level').val('0');
		// $('#checkbox-activated').prop('checked', false);
		$(this).find("form")[0].reset();
	});

	$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
	});

	c3 = $('#style-3').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('manage.resume.codeskill') }}",
            "columns": [
                {data: 'id', name: 'id', className: "text-center"},
                {data: 'title', name: 'title'},
				{
					data: 'level', 
					name: 'level',
					render: function ( data, type, row ) {
						if (data == 1) {
							data = 'beginner';
						} else if (data == 2) {
							data = 'Intermediate'
						} else if (data == 3) {
							data = 'Expert'
					 	} else {
							 data = 'Not Available'
						 }
                        return '<span class="shadow-none badge badge-primary">'+data+'</span>';
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
			"order": [[1, 'asc']],
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

	$('body').on('click', '.editCodeSkill', function () {
        var data = c3.row( $(this).parents('tr') ).data();
        $('.modal-title').html("Edit Skill");
        $('#saveBtn').html("Update");
        $('#exampleModal').modal('show');
        $('#user_id').val(data.id);
		$('#title').val(data.title)
		$('#level').val(data.level);

		if (data.activated) {
            $('#checkbox-activated').prop('checked', true);
        } else {
            $('#checkbox-activated').prop('checked', false);
        }
	});
	
	$('#code-skill-form').submit(function (e) {
        e.preventDefault();

        var formdata = new FormData();

		var activated
		if ($("#checkbox-activated").is( ':checked' )) {
            activated = +$("#checkbox-activated").is( ':checked' );
        } else {
			activated = 0;
		}

		formdata.append('id', $("#user_id").val());
		formdata.append('title', $("#title").val());
		formdata.append('level', $("#level").val());
		formdata.append('activated', activated);

        $.ajax({
            url: "{{ route('manage.resume.codeskill.update') }}",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (data) {
                swal({
                    title: 'Success!',
                    text: 'Skill data has been updated.',
                    type: 'success',
                    padding: '2em',
                    // timer: 3000
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
                    // timer: 3000
                }).then(function() {
                    window.location.reload()
                })
            }
        });
	});

	$('body').on('click', '.deleteCodeSkill', function () {
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
                    url: "{{ route('manage.resume.codeskill.delete') }}",
                    data: { id: user_id},
                    success: function (data) {
                        swal({
                            title: 'Deleted!',
                            text: 'Experience has been deleted.',
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
</script>
@endpush