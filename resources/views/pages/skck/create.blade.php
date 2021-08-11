@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])
@section('title', 'Permohonan')

    @push('css')
        <link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
        <link href="/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
        <link href="/assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <link href="/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
    @endpush
@section('content')
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
        <li class="breadcrumb-item"><a href="#">SKCK</a></li>
        <li class="breadcrumb-item active">Form Permohonan</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">@yield('title') <small>SKCK</small></h1>
    <!-- end page-header -->
    <div class="row">
        <div class="col-xl-8">
            <!-- begin panel -->
            <div class="panel panel-inverse">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Data @yield('title') SKCK</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                            data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                            data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                            data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- end panel-heading -->
                <div class="panel-body">
                    {{-- <form action="#" method="POST"> --}}
                    <div class="note note-warning">
                        <div class="note-icon"><i class="fa fa-lightbulb"></i></div>
                        <div class="note-content">
                            <h4><b>Info Permohonan SKCK</b></h4>
                            <p>
                                <li>Harap isi dengan data yang sebenarnya</li>
                                <li>Untuk penulisan ipk menggunakan titik contoh [3.2]</li>
                            </p>
                        </div>
                    </div>
                    <form action={{ route('skck.store') }} method="post"></form>
                    @csrf
                    @method('POST')
                    <div class="form-group row m-b-10">
                        <label class="col-md-3 col-form-label">No. Surat <span class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9">
                            <div class="row row-space-10">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input type="text" name="alamat" class="form-control m-b-5" placeholder="Alamat"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input type="text" name="alamat" class="form-control m-b-5" placeholder=""
                                                required />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text"></div>
                                        </div>
                                        <select name="romawi" class="select2 form-control" required>
                                            <option value="">Romawi</option>
                                            @for ($rom = 1; $rom <= 12; $rom++)

                                                <option value="<?php echo $rom; ?>"><?php echo $rom; ?></option>
                                            @endfor

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">Thn</div>
                                        </div>
                                        <select name="romawi" class="select2 form-control" required>

                                            <?php
                                            $thn_skr = date('Y');
                                            ?>
                                            @for ($thn = $thn_skr; $thn >= 1998; $thn--)

                                                <option value="<?php echo $thn; ?>"><?php echo $thn; ?></option>
                                            @endfor

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3">Keperluan</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="keperluan" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3">NIK<span class="text-danger">&nbsp;*</span>
                                </label>
                                <div class="col-md-9">
                                    <input type="number" name="nik_ektp" class="form-control m-b-5" placeholder="NIK"
                                        required />
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3">Nama Lengkap<span class="text-danger">&nbsp;*</span>
                                    {{-- <br>
                                <small class="f-s-12 text-grey-darker"><i>(Sesuai Ijazah terlampir)</i></small> --}}
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="fullname" class="form-control m-b-5" required />
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row form-group ">
                        <label class="col-md-3 col-form-label">Tempat dan Tanggal Lahir<span
                                class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9">
                            <div class="row row-space-10">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input type="text" class="form-control m-b-5" name="tempat_lahir"
                                                placeholder="Tempat Lahir" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="date" name="tanggal_lahir" class="form-control m-b-5" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- judul -->
                    <div class="row form-group ">
                        <label class="col-md-3 col-form-label">Alamat Rumah<span class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9">
                            <div class="row row-space-10">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input type="text" name="alamat" class="form-control m-b-5" placeholder="Alamat"
                                                required />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">No.HP</div>
                                        </div>
                                        <input type="number" name="rt" class="form-control" placeholder="" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3">Pekerjaan</label>
                                <div class="col-md-9">
                                    <select name="pekerjaan" id="pekerjaan" class="form-control" required>
                                        <option value="">Pilih Pekerjaan</option>
                                        {{-- @foreach ($pekerjaan as $key => $item)
                                            <option value="{{ $key }}">{{ $item }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group ">
                        <label class="col-md-3 col-form-label">Kota<span class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9">
                            <div class="row row-space-10">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input type="text" name="kota" class="form-control m-b-5" placeholder="Kota"
                                                required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">Telp/Hp</div>
                                        </div>
                                        <input type="number" name="no_hp" class="form-control" placeholder="" required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- alamat -->
                    <br>
                    <h3>Hubungan Keluarga</h3>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3">Instansi/Perusahaan
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="nama_instansi" class="form-control m-b-5"
                                        placeholder="Instansi/Perusahaan" />
                                </div>
                            </div>
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3">Alamat Kantor</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="alamat_kantor" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- instansi -->
                    <div class="row form-group ">
                        <label class="col-md-3 col-form-label">Kota<span class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9">
                            <div class="row row-space-10">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input type="txet" name="kota_kantor" class="form-control m-b-5"
                                                placeholder="Kota" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">Telp Kantor</div>
                                        </div>
                                        <input type="number" name="telepon_kantor" class="form-control" placeholder="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- kontak -->
                    <div class="row form-group ">
                        <label class="col-md-3 col-form-label">Nama Orang Tua<span
                                class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9">
                            <div class="row row-space-10">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input type="text" name="ayah" class="form-control m-b-5"
                                                placeholder="Nama Ayah" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">Ibu</div>
                                        </div>
                                        <input type="text" name="ibu" class="form-control" placeholder="Nama Ibu"
                                            required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3">
                                </label>
                                <div class="col-md-9">
                                    <button type="submit" name="daftar" class="btn btn-primary"><i class="fa fa-key"></i>
                                        &nbsp;Simpan</button>&nbsp;
                                    <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i>
                                        &nbsp;Kosongkan</button>&nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- button -->
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>

        <div class="col-xl-4">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="form-plugins-5">
                <!-- begin panel-heading -->
                <div class="panel-heading">
                    <h4 class="panel-title">Lampiran Berkas</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default"
                            data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success"
                            data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning"
                            data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger"
                            data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body">
                    <!-- begin table-responsive -->
                    <div class="table-responsive">
                        <table class="table table-striped table-th-valign-middle table-td-valign-middle m-b-0">
                            <thead>
                                <tr>
                                    <th class="with-checkbox">
                                        <div class="checkbox checkbox-css">
                                            <input type="checkbox" value="" id="table_checkbox_1" />
                                            <label for="table_checkbox_1">&nbsp;</label>
                                        </div>
                                    </th>
                                    <th>Berkas</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="with-checkbox">
                                        <div class="checkbox checkbox-css">
                                            <input type="checkbox" value="" id="table_checkbox_2" checked />
                                            <label for="table_checkbox_2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>KTP</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i>
                                            Lihat</button>&nbsp;
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm">Action</button>
                                            <button type="button" class="btn btn-success btn-xs dropdown-toggle"
                                                data-toggle="dropdown"><b class="caret"></b></button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a href="javascript:;" class="dropdown-item"><i
                                                        class="fa fa-check-circle"></i> Acc</a>
                                                <a href="javascript:;" class="dropdown-item"><i
                                                        class="fa fa-times-circle"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="with-checkbox">
                                        <div class="checkbox checkbox-css">
                                            <input type="checkbox" value="" id="table_checkbox_2" checked />
                                            <label for="table_checkbox_2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Kartu Keluarga</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i>
                                            Lihat</button>&nbsp;
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm">Action</button>
                                            <button type="button" class="btn btn-success btn-xs dropdown-toggle"
                                                data-toggle="dropdown"><b class="caret"></b></button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a href="javascript:;" class="dropdown-item"><i
                                                        class="fa fa-check-circle"></i> Acc</a>
                                                <a href="javascript:;" class="dropdown-item"><i
                                                        class="fa fa-times-circle"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="with-checkbox">
                                        <div class="checkbox checkbox-css">
                                            <input type="checkbox" value="" id="table_checkbox_2" checked />
                                            <label for="table_checkbox_2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Foto Copy Akta Kelahiran</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i>
                                            Lihat</button>&nbsp;
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm">Action</button>
                                            <button type="button" class="btn btn-success btn-xs dropdown-toggle"
                                                data-toggle="dropdown"><b class="caret"></b></button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a href="javascript:;" class="dropdown-item"><i
                                                        class="fa fa-check-circle"></i> Acc</a>
                                                <a href="javascript:;" class="dropdown-item"><i
                                                        class="fa fa-times-circle"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="with-checkbox">
                                        <div class="checkbox checkbox-css">
                                            <input type="checkbox" value="" id="table_checkbox_2" checked />
                                            <label for="table_checkbox_2">&nbsp;</label>
                                        </div>
                                    </td>
                                    <td>Pas Foto</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"> <i class="fa fa-eye"></i>
                                            Lihat</button>&nbsp;
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-sm">Action</button>
                                            <button type="button" class="btn btn-success btn-xs dropdown-toggle"
                                                data-toggle="dropdown"><b class="caret"></b></button>
                                            <div class="dropdown-menu dropdown-menu-right" role="menu">
                                                <a href="javascript:;" class="dropdown-item"><i
                                                        class="fa fa-check-circle"></i> Acc</a>
                                                <a href="javascript:;" class="dropdown-item"><i
                                                        class="fa fa-times-circle"></i> Reject</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
                <!-- end panel-body -->
            </div>
            <!-- end panel -->
        </div>
    </div>
@endsection
