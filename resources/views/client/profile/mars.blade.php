@extends('layouts.app')
@section('title')
    Mars AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.profile.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Mars AKPI</h2>
                </div>
                <div class="panel-body">
                    <object width="100%" height="720px" data="https://docs.google.com/gview?embedded=true&url=http://iapcakpi.org/dist/src/mars.pdf"></object>
                    <div class="mgb-md"></div>
                    <h4>Preview Audio Mars</h4>
                    <audio controls src="{{ asset('dist/src/mars.mp3') }}"></audio>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
