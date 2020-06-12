@foreach ($gambar as $key => $value)
<div class="col-lg-4 col-sm-6">
    <div class="thumbnail">
        <div class="thumb">
            <img class="img" src='{{$value->url}}' alt="">
            <div class="caption-overflow">
                <span>
                    <a href='{{$value->url}}' data-popup="lightbox"
                        rel="gallery"
                        class="btn border-white text-white btn-flat btn-icon btn-rounded"><i
                            class="icon-download"></i></a>
                </span>
            </div>
            <div class="caption">
                <h6 class="no-margin-top text-semibold">{{$value->judul_file}}</h6>
                {{$value->deskripsi}}
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="col-lg-12 text-center" id="gambar">
    {{ $gambar->links() }}
</div>