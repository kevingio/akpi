@extends('layouts.app')
@section('title')
    {{ $publication->name }}
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
                    <div class="detail-program">
                        <h3 class="mgb-program">{{ $publication->name }}</h3>
                        <img src="{{ $publication->path }}" class="img-responsive mgb-md" alt="profil">
                        <p class="mgb-md text-justify">{{ $publication->description }}</p>
                        <p class="pull-right posted">Posted at {{ date('d F Y', strtotime($publication->created_at)) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
