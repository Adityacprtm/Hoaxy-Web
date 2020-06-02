@extends('manage.layouts.default')
@section('title', 'Info')

@push('css')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/datatables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/dt-global_style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/assets/css/forms/theme-checkbox-radio.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/manage/plugins/table/datatable/custom_dt_custom.css')}}">
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="{{ asset('assets/manage/plugins/animate/animate.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL PLUGINS -->

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{ asset('assets/manage/assets/css/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/assets/css/components/custom-modal.css') }}" rel="stylesheet" type="text/css" />
<!--  END CUSTOM STYLE FILE  -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{ asset('assets/manage/plugins/file-upload/file-upload-with-preview.min.css') }}" rel="stylesheet" type="text/css" />
<!-- END PAGE LEVEL STYLES -->

<script src="{{ asset('assets/manage/plugins/sweetalerts/promise-polyfill.js') }}"></script>
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/plugins/sweetalerts/sweetalert.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/manage/assets/css/components/custom-sweetalert.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-4">
                            <div class="text-right">
                                <button id="btnAdd" type="button" class="btn btn-primary mt-1 mb-1 ml-3 mr-3" data-toggle="modal" data-target="#exampleModal">
                                    Add Info
                                </button>
                            </div>
                            <table id="style-3" class="table style-3 table-hover">
                                <thead>
                                    <tr>
                                        <th class="checkbox-column text-center"> No </th>
                                        <th>Key</th>
                                        <th>Value</th>
                                        <th class="text-center">Type</th>
                                        <th>Updated</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($info as $info)
                                    <tr>
                                        <td class="checkbox-column text-center"> {{ $loop->iteration }} </td>
                                        <td>{{ $info->key }}</td>
                                        @if ($info->tipe == 1)
                                        <td><span><img src="{{ asset($info->value) }}" class="profile-img" alt="avatar"></span></td>
                                        @else
                                        <td>{{ $info->value }}</td>
                                        @endif
                                        <td class="text-center">{{ ($info->tipe == 1) ? 'Image' : 'Text' }}</td>
                                        <td>{{ date( 'd-m-Y H:i', strtotime($info->updated_at) ) }}</td>
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <li>
                                                    <a href="javascript:void(0);" class="bs-tooltip editInfo" data-id="{{ $info->id }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 p-1 br-6 mb-1">
                                                            <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    {{-- <a onclick="hapus({{ $info->id }})" class="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    </svg>
                                                    </a>
                                                    <form id="deleteInfo{{ $info->id }}" action="{{ route('delete.manage.info') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{ $info->id }}">
                                                    </form> --}}
                                                    <a href="javascript:void(0);" class="bs-tooltip deleteInfo" data-id="{{ $info->id }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash p-1 br-6 mb-1">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <form action="{{ isset($singleInfo) ? route('save.manage.info') : route('add.manage.info') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="hidden" name="infoId" id="infoId">
                        <div class="form-group row mb-4">
                            <div class="col-sm-2">Image</div>
                            <div class="col-sm-10">
                                <div class="form-check pl-0">
                                    <div class="custom-control custom-checkbox checkbox-info">
                                        <input name="checkboxImage" type="checkbox" class="custom-control-input" id="checkboxImage">
                                        <label class="custom-control-label" for="checkboxImage"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="infoKey" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Key</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <input name="infoKey" type="text" class="form-control" id="infoKey" placeholder="">
                            </div>
                        </div>

                        <div id="value-text" class="form-group row mb-4">
                            <label for="infoText" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Value</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                {{-- <input name="infoText" type="text" class="form-control" id="infoText" placeholder=""> --}}
                                <textarea name="infoText" id="infoText" class="form-control" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div id="value-image" class="form-group row mb-4">
                            <label for="infoImage" class="col-xl-2 col-sm-3 col-sm-2 col-form-label">Value</label>
                            <div class="col-xl-10 col-lg-9 col-sm-10">
                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                    <label class="custom-file-container__custom-file">
                                        <input name="infoImage" id="infoImage" type="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                    </label>
                                    <div class="custom-file-container__image-preview"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button id="btnDiscard" class="btn btnDiscard" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Discard</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg></p>
        </div>
    </div>

