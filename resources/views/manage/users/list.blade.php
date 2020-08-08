@extends('manage.layouts.default')
@section('title', 'Users List')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/custom_dt_custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/dropify/dropify.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/users/account-setting.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/forms/theme-checkbox-radio.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.css') }}" />
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" />
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

							@if (session('status'))
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								{!! session('status') !!}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							@endif

							<div class="table-responsive mb-4">
								<table id="style-3" class="table style-3  table-hover">
									<button id="addUser" type="button" class="btn btn-primary mt-1 mb-1 ml-3 mr-3" data-toggle="modal" data-target="#formModal">
										Add User
									</button>
									<thead>
										<tr>
											<th class="text-center">#</th>
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
	<div class="modal fade " id="formModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="formModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg>
					</button>
				</div>
				<div class="modal-body">
					<form id="user-form" class="section general-info" enctype="multipart/form-data">
						<input type="hidden" name="user_id" id="user_id">
						<div class="info">
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
															<label for="name">Full Name</label>
															<input type="text" class="form-control mb-4" id="name" placeholder="Full Name" required />
														</div>
													</div>
													<div class="col-sm-6">
														<label class="dob-input">Date of Birth</label>
														<div class="d-sm-flex d-block">
															<div class="form-group mr-1">
																<select class="form-control" id="day-select" required>
																	<option id="day" disabled selected>Day</option>
																	<option value="1">01</option>
																	<option value="2">02</option>
																	<option value="3">03</option>
																	<option value="4">04</option>
																	<option value="5">05</option>
																	<option value="6">06</option>
																	<option value="7">07</option>
																	<option value="8">08</option>
																	<option value="9">09</option>
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
																<select class="form-control" id="month-select" required>
																	<option id="month" disabled selected>Month</option>
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
																<select class="form-control" id="year-select" required>
																	<option id="year" disabled selected>Year</option>
																	<option value="2018">2018</option>
																	<option value="2017">2017</option>
																	<option value="2016">2016</option>
																	<option value="2015">2015</option>
																	<option value="2014">2014</option>
																	<option value="2013">2013</option>
																	<option value="2012">2012</option>
																	<option value="2011">2011</option>
																	<option value="2010">2010</option>
																	<option value="2009">2009</option>
																	<option value="2008">2008</option>
																	<option value="2007">2007</option>
																	<option value="2006">2006</option>
																	<option value="2005">2005</option>
																	<option value="2004">2004</option>
																	<option value="2003">2003</option>
																	<option value="2002">2002</option>
																	<option value="2001">2001</option>
																	<option value="2000">2000</option>
																	<option value="1999">1999</option>
																	<option value="1998">1998</option>
																	<option value="1997">1997</option>
																	<option value="1996">1996</option>
																	<option value="1995">1995</option>
																	<option value="1994">1994</option>
																	<option value="1993">1993</option>
																	<option value="1992">1992</option>
																	<option value="1991">1991</option>
																	<option value="1990">1990</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												<div class="form-group">
													<label for="email">Email</label>
													<input type="email" class="form-control mb-4" id="email" name="email" placeholder="Email" readonly required />
												</div>
												<div class="row">
													<div class="col-sm-6">
														<div class="form-group">
															<label for="role">Role</label>
															<select class="form-control mb-4" name="role" id="role-select" required>
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
<script src="{{ asset('assets/manage/plugins/dropify/dropify.min.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/blockui/jquery.blockUI.min.js') }}"></script>
<script src="{{ asset('assets/manage/assets/js/users/account-settings.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
<script>
	$('#menu-user').addClass('active');
    $('#menu-user a').attr('data-active','true');

    $("#formModal").on("hidden.bs.modal", function(){
		$(this).find("form")[0].reset();
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
                {
					data: 'avatar', 
					name: 'avatar', 
					className: "text-center",
					render: function (data,type,row) {
						return '<span><img src="' + data + '" class="profile-img" alt="avatar"></span>';
					}
				},
                {
					data: 'email_verified_at', 
					name: 'email_verified_at', 
					className: "text-center",
					render: function ( data, type, row ) {
                        var badge = (data) ? 'primary' : 'warning';
                        var text = (data) ? 'Yes' : 'No';
                        return '<span class="shadow-none badge badge-'+badge+'">'+text+'</span>';
                    }
				},
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
		$('#formModal').modal('show');
		$('.modal-title').html("Add User");
		$('#user_id').val('');
        $('#email').prop('readonly', false)
        $('#password-form').show();
        $('#user').prop('selected', true);
    });

    $('body').on('click', '.editUser', function () {
        var data = c3.row( $(this).parents('tr') ).data();
		$('#formModal').modal('show');
        $('.modal-title').html("Edit User");
        $('#saveBtn').html("Update");
		$('#password-form').hide();
        $('#user_id').val(data.id);
        $('#name').val(data.name);
		$('#email').val(data.email);
        
        if (data.approved_at) {
            $('#checkbox-approval').prop('checked', true);
        } else {
            $('#checkbox-approval').prop('checked', false);
        }

        if ((data.admin).toLowerCase() == "admin") {
            $('#admin').prop('selected', true);
        } else {
            $('#user').prop('selected', true);
        }

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
                    data: { id: user_id },
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


    $('#user-form').submit(function (e) {
        e.preventDefault();

        var dob = '';
        var approval = '';
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
        formdata.append('name', $("#name").val());
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