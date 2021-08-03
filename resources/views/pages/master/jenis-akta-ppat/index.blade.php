@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Jenis Akta PPAT')

@push('css')
<!-- datatables -->
<link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
<link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" />
<!-- end datatables -->
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Master</a></li>
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Panel Master<small> @yield('title')</small></h1>
<!-- end page-header -->


<!-- begin panel -->
<div class="panel panel-inverse">
    <!-- begin panel-heading -->
    <div class="panel-heading">
        <h4 class="panel-title">DataTable - @yield('title')</h4>
        <div class="panel-heading-btn">
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
        </div>
    </div>
    <!-- end panel-heading -->
    <!-- begin panel-body -->
    <div class="panel-body">
        {{ $dataTable->table() }}
    </div>
    <!-- end panel-body -->
</div>
<!-- end panel -->
<div class="modal fade" role="dialog" id="createFormModal" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><span class="label label-inverse " id="createFormModalHeading"></span></h5>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="{{ route('master.jenis-akta-ppat.store') }}" id="createForm" name="createForm" method="POST">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="name">Nama @yield('title') : </label>
                        <input type="text" id="name" name="name" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</a>
                    <button id="btnSimpan" value="create" type="submit" class="btn btn-primary btn-sm">&nbsp;<i class="fa fa-save"></i>&nbsp;Simpan&nbsp;
                        &nbsp;</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- datatables -->
<script src="{{ asset('/assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/pdfmake/build/pdfmake.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/pdfmake/build/vfs_fonts.js') }}"></script>
<script src="{{ asset('/assets/plugins/jszip/dist/jszip.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-autofill/js/dataTables.autofill.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-autofill-bs4/js/autofill.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-colreorder/js/dataTables.colreorder.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-colreorder-bs4/js/colreorder.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-keytable/js/dataTables.keytable.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-keytable-bs4/js/keytable.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-rowreorder/js/dataTables.rowreorder.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-rowreorder-bs4/js/rowreorder.bootstrap4.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-select/js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('/assets/plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>
{{ $dataTable->scripts() }}
<!-- end datatables -->

<script src="{{ asset('assets/js/custom/ajax-form-handler.js') }}"></script>

<script>
    $(function() {
        //form submit event listener
        $(document)
            .on('createForm.success', function() {
                $('#createForm').trigger("reset");
                $('#createFormModal').modal('hide');
                $('.buttons-reload').trigger('click')
            })
            .on('createForm.error', function() {
                $('#btnSimpan').html('Save Changes');
            })
        //end submit event listener

        $('.buttons-create').click(function(e) {
            e.preventDefault();
            $('#id').val('');
            $('#createForm').trigger("reset");
            $('#createFormModalHeading').html("# Create Data");
            $('#createFormModal').modal('show');
        });

        $('.buttons-edit').on('click', function(e) {
            let id, url;
            id = $(this).closest('tr').prop('id');
            url = '{{ route("master.jenis-akta-ppat.edit", ":id") }}';
            url = url.replace(':id', id);
            $.get(url, function(data) {
                $('#createFormModalHeading').html("# Edit Data");
                $('#createFormModal').modal('show');
                $('#id').val(data.id);
                $('#name').val(data.name);
            })
        });

        $(document).on('click', '.buttons-delete', function(e) {
            e.preventDefault();
            let modal, url;
            modal = $('#deleteModal');
            url = $(e.target).closest('a').prop('href');

            modal.modal('show')
            $(modal).find('button#delete')
                .on('click', function() {
                    $.ajax({
                        method: 'DELETE',
                        url,
                        success: function() {
                            modal.modal('hide')
                            $('.buttons-reload').trigger('click')
                        }
                    })
                    $(this).off()
                });
        });
    });
</script>
@endpush