@extends('layouts.app')
@section('title')
    Pendiri AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.profile.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Pendiri</h>
                    </div>
                    <div class="panel-body">
                        <div class="mgb-md"></div>
                        <div class="row">
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Andreas M. Sumarno.png') }}" class="img-circle" alt="foto profile">
                                <h4>Andreas M. Sumarno</h4>
                                <p style="margin-bottom: 0px;">Salatiga</p>
                            </div>
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Daniel Tatang Efendi.png') }}" class="img-circle" alt="foto profile">
                                <h4>Daniel Tatang Efendi</h4>
                                <p style="margin-bottom: 0px;">Kediri</p>
                            </div>
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Jeni Martina Bailao.png') }}" class="img-circle" alt="foto profile">
                                <h4>Jeni Martina Bailao</h4>
                                <p style="margin-bottom: 0px;">Kupang</p>
                            </div>
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Ken Ratnawati.png') }}" class="img-circle" alt="foto profile">
                                <h4>Ken Ratnawati</h4>
                                <p style="margin-bottom: 0px;">Yogyakarta</p>
                            </div>
                        </div>
                        <div class="mgb-md"></div>
                        <div class="row">
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Lukas Eko Sukoco.png') }}" class="img-circle" alt="foto profile">
                                <h4>Lukas Eko Sukoco</h4>
                                <p style="margin-bottom: 0px;">Purworejo, Jateng</p>
                            </div>
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Paini.png') }}" class="img-circle" alt="foto profile">
                                <h4>Paini</h4>
                                <p style="margin-bottom: 0px;">Salatiga</p>
                            </div>
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Petrus Haryanto.png') }}" class="img-circle" alt="foto profile">
                                <h4>Petrus Haryanto</h4>
                                <p style="margin-bottom: 0px;">Salatiga</p>
                            </div>
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Rini Handayan.png') }}" class="img-circle" alt="foto profile">
                                <h4>Rini Handayan</h4>
                                <p style="margin-bottom: 0px;">Malang</p>
                            </div>
                        </div>
                        <div class="mgb-md"></div>
                        <div class="row">
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Rouli Retta Trifena Sinaga.JPG' )}}" class="img-circle" alt="foto profile">
                                <h4>Rouli Retta Trifena Sinaga</h4>
                                <p style="margin-bottom: 0px;">Jakarta</p>
                            </div>
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Sori Tjandrah Simbolon.png') }}" class="img-circle" alt="foto profile">
                                <h4>Sori Tjandrah Simbolon</h4>
                                <p style="margin-bottom: 0px;">Batu, Jawa Timur.</p>
                            </div>
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Sukorini Windrati.png') }}" class="img-circle" alt="foto profile">
                                <h4>Sukorini Windrati.png</h4>
                                <p style="margin-bottom: 0px;">Semarang</p>
                            </div>
                            <div class="col-md-3 profile-pendiri-4">
                                <img src="{{ asset('dist/images/founders/Totok S. Wiryasaputra.png') }}" class="img-circle" alt="foto profile">
                                <h4>Totok S. Wiryasaputra</h4>
                                <p style="margin-bottom: 0px;">Salatiga</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    @endsection
