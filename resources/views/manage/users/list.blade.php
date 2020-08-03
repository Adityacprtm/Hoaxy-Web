@extends('manage.layouts.default')
@section('title', 'Users List')
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/forms/theme-checkbox-radio.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/custom_dt_custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/dropify/dropify.min.css') }}">
<link href="{{ asset('assets/manage/assets/css/users/account-setting.css" rel="stylesheet" type="text/css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/forms/theme-checkbox-radio.css') }}">
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
									<button id="addUser" type="button" class="btn btn-primary mt-1 mb-1 ml-3 mr-3" data-toggle="modal" data-target="#exampleModal">
										Add Info
									</button>
									<thead>
										<tr>
											<th class="checkbox-column text-center"> ID </th>
											<th>Name</th>
											<th>Email</th>
											<th>Birth of Date</th>
											<th>Admin</th>
											<th>Registered at</th>
											<th class="text-center">Image</th>
											<th class="text-center">Verified</th>
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
	</div>

	<!-- Modal -->
	<div class="modal fade " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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
						<div class="info">
							<h6 class="">General Information</h6>
							<div class="row">
								<div class="col-lg-11 mx-auto">
									<div class="row">
										<div class="col-xl-2 col-lg-12 col-md-4">
											<div class="upload mt-4 pr-md-4">
												<input type="file" id="input-file-max-fs" class="dropify" data-default-file="" data-max-file-size="2M" />
												<p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
											</div>
										</div>
										<div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
											<div class="form">
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="fullName">Full Name</label>
															<input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name">
														</div>
													</div>
													<div class="col-sm-6">
														<label class="dob-input">Date of Birth</label>
														<div class="d-sm-flex d-block">
															<div class="form-group mr-1">
																<select class="form-control" id="day-select">
																	<option id="day" disabled>Day</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
															</div>
															<div class="form-group mr-1">
																<select class="form-control" id="month-select">
																	<option value="month" disabled>Month</option>
																	<option value="1">January</option>
																	<option value="2">February</option>
																	<option value="3">March</option>
																	<option value="4">April</option>
																	<option value="5">May</option>
																	<option value="6">June</option>
																	<option value="7">July</option>
																	<option value="8">August</option>
																	<option value="9">September</option>
																	<option value="10">October</option>
																	<option value="11">November</option>
																	<option value="12">December</option>
																</select>
															</div>
															<div class="form-group mr-1">
																<select class="form-control" id="year-select">
																	<option id="year" disabled>Year</option>
																	<option id="year">2018</option>
																	<option id="year">2017</option>
																	<option id="year">2016</option>
																	<option id="year">2015</option>
																	<option id="year">2014</option>
																	<option id="year">2013</option>
																	<option id="year">2012</option>
																	<option id="year">2011</option>
																	<option id="year">2010</option>
																	<option id="year">2009</option>
																	<option id="year">2008</option>
																	<option id="year">2007</option>
																	<option id="year">2006</option>
																	<option id="year">2005</option>
																	<option id="year">2004</option>
																	<option id="year">2003</option>
																	<option id="year">2002</option>
																	<option id="year">2001</option>
																	<option id="year">2000</option>
																	<option id="year">1999</option>
																	<option id="year">1998</option>
																	<option id="year">1997</option>
																	<option id="year">1996</option>
																	<option id="year">1995</option>
																	<option id="year">1994</option>
																	<option id="year">1993</option>
																	<option id="year">1992</option>
																	<option id="year">1991</option>
																	<option id="year">1990</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="email">Email</label>
													<input type="email" class="form-control mb-4" id="email" placeholder="Email" readonly>
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="role">Role</label>
															<select class="form-control mb-4" name="role" id="role-select">
																<option id="admin" value="1">Admin</option>
																<option id="user" value="0">User</option>
															</select>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group n-chk mt-5">
															<label class="new-control new-checkbox new-checkbox-rounded checkbox-primary">
																<input id="checkbox-approval" type="checkbox" class="form-control new-control-input">
																<span class="new-control-indicator"></span> Approved
															</label>
														</div>
													</div>
												</div>
												<div id="password-form" class="form-group">
													<label for="password">Password</label>
													<input type="Password" class="form-control mb-4" id="password" placeholder="Password">
												</div>
											</div>
										</div>
									</div>
								</div>
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
<!--  END CONTENT AREA  -->
@endsection

