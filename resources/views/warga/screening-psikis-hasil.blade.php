@extends('warga.layouts.app-login')
@section('content')
<!-- Content area -->
<div class="content">
    <div class="panel panel-flat">
        <div class="panel-body">
            <div>
              <fieldset class="content-group">
                  <!-- <legend class="text-bold">Hasil Pendataan Dampak Covid-19 </legend> -->

                  <div class="alert alert-info no-border col-md-12">
                                    <!-- <legend class="text-bold">Hasil Pendataan Dampak Covid-19 </legend> -->

                    <b>Terimakasih sudah mengisi Pendataan Dampak Covid-19.</b><br>
                  </div>
                  <div class="col-md-12" style="margin-bottom:10px">
                      <a href="{{route('warga.list',$warga->no_telepon)}}"type="button" class="btn btn-default" id=""> <i class="icon-arrow-left13"></i> Kembali</a>
                      <!-- <a href="{{route('warga.editLaporan',$warga->id)}}"type="button" class="btn btn-primary" id=""> <i class="icon-pencil6"></i> Ubah Laporan Hari Ini</a> -->
                  </div>
              </fieldset>
            </div>
        </div>
    </div>
</div>
<!-- /content area -->
@endsection
@push('after_script')

@endpush
