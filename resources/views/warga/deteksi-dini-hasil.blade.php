@extends('warga.layouts.app')
@section('content')
<!-- Content area -->
<div class="content">
    <div class="panel panel-flat">
        <div class="panel-body">
            <div>
              <fieldset class="content-group  text-center">
                  <!-- <legend class="text-bold">Hasil Skrining COVID-19 </legend> -->
                  <div class="alert alert-info no-border col-md-12">
                    <!-- Hasil dari screening mandiri sebagai berikut : <br> -->
                    <h4 style="font-family:sans-serif;">Anda termasuk dalam kategori <span class="text-semibold"><b>{{$hasil->hasil}}.</b></span></h4>
                    <?php if ($hasil->gambar): ?>
                      <img src='{{$gambar}}' alt="" style="width:150px"><br>
                    <?php endif; ?>
                    <h4 style="font-family:sans-serif;">Selanjutnya, yang harus Anda lakukan adalah: <br>
                    <b>{{$hasil->tatalaksana}}</b></h4>

                  </div>
                  <div class="col-md-12" style="margin-bottom:10px">
                    <a href="{{url('/')}}" type="button" class="btn bg-slate-400 btn-default" id=""> <i class="icon-home5"></i> Dashboard</a>
                  </div>
              </fieldset>
            </div>
        </div>
    </div>
</div>
<!-- /content area -->
@endsection
@push('after_script')
<script>
$(document).ready(function(){
			$(".enter-to-p").each(function(){
			        var count = $(this).text().split('\n').length - 1;
			        for (var i = 0; i < count; i++) {
			          var p = $(this).html();
			          var newP = p.replace("\n\n", "</p><p class='mb-4'>");
			          $(this).html(newP);
			        }
			      });
					});
</script>
@endpush
