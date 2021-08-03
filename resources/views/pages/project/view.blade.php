@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Proyek Info')
@push('css')
<style>
    .dataTables_filter {
        display: none;
    }
</style>
@endpush
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
    <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
    <li class="breadcrumb-item"><a href="javascript:;">Proyek</a></li>
    <li class="breadcrumb-item active">@yield('title')</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Proyek <small>details</small></h1>
<!-- end page-header -->
<!-- begin row-->
<div class="row">
    <div class="col-lg-4">
        <div class="panel panel-default disable-draggable">
            <div class="panel-heading">
                <h4 class="panel-title">Data proyek</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <dl class="row">
                    <dt class="text-inverse text-left col-4 text-truncate">ID</dt>
                    <dd class="col-8 text-truncate"> <span class="label label-inverse">#1</span></dd>
                    <dt class="text-inverse text-left col-4 text-truncate">Dibuat Oleh</dt>
                    <dd class="col-8 text-truncate">John Doe</dd>
                    <dt class="text-inverse text-left col-4 text-truncate">Tanggal dibuat</dt>
                    <dd class="col-8 text-truncate">20 Juni 2022</dd>
                    <dt class="text-inverse text-left col-4 text-truncate">Status Proyek </dt>
                    <dd class="col-8 text-truncate"><span class="badge badge-square badge-md badge-primary">Sedang
                            Proses</span></dd>
                    <dt class="text-inverse text-left col-4 text-truncate">Jenis Proyek</dt>
                    <dd class="col-8 text-truncate">Umum</dd>
                    <dt class="col-4"></dt>
                    <dd class="col-8"><button class="btn btn-warning width-90 rounded-corner"><i class="fa fa-edit"></i>
                            Edit</button></dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="panel panel-default disable-draggable">
            <div class="panel-heading">
                <h4 class="panel-title">Lampiran Data<span class="label label-theme m-l-5">#5 Penghadap</span></h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <div class="col-12">
                    {{-- <div class="form-group row m-b-15">
                            <blockquote class="pull-left">
                                Riwayat Laporan </blockquote>
                        </div> --}}
                    <div class="table-responsive">
                        <table class="table  table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pihak 1</th>
                                    <th>Pihak 2</th>
                                    <th>Pihak 3</th>
                                    <th>Pihak 4</th>
                                    <th>Pihak 5</th>
                                </tr>
                            </thead>
                            <tr>
                                <th>Nama Pihak </th>
                                <td>John Doe</td>
                                <td>Jeni Kim</td>
                                <td>Lisa</td>
                                <td>Rose</td>
                                <td>Kim Ji-soo</td>
                            </tr>
                            <tr>
                                <th>Alamat Pihak </th>
                                <td>Surakarta</td>
                                <td>Bandung</td>
                                <td>Jakarta</td>
                                <td>Tangerang</td>
                                <td>Surabaya</td>
                            </tr>
                            <tr>
                                <th>NPWP</th>
                                <td>123456</td>
                                <td>789546</td>
                                <td>587965e</td>
                                <td>7987654</td>
                                <td>3564654</td>
                            </tr>
                        </table>
                    </div>
                    <hr>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<!-- begin row -->
