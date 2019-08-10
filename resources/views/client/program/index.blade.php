@extends('layouts.app')
@section('title')
    Program AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.program.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Program AKPI</h2>
                </div>
                <div class="panel-body">
                    @foreach($programs as $program)
                    <a href="{{ url('/program/detail/' . $program->id) }}">
                        <div class="row">
                            <div class="col-md-12 program">
                                <div class="program-image">
                                    <img src="{{ $program->image }}" alt="gambar program">
                                </div>
                                <div class="program-detail">
                                    <h3>{{ $program->name }}</h3>
                                    <p>{{ $program->description }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-12 text-center">
            {{ $programs->links() }}
        </div>
    </div>
</div>
@endsection
