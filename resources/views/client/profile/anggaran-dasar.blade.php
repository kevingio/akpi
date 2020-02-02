@extends('layouts.app')
@section('title')
    Anggaran Dasar AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.profile.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Anggaran Dasar</h2>
                </div>
                <div class="panel-body">
                    <object width="100%" height="862px" data="https://docs.google.com/gview?embedded=true&url={{ asset('storage/src/ad.pdf') }}"></object>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
