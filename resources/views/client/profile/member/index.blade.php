@extends('layouts.app')
@section('title')
    Anggota Kehormatan AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.profile.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">{{ ucwords(str_replace('-', ' ', request()->type)) }}</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($data as $item)
                        <div class="col-md-3 profile-pendiri-4">
                            <a href="{{ url('/profil-akpi/anggota?type=' . request()->type . '&filter=' . $item) }}">
                                <p>{{ strtoupper($item) }}</p>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
