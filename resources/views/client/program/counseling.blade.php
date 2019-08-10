@extends('layouts.app')
@section('title')
    E-Counseling
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.program.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">E-Counseling</h2>
                </div>
                <div class="panel-body text-center">
                    <div class="detail-program">
                        <img src="{{ asset('dist/images/counseling.jpg') }}" alt="e-counseling">
                        <h4 style="margin-top: 35px;">Kami menyediakan layanan konseling masalah psikologis-sosial-spiritual</h4>
                        <h4>Hubungi kami:</h4>
                        <p>Jogja Counseling Center: 085741147333</p>
                        <p>Email:</p>
                        <p>info@iapcakpi.org</p>
                        <p class="mgb-program">akpi-iapc@gmail.com</p>
                        <div class="whatsapp">
                            <a href="https://api.whatsapp.com/send?phone=6285741147333" class="button btn-whatsapp btn-xl">Whatsapp</a>
                        </div>
                        <div class="whatsapp">
                            <a href="mailto:akpiiapc@gmail.com" class="button btn-danger btn-xl">Email</a>
                        </div>
                        <br>
                    </div>
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
