@extends('layouts.app')
@section('title')
    Pengurus AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.profile.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Badan Pengurus Nasional</h>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="mgb-md text-center">
                                <h4>Periode</h4>
                                <form action="{{ url('/profil-akpi/pengurus') }}" method="get">
                                    <select name="periode" required onchange="this.form.submit()">
                                        @foreach($periods as $period)
                                        <option value="{{ $period->id }}" @if(!empty(request()->periode) && request()->periode == $period->id) selected @endif>{{ $period->start . ' - ' . $period->end }}</option>
                                        @endforeach
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="row" style="padding-top: 40px;">
                            @foreach($committees->take(2) as $committee)
                            <div class="col-md-6 profile-pendiri">
                                <center>
                                    <img src="{{ $committee->member->avatar }}" style="height: 200px;" class="img-responsive img-circle" alt="foto profile">
                                </center>
                                <h4>{{ $committee->position->name }}</h4>
                                <p>{{ $committee->member->name }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="row" style="padding-top: 40px;">
                            @foreach($committees->slice(2, 4) as $committee)
                            <div class="col-md-3 profile-pendiri-4">
                                <center>
                                    <img src="{{ $committee->member->avatar }}" style="height: 200px;" class="img-responsive img-circle" alt="foto profile">
                                </center>
                                <h4>{{ $committee->position->name }}</h4>
                                <p>{{ $committee->member->name }}</p>
                            </div>
                            @endforeach
                        </div>
                        <div class="row" style="padding-top: 40px;">
                            @foreach($committees->slice(6,1) as $committee)
                            <div class="col-md-12 profile-pendiri">
                                <center>
                                    <img src="{{ $committee->member->avatar }}" style="height: 200px;" class="img-responsive img-circle" alt="foto profile">
                                </center>
                                <h4>{{ $committee->position->name }}</h4>
                                <p>{{ $committee->member->name }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
