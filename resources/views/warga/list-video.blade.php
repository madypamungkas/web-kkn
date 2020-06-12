@foreach ($video as $key => $value)
<div class="col-lg-4 col-sm-6">
    <div class="thumbnail">
        <div class="thumb">
            <iframe src="{{$value->url}}" width="100%" height="300px"></iframe>
            <div class="caption">
                <h6 class="no-margin-top text-semibold">{{$value->judul_file}}</h6>
                {{$value->deskripsi}}
            </div>
        </div>
    </div>
</div>
@endforeach
<div class="col-lg-12 text-center" id="video">
    {{ $video->links() }}
</div>