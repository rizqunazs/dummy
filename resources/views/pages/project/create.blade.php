@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])

@section('title', 'Proyek')

@push('css')
<link href="{{ asset('/assets/plugins/smartwizard/dist/css/smart_wizard.css') }}" rel="stylesheet" />
<link href="{{ mix('assets/css/custom/radio-boxed.css') }}" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Form Stuff</a></li>
  <li class="breadcrumb-item active">Proyek</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Proyek <small>header small text goes here...</small></h1>
<!-- end page-header -->
<!-- begin wizard-form -->
<form action="{{ route('project.store') }}" method="POST" name="project-form-wizard" class="form-control-with-bg">
  @csrf
  <!-- begin wizard -->
  <div id="project-wizard">
    <!-- begin wizard-step -->
    <ul>
      <li>
        <a href="#step-1">
          <span class="number">1</span>
          <span class="info">
            Jenis Proyek
            <small>Tentukan jenis proyek</small>
          </span>
        </a>
      </li>
      <li>
        <a href="#step-2">
          <span class="number">2</span>
          <span class="info">
            Pihak Penghadap
            <small>Masukkan pihak penghadap</small>
          </span>
        </a>
      </li>
      <li>
        <a href="#step-3">
          <span class="number">3</span>
          <span class="info">
            Detail Proyek
            <small>Nilai, keterangan dan detail proyek lainnya</small>
          </span>
        </a>
      </li>
      <li>
        <a href="#step-4">
          <span class="number">4</span>
          <span class="info">
            Preview
            <small>Preview data proyek</small>
          </span>
        </a>
      </li>
    </ul>
    <!-- end wizard-step -->
    <!-- begin wizard-content -->
    <div>
      <!-- begin step-1 -->
      <div id="step-1">
        <!-- begin fieldset -->
        <fieldset>
          <!-- begin row -->
          <div class="row">
            <!-- begin col-8 -->
            <div class="col-xl-8 offset-xl-2">
              <div class="radio-tile-group">
                @foreach($jenisForm as $jForm)
                <x-project.jenis-form-item :item="$jForm" icon="null" />
                @endforeach
              </div>
              <div id="radio-boxed-errors" class="text-center"></div>
            </div>
            <!-- end col-8 -->
          </div>
          <!-- end row -->
        </fieldset>
        <!-- end fieldset -->
      </div>
      <!-- end step-1 -->
      <!-- begin step-2 -->
      <div id="step-2">
        <!-- begin fieldset -->
        <fieldset>
          <!-- begin row -->
          <div class="row">
            <!-- begin col-8 -->
            <div class="col-xl-8 offset-xl-2">
              <!-- begin panel -->
              <div id="pihak-1" class="panel">
                <!-- begin panel-heading -->
                <div class="panel-heading bg-light">
                  <h4 class="panel-title">Pihak 1</h4>
                  <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove" hidden><i class="fa fa-times"></i></a>
                  </div>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body bg-grey-transparent-1">
                  <div class="form-group row m-b-10">
                    <label class="col-lg-3 text-lg-right col-form-label">Name <span class="text-danger">*</span></label>
                    <div class="col-lg-9 col-xl-6">
                      <input type="text" name="pihak_nama[]" value="{{ old('pihak_nama.0') }}" placeholder="" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <label class="col-lg-3 text-lg-right col-form-label">Alamat <span class="text-danger">*</span></label>
                    <div class="col-lg-9 col-xl-6">
                      <textarea name="pihak_address[]" cols="30" rows="3" class="form-control" data-parsley-group="step-2" data-parsley-required="true">{{ old('pihak_address.0') }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <label class="col-lg-3 text-lg-right col-form-label">NPWP</label>
                    <div class="col-lg-9 col-xl-6">
                      <input type="text" name="pihak_npwp[]" value="{{ old('pihak_npwp.0') }}" placeholder="" class="form-control" />
                    </div>
                  </div>
                </div>
                <!-- end panel-body -->
              </div>
              <!-- end panel -->
              <!-- begin panel -->
              <div id="pihak-2" class="panel">
                <!-- begin panel-heading -->
                <div class="panel-heading bg-light">
                  <h4 class="panel-title">Pihak 2</h4>
                  <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                  </div>
                </div>
                <!-- end panel-heading -->
                <!-- begin panel-body -->
                <div class="panel-body bg-grey-transparent-1">
                  <div class="form-group row m-b-10">
                    <label class="col-lg-3 text-lg-right col-form-label">Name <span class="text-danger">*</span></label>
                    <div class="col-lg-9 col-xl-6">
                      <input type="text" name="pihak_nama[]" value="{{ old('pihak_nama.1') }}" placeholder="" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <label class="col-lg-3 text-lg-right col-form-label">Alamat <span class="text-danger">*</span></label>
                    <div class="col-lg-9 col-xl-6">
                      <textarea name="pihak_address[]" cols="30" rows="3" class="form-control" data-parsley-group="step-2" data-parsley-required="true">{{ old('pihak_address.1') }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row m-b-10">
                    <label class="col-lg-3 text-lg-right col-form-label">NPWP</label>
                    <div class="col-lg-9 col-xl-6">
                      <input type="text" name="pihak_npwp[]" value="{{ old('pihak_npwp.1') }}" placeholder="" class="form-control" />
                    </div>
                  </div>
                </div>
                <!-- end panel-body -->
              </div>
              <!-- end panel -->
              @if(old('pihak_nama') && count(old('pihak_nama')) > 2 )
              @for($i = 2; $i < count(old('pihak_nama')); $i++) <!-- begin panel -->
                <div id="pihak-{{ $i }}" class="panel">
                  <!-- begin panel-heading -->
                  <div class="panel-heading bg-light">
                    <h4 class="panel-title">Pihak {{ $i + 1}}</h4>
                    <div class="panel-heading-btn">
                      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                      <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                  </div>
                  <!-- end panel-heading -->
                  <!-- begin panel-body -->
                  <div class="panel-body bg-grey-transparent-1">
                    <div class="form-group row m-b-10">
                      <label class="col-lg-3 text-lg-right col-form-label">Name <span class="text-danger">*</span></label>
                      <div class="col-lg-9 col-xl-6">
                        <input type="text" name="pihak_nama[]" value="{{ old('pihak_nama.' .$i) }}" placeholder="" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
                      </div>
                    </div>
                    <div class="form-group row m-b-10">
                      <label class="col-lg-3 text-lg-right col-form-label">Alamat <span class="text-danger">*</span></label>
                      <div class="col-lg-9 col-xl-6">
                        <textarea name="pihak_address[]" cols="30" rows="3" class="form-control" data-parsley-group="step-2" data-parsley-required="true">{{ old('pihak_address.' .$i) }}</textarea>
                      </div>
                    </div>
                    <div class="form-group row m-b-10">
                      <label class="col-lg-3 text-lg-right col-form-label">NPWP</label>
                      <div class="col-lg-9 col-xl-6">
                        <input type="text" name="pihak_npwp[]" value="{{ old('pihak_npwp.' .$i) }}" placeholder="" class="form-control" />
                      </div>
                    </div>
                  </div>
                  <!-- end panel-body -->
                </div>
                <!-- end panel -->
                @endfor
                @endif
                <a id="btn-add-pihak" href="javascript:;" class="btn btn-primary btn-block">Tambah Pihak Penghadap</a>
            </div>
            <!-- end col-8 -->
          </div>
          <!-- end row -->
        </fieldset>
        <!-- end fieldset -->
      </div>
      <!-- end step-2 -->
      <!-- begin step-3 -->
      <div id="step-3">
        <!-- begin fieldset -->
        <fieldset>
          <!-- begin row -->
          <div class="row">
            <!-- begin col-8 -->
            <div class="col-xl-8 offset-xl-2">
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Nilai Transaksi <span class="text-danger">*</span></label>
                <div class="col-lg-9 col-xl-6">
                  <input type="text" id="nilai_transaksi" name="nilai_transaksi" value="{{ old('nilai_transaksi') }}" placeholder="" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Nilai HT <span class="text-danger">*</span></label>
                <div class="col-lg-9 col-xl-6">
                  <input type="text" id="nilai_ht" name="nilai_ht" value="{{ old('nilai_ht') }}" placeholder="" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Plafond Hutang <span class="text-danger">*</span></label>
                <div class="col-lg-9 col-xl-6">
                  <input type="text" id="plafond_hutang" name="plafond_hutang" value="{{ old('plafond_hutang') }}" placeholder="" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Kota <span class="text-danger">*</span></label>
                <div class="col-lg-9 col-xl-6">
                  <input type="text" id="kota" name="kota" value="{{ old('kota') }}" placeholder="" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Nama Direktur <span class="text-danger">*</span></label>
                <div class="col-lg-9 col-xl-6">
                  <input type="text" id="nama_direktur" name="nama_direktur" value="{{ old('nama_direktur') }}" placeholder="" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Modal Dasar <span class="text-danger">*</span></label>
                <div class="col-lg-9 col-xl-6">
                  <input type="text" id="modal_dasar" name="modal_dasar" value="{{ old('modal_dasar') }}" placeholder="" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Badan Ajuan <span class="text-danger">*</span></label>
                <div class="col-lg-9 col-xl-6">
                  <input type="text" id="badan_ajuan" name="badan_ajuan" value="{{ old('badan_ajuan') }}" placeholder="" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Pendiri <span class="text-danger">*</span></label>
                <div class="col-lg-9 col-xl-6">
                  <input type="text" id="pendiri" name="pendiri" value="{{ old('pendiri') }}" placeholder="" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Badan Disetujui <span class="text-danger">*</span></label>
                <div class="col-lg-9 col-xl-6">
                  <input type="text" id="badan_disetujui" name="badan_disetujui" value="{{ old('badan_disetujui') }}" placeholder="" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Notaris Partner <span class="text-danger">*</span></label>
                <div class="col-lg-9 col-xl-6">
                  <input type="text" id="notaris_partner" name="notaris_partner" value="{{ old('notaris_partner') }}" placeholder="" class="form-control" data-parsley-group="step-3" data-parsley-required="true" data-parsley-type="alphanum" />
                </div>
              </div>
              <div class="form-group row m-b-10">
                <label class="col-lg-3 text-lg-right col-form-label">Keterangan</label>
                <div class="col-lg-9 col-xl-6">
                  <textarea name="keterangan" cols="30" rows="3" class="form-control" data-parsley-group="step-3">{{ old('keterangan') }}</textarea>
                </div>
              </div>
            </div>
            <!-- end col-8 -->
          </div>
          <!-- end row -->
        </fieldset>
        <!-- end fieldset -->
      </div>
      <!-- end step-3 -->
      <!-- begin step-4 -->
      <div id="step-4">
        <div id="project-preview"></div>
        <button id="btn-create-project" class="btn btn-primary btn-lg btn-block">Buat Proyek</button>
      </div>
      <!-- end step-4 -->
    </div>
    <!-- end wizard-content -->
  </div>
  <!-- end wizard -->
</form>
<!-- end wizard-form -->
@endsection

@push('scripts')
<script src="{{ asset('/assets/plugins/parsleyjs/dist/parsley.js') }}"></script>
<script src="{{ asset('/assets/plugins/smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
<script src="{{ mix('assets/js/custom/project.js') }}"></script>
@endpush