</div>
<!--  END CONTENT AREA  -->
@endsection

@push('js')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/manage/plugins/table/datatable/datatables.js') }}"></script>
<script src="{{ asset('assets/manage/assets/js/scrollspyNav.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/file-upload/file-upload-with-preview.min.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/manage/plugins/sweetalerts/custom-sweetalert.js') }}"></script>
<script>
    $("#exampleModal").on("hidden.bs.modal", function(){
        // $('#infoKey').attr('readonly', false);;
        $(this).find("input,textarea").val('').end();
    });

    // active or not
    $('#menu-info').addClass('active');
    $('#menu-info a').attr('data-active','true');

    // Modal text or image
    $('#value-image').hide()
    $("#checkboxImage").change(function() {
        // console.log($('#checkboxImage').is(":checked"))
        if ($('#checkboxImage').is(":checked")) {
            $('#value-text').hide()
            $('#value-image').show()
        } else {
            $('#value-text').show()
            $('#value-image').hide()
        }
    });

    var firstUpload = new FileUploadWithPreview('myFirstImage')

    c3 = $('#style-3').DataTable({
        "oLanguage": {
            "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            "sInfo": "Showing page _PAGE_ of _PAGES_",
            "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            "sSearchPlaceholder": "Search...",
            "sLengthMenu": "Results :  _MENU_",
        },
        "columnDefs": [
    { "width": "20%", "targets": 2 }
  ],
        "stripeClasses": [],
        "lengthMenu": [5, 10, 20, 50],
        "pageLength": 5,
        // "processing": true,
        // "serverSide": true,
        // "ajax": "{{ route('manage.info') }}",
        // "columns": [
        //     {data: 'DT_RowIndex', name: 'DT_RowIndex'},
        //     {data: 'key', name: 'key'},
        //     {data: 'value', name: 'value'},
        //     {data: 'tipe', name: 'type'},
        //     {data: 'updated_at', name: 'updated_at'},
        //     {data: 'action', name: 'action', orderable: false, searchable: false},
        // ]
    });
    multiCheck(c3);

    $.ajaxSetup({
        headers: { "X-CSRF-Token" : $("meta[name=csrf-token]").attr("content") }
    });

    $('body').on('click', '.editInfo', function () {
        var info_id = $(this).data("id");
        $.get("info/edit/" + info_id, function(data) {
            clear_value('exampleModal');
            $('#exampleModal').modal('show');
            // $('#infoKey').attr('readonly', true);;
            if (data.tipe == 1) {
                $('#checkboxImage').prop('checked', true);
                $('#value-text').hide()
                $('#value-image').show()
                $('#infoKey').val(data.key);
                // $('#infoImage').val(data.value)
            } else {
                $('#checkboxImage').prop('checked', false);
                $('#value-text').show()
                $('#value-image').hide()
                $('#infoKey').val(data.key);
                $('#infoText').val(data.value)
            }
        })
    })

    // Delete datatables row
    $('body').on('click', '.deleteInfo', function () {
        var info_id = $(this).data("id");
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
                    url: "{{ route('delete.manage.info') }}",
                    data: {
                        id: info_id
                    },
                    success: function (data) {
                        swal({
                            title: 'Deleted!',
                            text: 'Your file has been deleted.',
                            type: 'success',
                            padding: '2em'
                        }).then(function() {
                            window.location.reload()
                        })
                    },
                    error: function (data) {
                        swal({
                            title: 'Oops!',
                            text: data,
                            type: 'error',
                            padding: '2em'
                        }).then(function() {
                            window.location.reload()
                        })
                    }
                });
            }
        })
    });

    function clear_value(modal)
    {
        var ele = $('#'+modal+' .form-clear');
        for (var i = 0; i < ele.length; i++) {
            $(ele[i]).val('');
        }
    }

</script>
<!-- END PAGE LEVEL SCRIPTS -->
@endpush