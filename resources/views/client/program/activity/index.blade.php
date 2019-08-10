@extends('layouts.app')
@section('title')
    Kegiatan AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.program.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Kegiatan AKPI</h2>
                </div>
                <div class="panel-body">
                    @foreach($activities as $activity)
                    <a href="{{ url('/program/kegiatan/' . $activity->id) }}">
                        <div class="row">
                            <div class="col-md-12 program">
                                <div class="program-image">
                                    <img src="{{ asset($activity->image) }}" alt="gambar kegiatan">
                                </div>
                                <div class="program-detail">
                                    <h3>{{ $activity->name }}</h3>
                                    <p>{{ $activity->description }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            {{ $activities->links() }}
        </div>
    </div>
</div>
@endsection
