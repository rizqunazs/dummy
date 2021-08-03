@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Estimasi')

    @push('css')
        <!-- datatables -->
        <link href="{{ asset('/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
        <link href="{{ asset('/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}"
            rel="stylesheet" />
        <link href="{{ asset('/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}"
            rel="stylesheet" />
        <!-- end datatables -->

        {{-- <style>
            table thead th:first-child {
                width: 1%;
            }

            table thead th:nth-child(2) {
                width: 20%;
            }

            table thead th:nth-child(3) {
                width: 40%;
            }

            table thead th:nth-child(4) {
                width: 15%;
            }

            table thead th:last-child {
                width: 5%;
            }

        </style> --}}
    @endpush

@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Master</a></li>
        <li class="breadcrumb-item ">@yield('title')</li>
        <li class="breadcrumb-item active"><a href="#" id="createNew" class="text-white btn btn-sm btn-primary m-b-10"><i
                    class="fa fa-plus-circle "></i>&nbsp;Add Data</a></li>
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
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i
                        class="fa fa-expand"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i
                        class="fa fa-redo"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i
                        class="fa fa-minus"></i></a>
                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i
                        class="fa fa-times"></i></a>
            </div>
        </div>
        <!-- end panel-heading -->
        <!-- begin panel-body -->
        <div class="panel-body">
            <table id="data-table" style="width:100%"
                class="table table-striped table-bordered table-td-valign-middle data-table">
                <thead>
                    <tr>
                        <th width="1%"></th>
                        <th class="text-nowrap">Jenis Estimasi</th>
                        <th class="text-nowrap">Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <!-- end panel-body -->
    </div>
    <!-- end panel -->
    <div class="modal fade" role="dialog" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><span class="label label-inverse " id="modelHeading"></span></h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form id="dataForm" name="dataForm" method="POST">
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
                        <button id="btnSimpan" value="create" type="submit" class="btn btn-primary btn-sm">&nbsp;<i
                                class="fa fa-save"></i>&nbsp;Simpan&nbsp;
                            &nbsp;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- //delete --}}


    <div class="modal fade" id="hapusdata" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-md" role="document">

            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><span class="label label-inverse"> # Delete Data</span></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <h5>Anda yakin akan menghapus data ini ??</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input type="hidden" id="token" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" name="btn_hapus" id="btn_hapus" class="btn btn-danger"><i
                            class="fas fa-trash-alt"></i> Hapus</button>
                </div>
            </div>

        </div>
    </div>

@endsection

@push('scripts')
    <script src="{{ asset('/assets/plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var table = $('.data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "/estimasi",
                cache: false,
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            });

            $('#createNew').click(function() {
                $('#btnSimpan').val("create");
                $('#id').val('');
                $('#dataForm').trigger("reset");
                $('#modelHeading').html("# Create Data");
                $('#ajaxModel').modal('show');
            });

            $('body').on('click', '.edit', function() {
                var id = $(this).data('id');
                $.get("/estimasi" + '/' + id + '/edit', function(data) {
                    $('#modelHeading').html("# Edit Data");
                    $('#btnSimpan').val("edit-data");
                    $('#ajaxModel').modal('show');
                    $('#id').val(data.id);
                    $('#name').val(data.name);
                })
            });

            $('#btnSimpan').click(function(e) {
                e.preventDefault();
                // $(this).html('Sending..');
                $.ajax({
                    data: $('#dataForm').serialize(),
                    url: "/estimasi",
                    type: "POST",
                    dataType: 'json',

                    success: function(data) {
                        $('#dataForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        table.draw()
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        $('#btnSimpan').html('Save Changes');
                    }
                });
            });

            $(document).on('click', '.delete', function() {
                data_id = $(this).data('id');
                console.log(data_id);
                $('#hapusdata').modal('show');
            });

            $('#btn_hapus').click(function(e) {
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'DELETE',
                    url: "/estimasi" + '/' + data_id,
                });
                $.ajax({
                    beforeSend: function() {
                        $('#btn_hapus').text('Deleting...');
                    },
                    success: function(data) {
                        setTimeout(function() {
                            $('.data-table').DataTable().ajax.reload();
                            $('#hapusdata').modal('hide');
                        }, 1000);
                    }
                });
            });
        });
    </script>
@endpush
