@extends('manage.layouts.default')
@section('title', 'Journey Editor')

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/custom_dt_custom.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/editors/quill/quill.snow.css') }}">
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet"
	type="text/css" />
<link href="{{ asset('assets/manage/plugins/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
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
									<button id="addJourney" type="button" class="btn btn-primary mt-1 mb-1 ml-3 mr-3"
										data-toggle="modal" data-target="#formModal">
										Add Journey
									</button>
									<thead>
										<tr>
											<th class="checkbox-column text-center">ID</th>
											<th>Date</th>
											<th>Description</th>
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
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="formModalLabel">Add Journey</h5>
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
					<form id="journey-form" class="section general-info">
						<input type="hidden" name="journey_id" id="journey_id">
						<div class="widget-content widget-content-area">
							<div>
								<label>Date</label>
								<input id="basicFlatpickr" class="form-control mb-4" type="text" placeholder="Select Date.."
									required>
							</div>
							<div>
								<label>Description</label>
								<div id="content-container">
									<div id="toolbar-container">
										<button class="ql-bold" data-toggle="tooltip" data-placement="bottom"
											title="Bold"></button>
										<button class="ql-underline" data-toggle="tooltip" data-placement="bottom"
											title="Underline"></button>
										<button class="ql-italic" data-toggle="tooltip" data-placement="bottom"
											title="Add italic text <cmd+i>"></button>
										<button class="ql-link" data-toggle="tooltip" data-placement="bottom"
											title="Link"></button>
									</div>
									<div id="quill-tooltip"> </div>
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
<script src="{{ asset('assets/manage/plugins/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/editors/quill/quill.js') }}"></script>
<script>
	$('#menu-resume').addClass('active');
   $('#menu-resume a').attr('data-active','true');

	var f1 = flatpickr("#basicFlatpickr", {});

	var quill = new Quill("#quill-tooltip", {
		modules: {
			toolbar: "#toolbar-container"
		},
		placeholder: "Compose an epic...",
		theme: "snow"
	});
	$('[data-toggle="tooltip"]').tooltip();

	$("#formModal").on("hidden.bs.modal", function(){
		$(this).find("form")[0].reset();
		quill.setContents([]);
		f1.clear();
	});
	

	$.ajaxSetup({
      headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
	});

	c3 = $('#style-3').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": "{{ route('manage.journey') }}",
            "columns": [
               {data: 'id', name: 'id', className: "text-center"},
					{data: 'date', name: 'date'},
					{data: 'description', name: 'description'},
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
            "lengthMenu": [10, 20, 50, 100],
            "pageLength": 10
      });

	multiCheck(c3);

	$('body').on('click', '.editJourney', function () {
      var data = c3.row( $(this).parents('tr') ).data();
		$('#formModal').modal('show');
      $('.modal-title').html("Edit Journey");
      $('#saveBtn').html("Update");
      $('#journey_id').val(data.id);
		var textArea = document.createElement('textarea');
		textArea.innerHTML = data.description;
		quill.clipboard.dangerouslyPasteHTML(textArea.value);
		f1.setDate(data.date);
   });

	$('#journey-form').submit(function (e) {
      e.preventDefault();

		var formdata = new FormData();
		
		var myEditor = document.querySelector("#quill-tooltip");
		var contentText = myEditor.children[0].innerHTML;

		var date = f1.formatDate(f1.selectedDates[0],'Y-m-d');

      formdata.append('id', $("#journey_id").val());
		formdata.append('date', date);
		formdata.append('description', contentText);
		
		$.ajax({
            url: "{{ route('manage.journey.update') }}",
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

	$('body').on('click', '.deleteJourney', function () {
      var data = c3.row( $(this).parents('tr') ).data();
      var journey_id = data.id;
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
                    url: "{{ route('manage.journey.delete') }}",
                    data: { id: journey_id},
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
</script>
@endpush