@push('js')
<script src="{{ asset('assets/manage/plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/blockui/jquery.blockUI.min.js') }}"></script>
<script src="{{ asset('assets/manage/assets/js/users/account-settings.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
<script>
	$('#menu-user').addClass('active');
    $('#menu-user a').attr('data-active','true');

    $("#exampleModal").on("hidden.bs.modal", function(){
        $(this).find("input,textarea").val('').end();
    });

    c3 = $('#style-3').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('admin.manage.users') }}",
            "columns": [
                {data: 'id', name: 'id', className: "text-center"},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'birth_date', name: 'birth_date'},
                {data: 'admin', name: 'admin'},
                {data: 'created_at', name: 'created_at'},
                {data: 'avatar', name: 'avatar', className: "text-center"},
                {data: 'email_verified_at', name: 'email_verified_at', className: "text-center"},
                {
                    data: 'approved_at', 
                    name: 'approved_at', 
                    className: "text-center",
                    render: function ( data, type, row ) {
                        var badge = (data) ? 'primary' : 'warning';
                        var text = (data) ? 'Approved' : 'Waiting';
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

    $('#addUser').click(function () {
        $('#email').prop('readonly', false)
        $('#saveBtn').val("create-user");
        $('#user_id').val('');
        $('#user-form').trigger("reset");
        $('#password-form').show();
        $('.modal-title').html("Add User");
        $('#exampleModal').modal('show');
        $('#user').prop('selected', true);
    });

    $('body').on('click', '.editUser', function () {
        var data = c3.row( $(this).parents('tr') ).data();
        
        $('#password-form').hide();

        $('.modal-title').html("Edit User");
        $('#saveBtn').val("edit-user");
        $('#exampleModal').modal('show');
        $('#user_id').val(data.id);
        $('#fullName').val(data.name);
        $('#email').val(data.email);

        // Approval
        if (data.approved_at) {
            $('#checkbox-approval').prop('checked', true);
        } else {
            $('#checkbox-approval').prop('checked', false);
        }

        // Role / isAdmin
        if ((data.admin).toLowerCase() == "admin") {
            $('#admin').prop('selected', true);
        } else {
            $('#user').prop('selected', true);
        }

        // date of birth
        if ((data.birth_date).toLowerCase() != 'not available') {
            var date = (data['birth_date']).split(' ')
            $('#day-select option:contains("'+date[0]+'")').prop('selected',true);
            $('#month-select option:contains("'+date[1]+'")').prop('selected',true);
            $('#year-select option:contains("'+date[2]+'")').prop('selected',true);
        } else {
            $('#day').prop('selected', true);
            $('#month').prop('selected', true);
            $('#year').prop('selected', true);
        }
    });


    $('body').on('click', '.deleteUser', function () {
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
                    url: "{{ route('admin.manage.users.delete') }}",
                    data: { id: user_id},
                    success: function (data) {
                        swal({
                            title: 'Deleted!',
                            text: 'User has been deleted.',
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

        var dob
        var approval
        var formdata = new FormData();

        if (!isNaN($('#day-select option:selected').val()) && !isNaN($('#month-select option:selected').val()) && !isNaN($('#year-select option:selected').val())) {
            dob = $('#year-select option:selected').val() + '-' + $('#month-select option:selected').val() + '-' + $('#day-select option:selected').val()
        }

        if ($("#checkbox-approval").is( ':checked' )) {
            approval = +$("#checkbox-approval").is( ':checked' )
        }

        var fileInput = document.getElementById('input-file-max-fs');
        if (fileInput) {
			var file = fileInput.files[0];
            formdata.append('avatar', file);
        }

        if ($('#password').val()) {
            formdata.append('password', $('#password').val());
        }

        formdata.append('id',$("#user_id").val());
        formdata.append('name', $("#fullName").val());
        formdata.append('email', $("#email").val());
        formdata.append('admin', $('#role-select option:selected').val());
        formdata.append('birth_date', dob);
        formdata.append('approval', approval);

        $.ajax({
            url: "{{ route('admin.manage.users.update') }}",
            type: "POST",
            data: formdata,
            processData: false,
            contentType: false,
            success: function (data) {
                swal({
                    title: 'Success!',
                    text: 'User data has been updated.',
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
<!-- END PAGE LEVEL SCRIPTS -->
@endpush