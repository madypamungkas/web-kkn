@extends('layouts.app')
@section('content')
<!-- Page header -->
<div class="page-header">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class=""></i> <span class="text-semibold">File</span></h4>
        </div>
    </div>

    <div class="breadcrumb-line breadcrumb-line-component">
        <ul class="breadcrumb">
          <li><a href="{{route('dashboard.index')}}"><i class="icon-home2 position-left"></i> Dashboard</a></li>
          <li>Galeri</li>
          <li><a href="{{route('gambar.index')}}">File</a></li>
          <li class="active">Ubah</li>
        </ul>
    </div>
</div>
<!-- /page header -->


<!-- Content area -->
<div class="content">
    <div class="panel panel-flat">
        <div class="panel-body">
            <form class="form-horizontal form-validate-jquery" action="{{route('gambar.update',$data->id)}}" method="post" enctype="multipart/form-data" files=true>
            @method('PUT')
            @csrf
                <fieldset class="content-group">
                <legend class="text-bold">Unggah File</legend>
                <div class="form-group pertanyaan" id="pertanyaan">
                    <label class="control-label col-lg-3">Tipe File <span class="text-danger">*</span></label>
                    <div class="col-lg-9 pertanyaan-inner">
                        <select name="tipe" id="tipe">
                            @if ($data->tipe == 'gambar')
                            <option value="gambar" selected>Gambar</option>
                            <option value="video">Video</option>
                            @else
                            <option value="gambar">Gambar</option>
                            <option value="video" selected>Video</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="form-group pertanyaan" id="pertanyaan">
                    <label class="control-label col-lg-3">Judul File <span class="text-danger">*</span></label>
                    <div class="col-lg-9 pertanyaan-inner">
                        <textarea type="text" name="judul_file" rows="1" class="form-control" required placeholder="">{{ old('judul_file') ? old('judul_file') : $data->judul_file }}</textarea>
                    </div>
                </div>
                <div class="form-group pertanyaan" id="pertanyaan">
                    <label class="control-label col-lg-3">Deskripsi <span class="text-danger">*</span></label>
                    <div class="col-lg-9 pertanyaan-inner">
                        <textarea type="text" name="deskripsi" rows="1" class="form-control" required placeholder="">{{ old('deskripsi')  ? old('deskripsi') : $data->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="form-group pertanyaan" id="pertanyaan">
                    <label class="control-label col-lg-3">Url</label>
                    <div class="col-lg-9 pertanyaan-inner">
                        <textarea type="url" name="url" rows="1" class="form-control" placeholder="">{{ old('url')  ? old('url') : $data->url}}</textarea>
                    </div>
                </div>
                </fieldset>
            <div>

            <div class="col-md-4">
                <a href="{{route('gambar.index')}}"type="button" class="btn btn-default" id=""> <i class="icon-arrow-left13"></i> Kembali</a>
            </div>
                <div class="col-md-8 text-right">
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
        $(document).ready(function(){
            $('#tipe').select2();
        });
    </script>
@endpush
