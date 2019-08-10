@extends('layouts.app')
@section('title')
    E-Journal AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.program.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">E-Journal AKPI</h2>
                </div>
                <div class="panel-body">
                    @foreach($journals as $journal)
                    <a href="{{ url('/program/journal/' . $journal->id) }}">
                        <div class="row">
                            <div class="col-md-12 program">
                                <div class="program-image">
                                    <img src="{{ asset($journal->thumbnail) }}" alt="gambar jurnal">
                                </div>
                                <div class="program-detail">
                                    <h3>{{ $journal->name }}</h3>
                                    <p>{{ $journal->abstract }}</p>
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
