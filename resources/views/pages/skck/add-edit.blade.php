@extends('layouts.default', [ 'topMenu' => true, 'sidebarHide'=>true, 'headerTopMenu'=>true])
@section('title', 'Permohonan')

@push('css')
    <link href="{{ asset('/assets/plugins/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
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
    <div class="col-xl-8 ui-sortable">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="index-1">
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
                <form action={{ route('skck.store') }} method="post">
                    @csrf
                    @method('POST')
                    {{-- No SKCK --}}
                    <div class="form-group row m-b-10">
                        <label class="col-md-3 col-form-label">No. Surat <span
                                class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9">
                            <div class="row row-space-10">
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input type="text" name="no_skck[]" class="form-control m-b-5"
                                                placeholder="SKCK" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input type="text" name="no_skck[]" class="form-control m-b-5"
                                                placeholder="YANMAS" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <input class="form-control" type="number" name="no_skck[]" id=""
                                            placeholder="Nomor">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group mb-2">
                                        <select name="no_skck[]" class="select2 form-control" required>
                                            <option value="">Pilih- Bulan</option>
                                            <option value="I">I</option>
                                            <option value="II">II</option>
                                            <option value="III">III</option>
                                            <option value="IV">IV</option>
                                            <option value="V">V</option>
                                            <option value="VI">VI</option>
                                            <option value="VII">VII</option>
                                            <option value="VIII">VIII</option>
                                            <option value="IX">IX</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <select name="no_skck[]" class="select2 form-control" required>
                                            <?php
                                            $thn_skr = date('Y');
                                            ?>
                                            @for ($thn = $thn_skr; $thn >= 1990; $thn--)
                                                <option value="<?php echo $thn; ?>"><?php echo $thn; ?></option>
                                            @endfor

                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="no_skck[]" id=""
                                            placeholder="Satuan">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Keperluan --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3">Keperluan</label>
                                <div class="col-md-9">
                                    <select class="select2 form-control input-sm" name="keperluan" id="keperluan"
                                        required="" data-select2-id="select2-data-keperluan" tabindex="-1"
                                        aria-hidden="true" aria-required="true">
                                        <option value="" lang="id" data-select2-id="select2-data-2-wd9b">PILIH JENIS
                                            KEPERLUAN</option>
                                        <option value="16">POLRES - PENCALONAN ANGGOTA LEGISLATIF TINGKAT
                                            KABUPATEN/KOTA</option>
                                        <option value="17"> POLRES - MELAMAR SEBAGAI PNS</option>
                                        <option value="18">POLRES - MELAMAR
                                            SEBAGAI ANGGOTA
                                            TNI/POLRI</option>
                                        <option value="19">POLRES - PENCALONAN
                                            PEJABAT PUBLIK
                                        </option>
                                        <option value="20">POLRES - KEPEMILIKAN
                                            SENJATA API
                                        </option>
                                        <option value="21">POLRES - MELAMAR
                                            PEKERJAAN SWASTA DAN
                                            BUMN DI TINGKAT KABUPATEN/KOTA</option>
                                        <option value="22">POLRES - PENCALONAN
                                            KEPALA DAERAH
                                            TINGKAT KABUPATEN/KOTA</option>
                                        <option value="23">POLSEK - MELAMAR
                                            PEKERJAAN SWASTA DI
                                            TINGKAT KECAMATAN</option>
                                        <option value="24">POLSEK - PENCALONAN
                                            KEPALA DESA
                                        </option>
                                        <option value="25">POLSEK - PENCALONAN
                                            SEKERTARIS DESA
                                            DAN APARATUR DESA</option>
                                        <option value="26">POLSEK - PINDAH
                                            ALAMAT</option>
                                        <option value="27">POLSEK - MELANJUTKAN
                                            PENDIDIKAN
                                            LINGKUP KECAMATAN</option>
                                        <option value="28">POLRES - PASS BANDARA
                                            SOETTA</option>
                                        <option value="43">POLSEK - KEPERLUAN
                                            LAIN DI TINGKAT
                                            KECAMATAN</option>
                                        <option value="45">POLRES - MELANJUTKAN
                                            PENDIDIKAN
                                            KEDINASAN DAN DI LUAR KABUPATEN/KOTA</option>
                                        <option value="49">POLRES - CALON
                                            PENERIMA PENGHARGAAN
                                        </option>
                                        <option value="53">POLRES - KEPERLUAN
                                            LAIN DI TINGKAT
                                            KABUPATEN</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="keterangan_tambahan" id="keterangan_tambahan"
                                        cols="30" placeholder="Keterangan Tambahan"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- NIK Nama --}}
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
                                <label class="col-form-label col-md-3">Nama Lengkap<span
                                        class="text-danger">&nbsp;*</span>
                                    <br>
                                    <small class="f-s-12 text-grey-darker"><i>Full Name</i></small>
                                </label>
                                <div class="col-md-9">
                                    <input type="text" name="fullname" class="form-control m-b-5" required />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- TTL --}}
                    <div class="row form-group ">
                        <label class="col-md-3 col-form-label">Tempat/Tanggal Lahir<span
                                class="text-danger">&nbsp;*</span> <br>
                            <small class="f-s-12 text-grey-darker"><i>Place/Date Of Birth</i></small></label>
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
                    {{-- Jenis kelamin, Kewarganegaraan Status Kawin --}}
                    <div class="row">
                        <label for="" class="col-md-3 col-form-label"></label>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Jenis Kelamin</label>
                                        <div>
                                            <label class="radio-inline">
                                                <input required="" type="radio" name="gender" id="gender1"
                                                    value="laki-laki" checked="checked" aria-required="true"
                                                    class="valid"><span> Laki-laki/span>
                                            </label>
                                            <label class="radio-inline">
                                                <input required="" type="radio" name="gender" id="gender2"
                                                    value="perempuan" aria-required="true" class="valid"><span>
                                                    Perempuan</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="status_kawin" lang="id">Status Perkawinan</label>
                                        <div>
                                            <label class="radio-inline">
                                                <input required="" type="radio" name="status_kawin"
                                                    class="statusperkawinan valid" value="kawin"
                                                    aria-required="true"><span lang="id"> KAWIN</span>
                                            </label>
                                            <label class="radio-inline">
                                                <input required="" type="radio" name="status_kawin"
                                                    class="statusperkawinan valid" value="belum kawin" checked="checked"
                                                    aria-required="true"><span lang="id"> BELUM
                                                    KAWIN</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="kebangsaan" lang="id">Kewarganegaraan</label>
                                        <div class="">
                                            <label class="radio-inline">
                                                <input required="" type="radio" name="kebangsaan" id="kebangsaan1"
                                                    value="WNI" checked="checked" aria-required="true"
                                                    class="valid"><span lang="id"> WNI</span>
                                            </label>
                                            <label class="radio-inline">
                                                <input required="" type="radio" name="kebangsaan" id="kebangsaan2"
                                                    value="WNA" aria-required="true" class="valid"><span lang="id">
                                                    WNA</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Agama, Pekerjaan, No.Telp  -->
                    <div class="row form-group ">
                        <label class="col-md-3 col-form-label">Agama/Pekerjaan/No.Telp<span
                                class="text-danger">&nbsp;*</span><br>
                            <small class="f-s-12 text-grey-darker"><i>Place/Date Of Birth</i></small></label>
                        <div class="col-md-9">
                            <div class="row row-space-10">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <select class="select2 form-control" name="agama" id="agama">
                                            <option value="">Pilih Agama</option>
                                            <option value="1">Islam</option>
                                            <option value="1">Islam</option>
                                            <option value="1">Islam</option>
                                            <option value="1">Islam</option>
                                            <option value="1">Islam</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <select class="select2 form-control" name="pekerjaan" id="pekerjaan">
                                        <option value="">Pilih Pekerjaan</option>
                                        <option value="1">Islam</option>
                                        <option value="1">Islam</option>
                                        <option value="1">Islam</option>
                                        <option value="1">Islam</option>
                                        <option value="1">Islam</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="input-group-append">
                                            <div class="input-group-text">No.HP</div>
                                        </div>
                                        <input type="number" name="no_telp" class="form-control" placeholder=""
                                            required />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Alamat Sekarang --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3">Alamat Sekarang<span
                                        class="text-danger">&nbsp;*</span></label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="alamat" id="alamat" cols="30"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Provinsi --}}
                    <div class="row">
                        <label class="col-md-3 col-form-label">Provinsi<span class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9 m-b-15">
                            <select class="select2 form-control" name="provinsi" id="provinsi">
                                <option value="">Pilih Provinsi</option>
                            </select>
                        </div>
                    </div>
                    {{-- Kabupaten --}}
                    <div class="row">
                        <label class="col-md-3 col-form-label">Kabupaten<span class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9 m-b-15">
                            <select class="select2 form-control" name="kabupaten" id="kabupaten">
                                <option value="">Pilih Kabupaten</option>
                            </select>
                        </div>
                    </div>
                    {{-- Kecamatan --}}
                    <div class="row">
                        <label class="col-md-3 col-form-label">Kecamatan<span class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9 m-b-15">
                            <select class="select2 form-control" name="kecamatan" id="kecamatan">
                                <option value="">Pilih Kecamatan</option>
                            </select>
                        </div>
                    </div>
                    {{-- Kelurahan --}}
                    <div class="row">
                        <label class="col-md-3 col-form-label">Kelurahan<span class="text-danger">&nbsp;*</span></label>
                        <div class="col-md-9 m-b-15">
                            <select class="select2 form-control" name="kelurahan" id="kelurahan">
                                <option value="">Pilih Kelurahan</option>
                            </select>
                        </div>
                    </div>
                    <!-- Hubungan keluarga -->
                    <br>
                    <h3>Hubungan Keluarga
                        <br>
                        <small class="f-s-12 text-grey-darker"><i>Family</i></small>
                    </h3>
                    <hr>

                    <div class="row">
                        <div class="col-xs-12 col-md-12 ">
                            <p class="text-muted">A.Data Suami/Istri</p>
                        </div>
                    </div>
                    {{-- Hubungan,Fullname umur --}}
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-3">
                                    <label for="hubungan"><small><b> Hubungan</b></small></label>
                                    <div class="input-group">
                                        <div class="input-group">
                                            <select class="select2 form-control" name="hubungan" id="hubungan">
                                                <option value="">Pilih Hubungan</option>
                                                <option value="suami">Suami</option>
                                                <option value="istri">Istri</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="fullname"> <small><b>Nama Lengkap</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="fullname" class="form-control"
                                            placeholder="Nama Lengkap" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Umur</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="umur" class="form-control" placeholder="" />
                                        <div class="input-group-append">
                                            <div class="input-group-text">thn</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Agama Kewarganegaraan Pekerjaan --}}
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-4">
                                    <label for="agama"><small><b> Agama</b></small></label>
                                    <div class="input-group">
                                        <div class="input-group">
                                            <select class="select2 form-control" name="agama" id="agama">
                                                <option value="">Pilih Agama</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Hindu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="fullname"> <small><b>Kewarganegaraan</b></small></label>
                                    <div class="input-group mt-2">
                                        <label class="radio-inline mr-4">
                                            <input required="" type="radio" name="kebangsaan" id="kebangsaan1"
                                                value="WNI" checked="checked" aria-required="true" class="valid"><span
                                                lang="id"> WNI</span>
                                        </label>
                                        <label class="radio-inline">
                                            <input required="" type="radio" name="kebangsaan" id="kebangsaan2"
                                                value="WNA" aria-required="true" class="valid"><span lang="id">
                                                WNA</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <label for=""><small><b> Pekerjaan</b></small></label>
                                    <div class="input-group">
                                        <select class="select2 form-control" name="pekerjaan" id="pekerjaan">
                                            <option value="">Pilih Pekerjaan</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Hindu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Alamat Sekarang --}}
                    <div class="row">
                        <div class="col-md-12 mb-2">
                            <label class="col-form-label ">Alamat Sekarang<span
                                    class="text-danger">&nbsp;*</span></label>
                            <textarea class="form-control" name="alamat_keluarga" id="alamat_keluarga"
                                cols="30"></textarea>
                        </div>
                    </div>
                    {{-- Alamat Prov kab --}}
                    <div class="row form-group ">
                        <div class="col-md-12">
                            <div class="row row-space-10">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label for="">Provinsi</label>
                                        <div class="input-group">
                                            <select class="select2 form-control" name="provinsi" id="provinsi">
                                                <option value="">Pilih Agama</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Hindu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Kabupaten</label>
                                    <div class="input-group">
                                        <select class="select2 form-control" name="kabupaten" id="kabupaten">
                                            <option value="">Pilih Kabupaten</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Hindu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Alamat Kec Kelurahan --}}
                    <div class="row form-group ">
                        <div class="col-md-12">
                            <div class="row row-space-10">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <label for="">Kecamtan</label>
                                        <div class="input-group">
                                            <select class="select2 form-control" name="kecamatan" id="kecamatan">
                                                <option value="">Pilih Agama</option>
                                                <option value="1">Islam</option>
                                                <option value="2">Hindu</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="">Kelurahan</label>
                                    <div class="input-group">
                                        <select class="select2 form-control" name="agama" id="agama">
                                            <option value="">Pilih Agama</option>
                                            <option value="1">Islam</option>
                                            <option value="2">Hindu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Pendidikan -->
                    <br>
                    <h3>Riwayat Pendidikan
                        <br>
                        <small class="f-s-12 text-grey-darker"><i>Education</i></small>
                    </h3>
                    <hr>
                    <div class="row form-group ">
                        <div class="col-md-12">
                            <div class="row row-space-10">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <label for="">Tingkat</label>
                                        <div class="input-group">
                                            <select class="select2 form-control" name="tingkat" id="tingkat">
                                                <option value="">Pilih Tingkat</option>
                                                <option value="1">SD (Sederajat)</option>
                                                <option value="2">SMP (Sederajat)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Nama Sekolah / Univ. / Perguruan Tinggi</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="nama_pendidikan"
                                            id="nama_pendidikan" placeholder="Pendidikan">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Tahun</label>
                                    <div class="input-group">
                                        <select name="tahun_lulus" class="select2 form-control" required>
                                            <?php
                                            $thn_skr = date('Y');
                                            ?>
                                            @for ($thn = $thn_skr; $thn >= 1998; $thn--)
                                                <option value="<?php echo $thn; ?>"><?php echo $thn; ?></option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <label for="">&nbsp;</label>
                                    <div class="input-group">
                                        <button type="button" class="btn btn-primary"><i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Perkara -->
                    <br>
                    <h3>Perkara dan Pelanggaran </h3>
                    <hr>
                    <div class="col-xs-12 col-md-12">
                        <div class="row">
                            <!-- Perkara Pidana -->
                            <div class="col-xs-12 col-md-6 vdivide">
                                <p class="text-muted"><small><i lang="id">1. Perkara Pidana</i></small></p>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label lang="id">Apakah Saudara pernah tersangkut perkara pidana ?</label>
                                        <div>
                                            <label class="radio-inline">
                                                <input type="radio" name="pidana" class="radio-css" value="PERNAH">
                                                <span lang="id">PERNAH</span>
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="pidana" class="radio-css" value="TIDAK PERNAH"
                                                    checked="checked"> <span lang="id">TIDAK
                                                    PERNAH</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label lang="id">Dalam perkara apa ?</label>
                                        <input type="text" class="form-control input-sm" name="perkara"
                                            id="isperkarapidana">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label lang="id">Bagaimana putusan dan vonis hakim ?</label>
                                        <input type="text" class="form-control input-sm" name="putusan_hakim"
                                            id="isvonispidana">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label lang="id">Apakah saudara saat ini sedang dalam proses perkara pidana ?
                                            Kasus apa
                                            ?</label>
                                        <input type="text" class="form-control input-sm" name="sedang_perkara"
                                            id="isprosespidana">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label lang="id">Sampai sejauh mana proses hukumnya ?</label>
                                        <input type="text" class="form-control input-sm" name="proses_hukum"
                                            id="ishukumpidana">
                                    </div>
                                </div>
                            </div>
                            <!-- Pelanggaran -->
                            <div class="col-xs-12 col-md-6">
                                <p class="text-muted"><small><i lang="id">2. Pelanggaran</i></small></p>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label lang="id">Apakah Saudara pernah melakukan pelanggaran hukum dan atau
                                            norma-norma sosial
                                            ?</label>
                                        <div>
                                            <label class="radio-inline">
                                                <input type="radio" name="pelanggaran" class="ispelanggaran"
                                                    value="PERNAH"> <span lang="id">PERNAH</span>
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="pelanggaran" class="ispelanggaran"
                                                    value="TIDAK PERNAH" checked="checked"> <span lang="id">TIDAK
                                                    PERNAH</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label lang="id">Pelanggaran hukum atau norma-norma sosial apa ?</label>
                                        <input type="text" class="form-control input-sm" name="perkara" id="perkara">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label lang="id">Sampai sejauh mana prosesnya ?</label>
                                        <input type="text" class="form-control input-sm" name="proses_perkara"
                                            id="proses_perkara">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Ciri Fisik -->
                    <br>
                    <h3>Ciri Fisik </h3>
                    <hr>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-4">
                                    <label for="hubungan"><small><b> Rambut</b></small></label>
                                    <div class="input-group">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="rambut" id="rambut"
                                                placeholder="Rambut">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="fullname"> <small><b>Wajah</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="wajah" class="form-control" placeholder="Wajah" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for=""><small><b> Kulit</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="kulit" class="form-control" placeholder="Kulit" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="fullname"> <small><b>Tanda Istimewa</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="tanda_istimewa" class="form-control"
                                            placeholder="Tanda Istimewa" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Tinggi Badan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="tinggi_badan" class="form-control" placeholder="" />
                                        <div class="input-group-append">
                                            <div class="input-group-text">cm</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label for=""><small><b> Berat Badan</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="berat_badan" class="form-control" placeholder="" />
                                        <div class="input-group-append">
                                            <div class="input-group-text">kg</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <div class="row ">
                                <div class="col-md-6">
                                    <label for="fullname"> <small><b>Rumus Sidik Jari (Kiri)</b></small></label>
                                    <div class="input-group">
                                        <input type="text" name="rumus_sidik_jari" class="form-control"
                                            placeholder="Rumus Sidik Jari" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for=""><small><b> Rumus Sidik Jari (Kanan)</b></small></label>
                                    <div class="input-group">
                                        <input type="number" name="rumus_sidik_jari" class="form-control"
                                            placeholder="Rumus Sidik Jari" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Keterangan Lain -->
                    <br>
                    <h3>Informasi Lain </h3>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 borderbottom">
                            <div class="row">
                                <div class="col-xs-12 col-md-6 vdivide">
                                    <!-- Informasi Lain -->
                                    <div class="col-xs-12 col-md-12">
                                        <p class="text-muted"><small><i lang="id">Informasi Lain</i></small></p>
                                    </div>

                                    <div class="col-xs-12 col-md-12">

                                        <div class="form-group">
                                            <label lang="id">Riwayat Pekerjaan / negara yang pernah dikunjungi (sebutkan
                                                tahun berapa, dalam
                                                rangka apa, dan negara mana yang dikunjungi)</label>
                                            <textarea class="form-control input-sm" rows="2" name="riwayatpekerjaaninfo"
                                                id="riwayatpekerjaaninfo"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label lang="id">Kesenangan / Kegemaran / Hobi</label>
                                            <textarea class="form-control input-sm" rows="2" name="hobiinfo"
                                                id="hobiinfo"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label lang="id">Alamat yang mudah dihubungi dan no. telepon</label>
                                            <textarea class="form-control input-sm" rows="2" name="alamatinfo"
                                                id="alamatinfo"></textarea>
                                        </div>

                                    </div>

                                </div>

                                <div class="col-xs-12 col-md-6 ">
                                    <!-- Sponsor -->
                                    <div class="col-xs-12 col-md-12">
                                        <p class="text-muted"><small><i lang="id">Sponsor (khusus orang
                                                    asing)</i></small></p>
                                    </div>
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <label lang="id">Disponsori oleh</label>
                                            <input type="text" class="form-control input-sm" name="sponsorinfo"
                                                id="sponsorinfo">
                                        </div>
                                        <div class="form-group">
                                            <label lang="id">Alamat Sponsor</label>
                                            <textarea class="form-control input-sm" rows="2" name="sponsoralamatinfo"
                                                id="alamatinfo"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label lang="id">Telp. / Fax</label>
                                            <input type="number" min="1" class="form-control input-sm"
                                                name="sponsortelpfaxinfo" id="telpfaxinfo">
                                        </div>
                                        <div class="form-group">
                                            <label lang="id">Jenis Usaha</label>
                                            <input type="text" class="form-control input-sm"
                                                name="sponsorjenisusahainfo" id="jenisusahainfo">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label lang="id">Alamat Email</label>
                                    <input type="email" class="form-control input-sm" name="email" id="email"
                                        style="text-transform: lowercase;">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" id="checkagree" name="checkagree">
                                        <span class="text-muted" lang="id">Keterangan yang saya buat dengan sebenarnya
                                            atas sumpah menurut
                                            kepercayaan saya, apabila dikemudian hari ternyata keterangan ini tidak
                                            benar maka saya sanggup
                                            dituntut berdasarkan hukum yang berlaku.</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <!-- button -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group row m-b-15">
                                <label class="col-form-label col-md-3">
                                </label>
                                <div class="col-md-9">
                                    <button type="submit" name="daftar" class="btn btn-primary"><i
                                            class="fa fa-key"></i>
                                        &nbsp;Simpan</button>&nbsp;
                                    <button type="reset" class="btn btn-warning"><i class="fa fa-undo"></i>
                                        &nbsp;Kosongkan</button>&nbsp;
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </form>
            </div>
        </div>
        <!-- end panel -->
    </div>

    <div class="col-xl-4 ui-sortable">
        <!-- begin panel -->
        <div class="panel panel-inverse" data-sortable-id="index-2">
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
                                    </button>&nbsp;
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
                <button class="btn btn-block btn-primary">Terima</button>
            </div>
            <!-- end panel-body -->
        </div>
        <!-- end panel -->
    </div>
    <div class="col-xl-4">
        <div class="panel panel-inverse" data-sortable-id="index-3">
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
                <div class="col-md-12 mb-2">
                    <div class="card border-0">
                        <img class="card-img-top" src="/assets/img/no_image.png" alt="KTP">
                        <div class="card-footer text-center">
                            <h5><b>Kartu Tanda Penduduk</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-1">
                    <div class="card border-0">
                        <img class="card-img-top" src="/assets/img/no_image.png" alt="Kartu Keluarga">
                        <div class="card-footer text-center">
                            <h4><b>Kartu Keluarga</b></h4>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end panel-body -->
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/select2/dist/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2({
            width: '100%'
        });
    });
</script>
@endpush
