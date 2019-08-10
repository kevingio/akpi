@extends('layouts.app')
@section('title')
    Temui Kami
@endsection
@section('content')
<div class="container body">
    <div class="row">
        <div class="col-md-12">
            <h2>Temui Kami</h2>
        </div>
        <div class="col-md-4">
            <h3>Sekretariat Nasional</h3>
            <hr>
            <p>Jl. Palem Hijau No. 16, Gesikan</p>
            <p>Jago (Jalan Godean) Km. 7,5 Yogyakarta. 55564</p>
            <p>Indonesia</p>

            <h3>Hubungi</h3>
            <hr>
            <h4>Email</h4>
            <p>akpiiapc@gmail.com</p>
            <p>info@iapcakpi.org</p>
            <p>HP: 085741147333</p>
            <p>Tlp: 0274 - 2821755</p>
        </div>
        <div class="col-md-8">
            <img src="{{ asset('dist/images/kantor.jpg') }}" class="img-responsive" style="max-width: 100%;" alt="kantor">
        </div>
    </div>
</div>
<br><br>
@endsection
