@extends('layouts.app')
@section('title')
    {{ $activity->name }}
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
                    <div class="detail-program">
                        <h3 class="mgb-program">{{ $activity->name }}</h3>
                        <img src="{{ $activity->path }}" class="img-responsive mgb-md" alt="profil">
                        <p class="mgb-md text-justify">{{ $activity->description }}</p>
                        <p class="pull-right posted">Posted at {{ date('d F Y', strtotime($activity->created_at)) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
