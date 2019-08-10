@extends('layouts.app')
@section('title')
    Penerbitan AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.program.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Penerbitan AKPI</h2>
                </div>
                <div class="panel-body">
                    @foreach($publications as $publication)
                    <a href="{{ url('/program/penerbitan/' . $publication->id) }}">
                        <div class="row">
                            <div class="col-md-12 program">
                                <div class="program-image">
                                    <img src="{{ asset($publication->image) }}" alt="gambar penerbitan">
                                </div>
                                <div class="program-detail">
                                    <h3>{{ $publication->name }}</h3>
                                    <p>{{ $publication->description }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container">
    <center>
        <nav aria-label="...">
            <ul class="pagination">

            </ul>
        </nav>
    </center>
</div>
@endsection
