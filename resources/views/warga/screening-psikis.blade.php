@extends('warga.layouts.app-login')
@section('content')
<!-- Content area -->
<div class="content">
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal form-validate-jquery" action="{{route('warga.kirimScrePsi',$warga->id)}}" method="post" enctype="multipart/form-data" files=true>
                {{ csrf_field() }}
                <fieldset class="content-group">
                  <legend class="text-bold">Pendataan Dampak Covid-19 di Desa REJOWINANGUN</legend>
                  <div class="" id="div-alert">
                    <div class="alert alert-info no-border">
                      <span class="text-semibold"></span>Berikut ini adalah serangkaian pertanyaan (kuisioner) untuk menentukan seberapa besar dampak Covid-19 terhadap Keseharian, Mental, Pekerjaan, dan Ekonomi Masyarakat REJOWINANGUN; serta mengukur persepsi & reaksi masyarakat terhadap informasi yang diterima terkait Covid-19. Kuisioner ini juga membantu mengetahui kebutuhan masyarakat selama Pandemi. Hasil dari kuisioner ini digunakan untuk menentukan langkah tindakan yang akan dilakukan untuk Desa REJOWINANGUN di kemudian hari, agar tepat sasaran dan efektif. Oleh karena itu, diharapkan untuk masyarakat agar mengisi dengan Jujur dan sebenar-benarnya sesuai dengan situasi masing-masing.
                    </div>
                  </div>
                  <div class="" style="display:none" id="div-table">
                    <legend class="text-bold text-center">Dampak Covid-19 Terhadap 'Keseharian' Masyarakat</legend>
                    <table class="table table-togglable table-hover">
                      <thead>
                        <tr>
                          <!-- <th>No</th>
                          <th>Pertanyaan</th>
                          <th class="col-md-2">Jawaban</th> -->

                          <th data-toggle="true">Pertanyaan</th>
                          <th data-hide="phone">Deskripsi</th>
                          <th data-toggle="true" class="col-md-2">Jawaban</th>
                        </tr>
                      </thead>
                      @foreach ($pertanyaan->where('kategori','Keseharian') as $key => $value)
                      <tbody>
                        <td width="500px">{{$value->pertanyaan}}</td>
                        <td width="300px">{{$value->deskripsi}}</td>
                        <td>
                          @if ($value->tipe == 'radio')
                          <div class="form-group">
                            <input type="hidden" name="pertanyaan_id[{{$key}}]" value="{{$value->id}}">
                            @foreach (\App\ComCode::where('code_group',$value->grup)->get() as $jawaban_component)
                            <div class="col-md-12" style="margin:0px;padding:0px">
                              <label class="radio-inline">
                                <input type="radio" name="jawaban[{{$key}}][]" class="" value="{{$jawaban_component->code_value}}">
                                {{$jawaban_component->code_nm}}
                              </label>
                            </div>
                            @endforeach
                          </div>
                          @elseif ($value->tipe == 'checkbox')
                          <div class="form-group">
                            <input type="hidden" name="pertanyaan_id[{{$key}}]" value="{{$value->id}}">
                            @foreach (\App\ComCode::where('code_group',$value->grup)->get() as $jawaban_component)
                            <div class="col-md-12" style="margin:0px;padding:0px">
                              <label class="checkbox-inline">
                                @if ($jawaban_component->tipe != 'textarea')
                                <input type="checkbox" name="jawaban[{{$key}}][]" class="" value="{{$jawaban_component->code_value}}">
                                {{$jawaban_component->code_nm}}
                                @endif
                              </label>
                              @if ($jawaban_component->tipe == 'textarea')
                              <br>
                              <label class="control-label">
                                <textarea name="jawaban[{{$key}}][]" id="" row="8"></textarea>
                              </label>
                              @endif
                            </div>
                            @endforeach
                          </div>
                          @endif
                        </td>
                      </tbody>
                      @endforeach
                    </table>
                    <hr>
                    <br>
                    <legend class="text-bold text-center">Dampak Covid-19 Terhadap 'Ekonomi' Masyarakat</legend>
                    <table class="table table-togglable table-hover">
                      <thead>
                        <tr>
                          <!-- <th>No</th>
                          <th>Pertanyaan</th>
                          <th class="col-md-2">Jawaban</th> -->

                          <th data-toggle="true">Pertanyaan</th>
                          <th data-hide="phone">Deskripsi</th>
                          <th data-toggle="true" class="col-md-2">Jawaban</th>
                        </tr>
                      </thead>
                      
                      @foreach ($pertanyaan->where('kategori','Ekonomi') as $key => $value)
                      <tbody>
                        <td width="500px">{{$value->pertanyaan}}</td>
                        <td width="300px">{{$value->deskripsi}}</td>
                        <td>
                          @if ($value->tipe == 'radio')
                          <div class="form-group">
                            <input type="hidden" name="pertanyaan_id[{{$key}}]" value="{{$value->id}}">
                            @foreach (\App\ComCode::where('code_group',$value->grup)->get() as $jawaban_component)
                            <div class="col-md-12" style="margin:0px;padding:0px">
                              <label class="radio-inline">
                                <input type="radio" name="jawaban[{{$key}}][]" class="" value="{{$jawaban_component->code_value}}">
                                {{$jawaban_component->code_nm}}
                              </label>
                            </div>
                            @endforeach
                          </div>
                          @elseif ($value->tipe == 'checkbox')
                          <div class="form-group">
                            <input type="hidden" name="pertanyaan_id[{{$key}}]" value="{{$value->id}}">
                            @foreach (\App\ComCode::where('code_group',$value->grup)->get() as $jawaban_component)
                            <div class="col-md-12" style="margin:0px;padding:0px">
                              <label class="checkbox-inline">
                                @if ($jawaban_component->tipe != 'textarea')
                                <input type="checkbox" name="jawaban[{{$key}}][]" class="" value="{{$jawaban_component->code_value}}">
                                {{$jawaban_component->code_nm}}
                                @endif
                              </label>
                              @if ($jawaban_component->tipe == 'textarea')
                              <br>
                              <label class="control-label">
                                <textarea name="jawaban[{{$key}}][]" id="" row="8"></textarea>
                              </label>
                              @endif
                            </div>
                            @endforeach
                          </div>
                          @endif
                        </td>
                      </tbody>
                      @endforeach
                    </table>
                    <hr>
                    <br>
                    <legend class="text-bold text-center">Dampak Covid-19 Terhadap 'Psikologi & Penerimaan Informasi' Masyarakat</legend>
                    <table class="table table-togglable table-hover">
                      <thead>
                        <tr>
                          <th data-toggle="true">Pertanyaan</th>
                          <th data-hide="phone">Deskripsi</th>
                          <th data-toggle="true" class="col-md-2">Jawaban</th>
                        </tr>
                      </thead>
                      
                      @foreach ($pertanyaan->where('kategori','Psikologi & Penerimanaan Informasi Masyarakat') as $key => $value)
                      <tbody>
                        <td width="500px">{{$value->pertanyaan}}</td>
                        <td width="300px">{{$value->deskripsi}}</td>
                        <td>
                          @if ($value->tipe == 'radio')
                          <div class="form-group">
                            <input type="hidden" name="pertanyaan_id[{{$key}}]" value="{{$value->id}}">
                            @foreach (\App\ComCode::where('code_group',$value->grup)->get() as $jawaban_component)
                            <div class="col-md-12" style="margin:0px;padding:0px">
                              <label class="radio-inline">
                                <input type="radio" name="jawaban[{{$key}}][]" class="" value="{{$jawaban_component->code_value}}">
                                {{$jawaban_component->code_nm}}
                              </label>
                            </div>
                            @endforeach
                          </div>
                          @elseif ($value->tipe == 'checkbox')
                          <div class="form-group">
                            <input type="hidden" name="pertanyaan_id[{{$key}}]" value="{{$value->id}}">
                            @foreach (\App\ComCode::where('code_group',$value->grup)->get() as $jawaban_component)
                            <div class="col-md-12" style="margin:0px;padding:0px">
                              <label class="checkbox-inline">
                                @if ($jawaban_component->tipe != 'textarea')
                                <input type="checkbox" name="jawaban[{{$key}}][]" class="" value="{{$jawaban_component->code_value}}">
                                {{$jawaban_component->code_nm}}
                                @endif
                              </label>
                              @if ($jawaban_component->tipe == 'textarea')
                              <br>
                              <label class="control-label">
                                <textarea name="jawaban[{{$key}}][]" id="" row="8"></textarea>
                              </label>
                              @endif
                            </div>
                            @endforeach
                          </div>
                          @endif
                        </td>
                      </tbody>
                      @endforeach
                    </table>
                    <hr>
                    <br>
                    <legend class="text-bold text-center">Survey Kebutuhan Masyarakat</legend>
                    <table class="table table-togglable table-hover">
                      <thead>
                        <tr>
                          <!-- <th>No</th>
                          <th>Pertanyaan</th>
                          <th class="col-md-2">Jawaban</th> -->

                          <th data-toggle="true">Pertanyaan</th>
                          <th data-hide="phone">Deskripsi</th>
                          <th data-toggle="true" class="col-md-2">Jawaban</th>
                        </tr>
                      </thead>
                  
                      @foreach ($pertanyaan->where('kategori','Kebutuhan') as $key => $value)
                      <tbody>
                        <td width="500px">{{$value->pertanyaan}}</td>
                        <td width="300px">{{$value->deskripsi}}</td>
                        <td>
                          @if ($value->tipe == 'radio')
                          <div class="form-group">
                            <input type="hidden" name="pertanyaan_id[{{$key}}]" value="{{$value->id}}">
                            @foreach (\App\ComCode::where('code_group',$value->grup)->get() as $jawaban_component)
                            <div class="col-md-12" style="margin:0px;padding:0px">
                              <label class="radio-inline">
                                <input type="radio" name="jawaban[{{$key}}][]" class="" value="{{$jawaban_component->code_value}}">
                                {{$jawaban_component->code_nm}}
                              </label>
                            </div>
                            @endforeach
                          </div>
                          @elseif ($value->tipe == 'checkbox')
                          <div class="form-group">
                            <input type="hidden" name="pertanyaan_id[{{$key}}]" value="{{$value->id}}">
                            @foreach (\App\ComCode::where('code_group',$value->grup)->get() as $jawaban_component)
                            <div class="col-md-12" style="margin:0px;padding:0px">
                              <label class="checkbox-inline">
                                @if ($jawaban_component->tipe != 'textarea')
                                <input type="checkbox" name="jawaban[{{$key}}][]" class="" value="{{$jawaban_component->code_value}}">
                                {{$jawaban_component->code_nm}}
                                @endif
                              </label>
                              @if ($jawaban_component->tipe == 'textarea')
                              <br>
                              <label class="control-label">
                                <textarea name="jawaban[{{$key}}][]" id="" row="8"></textarea>
                              </label>
                              @endif
                            </div>
                            @endforeach
                          </div>
                          @endif
                        </td>
                      </tbody>
                      @endforeach
                    </table>
                  </div>
                </fieldset>
            <div id="div-back">
                <div class="col-xs-6">
                    <a href="{{route('warga.list',$trigTel)}}"type="button" class="btn btn-default" id=""> <i class="icon-arrow-left13"></i> Kembali</a>
                </div>
                <div class="col-xs-6 text-right">
                    <a id="btn-lanjutkan" class="btn btn-primary bg-primary-800">Lanjutkan <i class="icon-arrow-right14 position-right"></i></a>
                </div>
            </div>
            <div id="div-save" style="display:none">
                <div class="col-xs-6">
                    <a id="btn-sebelumnya" type="button" class="btn btn-default" id=""> <i class="icon-arrow-left13"></i> Sebelumnya</a>
                </div>
                <div class="col-xs-6 text-right" id="simpan">
                    <button type="submit" class="btn btn-primary bg-primary-800">Simpan <i class="icon-arrow-right14 position-right"></i></button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- /content area -->
@endsection
@push('after_script')
<script>
  $(document).ready(function () {
      $("#btn-lanjutkan").on("click", function () {
          $('#div-back').hide();
          $('#div-save').fadeIn();
          $('#div-alert').hide();
          $('#div-table').fadeIn();
      });
      $("#btn-sebelumnya").on("click", function () {
          $('#div-back').fadeIn();
          $('#div-save').hide();
          $('#div-alert').fadeIn();
          $('#div-table').hide();
      });
  });
</script>
@endpush
