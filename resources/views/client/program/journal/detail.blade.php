@extends('layouts.app')
@section('title')
    {{ $journal->name }}
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.program.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">E-Journal</h2>
                </div>
                <div class="panel-body">
                    <h3 class="mgb-lg text-center">{{ $journal->name }}</h3>
                    <object width="100%" height="720px" data="https://docs.google.com/gview?embedded=true&url={{ asset($journal->path) }}"></object>
                    <p class="mgb-md text-justift">{{ $journal->description }}</p>
                    <p class="pull-right posted">No. Journal {{ $journal->journal_no }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
