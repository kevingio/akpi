@extends('layouts.app')
@section('title')
    Anggota Kehormatan
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
                        @foreach($members as $item)
                        <div class="col-md-3 profile-pendiri-4">
                            <img src="{{ asset($item->avatar) }}" class="img-rounded" alt="foto profile">
                            <h4  style="margin-bottom: 0px;">{{ $item->name }}</h4>
                            <p style="margin-bottom: 0px;">{{ $item->location }}</p>
                            <p>{{ $item->phone_number }}</p>
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
