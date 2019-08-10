@extends('layouts.app')
@section('title')
    Galeri Kegiatan
@endsection
@section('content')
<div class="container body">
    @foreach($gallery->chunk(2) as $data)
    <div class="row">
        @foreach($data as $item)
        <div class="col-md-6 text-center">
            <iframe width="100%" height="300" src="{{ $item->youtube_url }}"></iframe>
            <h3>{{ $item->event_name }}</h3>
            <p>{{ date('l, d F Y', strtotime($item->created_at)) }}</p>
        </div>
        @endforeach
    </div>
    @endforeach
</div>
<br><br>
@endsection
