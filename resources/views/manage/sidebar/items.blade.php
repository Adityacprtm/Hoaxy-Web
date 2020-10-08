@extends('manage.layouts.default')
@section('title', 'Sidebar Editor')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/custom_dt_custom.css') }}">
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet"
	type="text/css" />
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
									<button id="addSidebar" type="button" class="btn btn-primary mt-1 mb-1 ml-3 mr-3"
										data-toggle="modal" data-target="#formModal">
										Add Sidebar
									</button>
									<thead>
										<tr>
											<th class="checkbox-column text-center"> ID </th>
											<th>Category</th>
											<th>Title</th>
											<th>Link</th>
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
	<div class="modal fade " id="formModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
		aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="formModalLabel">Add Sidebar</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
							fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
							class="feather feather-x">
							<line x1="18" y1="6" x2="6" y2="18"></line>
							<line x1="6" y1="6" x2="18" y2="18"></line>
						</svg>
					</button>
				</div>
				<div class="modal-body">
					<form id="sidebar-form" class="section general-info">
						<input type="hidden" name="sidebar_id" id="sidebar_id">
						<div class="widget-content widget-content-area">
							<div class="row mb-4">
								<div class="col">
									<label for="category_sidebar">Category</label>
									<select class="form-control" name="category" id="category_sidebar" disabled required>
										<option selected disabled>-Select-</option>
									</select>
								</div>
							</div>
							<div class="row mb-4">
								<div class="col">
									<label for="title">Title</label>
									<input type="text" class="form-control" id="title" placeholder="text link" required>
								</div>
								<div class="col">
									<label for="link">Link</label>
									<input type="text" class="form-control" id="link" placeholder="https:// or /" required>
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
	$('#menu-sidebar').addClass('active');
	$('#menu-sidebar a').attr('data-active','true');


	$("#formModal").on("hidden.bs.modal", function(){
      $(this).find("form")[0].reset();
		$('#category_sidebar').empty().append('<option selected disabled>-Select-</option>');
	});

	$.ajaxSetup({
      headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
	});

	c3 = $('#style-3').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('manage.sidebar.index') }}",
            "columns": [
					{data: 'id', name: 'id', className: "text-center"},
					{data: 'category_sidebar_name', name: 'category_sidebar_name'},
					{data: 'title', name: 'title'},
					{
						data: 'link',
						name: 'link',
						render: function ( data, type, row ) {
							return (data == null) ? "-NA-" : '<a target="_blank" href="'+data+'">'+data+'</a>';
                  }
					},
					{data: 'action', name: 'action', className: "text-center"},
				],
				"order": [[1, 'desc']],
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

	$('#addSidebar').click(function(){
		getAjaxCategory();
		$('#sidebar_id').val('');
	});

	$('body').on('click', '.editSidebar', function () {
		var data = c3.row( $(this).parents('tr') ).data();
		$('#formModal').modal('show');
      $('.modal-title').html("Edit Sidebar");
      $('#saveBtn').html("Update");
      $('#sidebar_id').val(data.id);
		$('#title').val(data.title);
		$('#link').val(data.link);
		getAjaxCategory(data.category_sidebar_name);
   });

	$('body').on('click', '.deleteSidebar', function () {
      var data = c3.row( $(this).parents('tr') ).data();
      var sidebar_id = data.id;
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
                  url: "{{ route('manage.sidebar.delete') }}",
                  data: { id: sidebar_id},
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
							})
							.then(function() {
                        window.location.reload()
                     })
                  }
					});
				}
      })
	});

	$('#sidebar-form').submit(function (e) {
      e.preventDefault();

		var formdata = new FormData();
		var link = $("#link").val();
		
		if (!link.includes("https://") && !link.includes("http://")) {
			link = "https://adityacprtm.com" + $("#link").val();
		}

      formdata.append('id', $("#sidebar_id").val());
		formdata.append('title', $("#title").val());
		formdata.append('link', link);
		formdata.append('category_sidebar_id', $('#category_sidebar option:selected').val());

      $.ajax({
            url: "{{ route('manage.sidebar.update') }}",
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

	function getAjaxCategory(selected) {
		$.ajax({
			type: "get",
			url: "{{ route('manage.sidebar.category.get') }}",
			success: function (data) {
				$('#category_sidebar').attr('disabled', false);
				data = JSON.parse(data);
				data.forEach(element => {
					if (element.category_sidebar_name == selected) {
						$("#category_sidebar").append('<option value="' + element.id + '" selected>' + element.category_sidebar_name + '</option>');
					} else {
						$("#category_sidebar").append('<option value="' + element.id + '">' + element.category_sidebar_name + '</option>');
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