<div class="row">
    <!-- begin colxl4 lg6 -->
    <div class="col-lg-12 col-lg-6">
        <!-- begin panel -->
        <div class="panel panel-default panel-with-tabs">
            <div class="panel-heading">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a href="#info" data-toggle="tab" class="nav-link active">
                            <i class="fa fa-home"></i>
                            <span class="d-none d-md-inline" title="Scan Berkas Klien & Objek">Scan Berkas Klien & Objek</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#orders" data-toggle="tab" class="nav-link">
                            <i class="fa fa-home"></i>
                            <span class="d-none d-md-inline" title="Order Akta PPAT & Notaril">Order Akta PPAT & Notaril</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#kontrol" data-toggle="tab" class="nav-link">
                            <i class="fa fa-user"></i>
                            <span class="d-none d-md-inline" title="Kontrol Keuangan">Kontrol Keuangan </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#pembayaran" data-toggle="tab" class="nav-link">
                            <i class="fa fa-user"></i>
                            <span class="d-none d-md-inline" title="Pembayaran & Biaya">Pembayaran dan Biaya</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="info">
                        <!-- begin colxl4 lg6 -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- begin panel 1 -->
                                <div class="panel panel-inverse disable-draggable">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Scan Berkas Klien</h4>
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        {{-- $dataTable->table() --}}
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end colxl4 lg6 -->
                            <!-- begin colxl4 lg6 -->
                            <div class="col-md-6">
                                <!-- begin panel 1 -->
                                <div class="panel panel-inverse disable-draggable">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Info Objek </h4>
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        {{-- $dataTable->table() --}}
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end colxl4 lg6 -->
                        </div>
                    </div>
                    <!-- end tab info -->
                    <div class="tab-pane fade" id="orders">
                        <!-- begin colxl4 lg6 -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- begin panel 1 -->
                                <div class="panel panel-inverse disable-draggable">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Order Akta PPAT</h4>
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        {{-- $dataTable->table() --}}
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end colxl4 lg6 -->
                            <!-- begin colxl4 lg6 -->
                            <div class="col-md-6">
                                <!-- begin panel 1 -->
                                <div class="panel panel-inverse disable-draggable">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Order Akta Notaril</h4>
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        {{-- {{ $dataTable->table() }} --}}
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end colxl4 lg6 -->
                        </div>
                    </div>
                    <!-- end tab orders -->
                    <div class="tab-pane fade" id="kontrol">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- begin panel 1 -->
                                <div class="panel panel-inverse disable-draggable">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Kontrol Keuangan Pajak Titipan</h4>
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        {{-- {{ $dataTable->table() }} --}}
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end colxl4 lg6 -->
                            <!-- begin colxl4 lg6 -->
                            <div class="col-md-6">
                                <!-- begin panel 1 -->
                                <div class="panel panel-inverse disable-draggable">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Kontrol Keuangan Akta & Order lainnya</h4>
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        {{-- {{ $dataTable->table() }} --}}
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end colxl4 lg6 -->
                        </div>
                    </div>
                    <!-- end kontrol -->
                    <div class="tab-pane fade" id="pembayaran">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- begin panel 1 -->
                                <div class="panel panel-inverse disable-draggable">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Pembayaran Pajak Titipan</h4>
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        {{-- {{ $dataTable->table() }} --}}
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end colxl4 lg6 -->
                            <!-- begin colxl4 lg6 -->
                            <div class="col-md-6">
                                <!-- begin panel 1 -->
                                <div class="panel panel-inverse disable-draggable">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">Biaya Operasional Proses lainnya</h4>
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        {{-- {{ $dataTable->table() }} --}}
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end colxl4 lg6 -->
                        </div>
                    </div>
                    <!-- end pembayaran -->
                </div>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end colxl4 lg6 -->
    <!-- begin colxl4 lg6 -->
    <div class="col-xl-4 col-lg-6">
        <!-- begin panel 1 -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title">SKN (Surat Keluar Notaris)</h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                {{-- $dataTable->table() --}}
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end colxl4 lg6 -->
    <!-- begin colxl4 lg6 -->
    <div class="col-xl-4 col-lg-6">
        <!-- begin panel 1 -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title"></h4>
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
            </div>
            <div class="panel-body">
                <!-- begin widget-table -->
                <div class="widget-chart-info">
                    <h4 class="widget-chart-info-title">Task progress</h4>
                    <p class="widget-chart-info-desc">Progress proyek yang berjalan</p>
                    <div class="widget-chart-info-progress">
                        <b>Nilai Status PPAT</b>
                        <span class="pull-right">74%</span>
                    </div>
                    <div class="progress progress-sm m-b-15">
                        <div class="progress-bar progress-bar-striped progress-bar-animated rounded-corner bg-indigo" style="width: 74%">74%</div>
                    </div>
                    <div class="widget-chart-info-progress">
                        <b>Nilai Status Notaril</b>
                        <span class="pull-right">25%</span>
                    </div>
                    <div class="progress progress-sm m-b-15">
                        <div class="progress-bar progress-bar-striped progress-bar-animated rounded-corner bg-green" style="width: 25%">25%</div>
                    </div>
                    <div class="widget-chart-info-progress">
                        <b>Nilai Status Pajak</b>
                        <span class="pull-right">95%</span>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-striped progress-bar-animated rounded-corner bg-orange" style="width: 95%">95%</div>
                    </div>
                    <div class="widget-chart-info-progress">
                        <b>Nilai Status Operasional</b>
                        <span class="pull-right">95%</span>
                    </div>
                    <div class="progress progress-sm">
                        <div class="progress-bar progress-bar-striped progress-bar-animated rounded-corner bg-orange" style="width: 95%">95%</div>
                    </div>
                </div>
                <!-- end widget-table -->
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!-- end colxl4 lg6 -->
    <!-- begin colxl4 lg6 -->
    <div class="col-xl-4 col-lg-6">
        <!-- begin panel -->
        <div class="panel panel-inverse">
            <div class="panel-heading">
                <h4 class="panel-title"># Comments History</h4>
                <span class="label label-teal">4 message</span>
            </div>
            <div class="panel-body bg-light">
                <div class="chats" data-scrollbar="true" data-height="225px">
                    <div class="left">
                        <span class="date-time">yesterday 11:23pm</span>
                        <a href="javascript:;" class="name">Sowse Bawdy</a>
                        <a href="javascript:;" class="image"><img alt="" src="/assets/img/user/user-12.jpg" /></a>
                        <div class="message">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit volutpat. Praesent mattis interdum
                            arcu eu feugiat.
                        </div>
                    </div>
                    <div class="right">
                        <span class="date-time">08:12am</span>
                        <a href="javascript:;" class="name"><span class="label label-primary">ADMIN</span> Me</a>
                        <a href="javascript:;" class="image"><img alt="" src="/assets/img/user/user-13.jpg" /></a>
                        <div class="message">
                            Nullam posuere, nisl a varius rhoncus, risus tellus hendrerit neque.
                        </div>
                    </div>
                    <div class="left">
                        <span class="date-time">09:20am</span>
                        <a href="javascript:;" class="name">Neck Jolly</a>
                        <a href="javascript:;" class="image"><img alt="" src="/assets/img/user/user-10.jpg" /></a>
                        <div class="message">
                            Euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                        </div>
                    </div>
                    <div class="left">
                        <span class="date-time">11:15am</span>
                        <a href="javascript:;" class="name">Shag Strap</a>
                        <a href="javascript:;" class="image"><img alt="" src="/assets/img/user/user-14.jpg" /></a>
                        <div class="message">
                            Nullam iaculis pharetra pharetra. Proin sodales tristique sapien mattis placerat.
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <form name="send_message_form" data-id="message-form">
                    <div class="input-group">
                        <input type="text" class="form-control" name="message" placeholder="Enter your message here.">
                        <span class="input-group-append">
                            <button class="btn btn-primary" type="button"><i class="fa fa-link"></i></button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>
    <!--end col-4-->
</div>
<!-- end colxl4 lg6 -->
</div>
<!-- end row -->


@endsection()

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
{{-- $dataTable->scripts() --}}
<!-- end datatables -->
@endpush