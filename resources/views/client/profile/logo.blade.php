@extends('layouts.app')
@section('title')
    Logo AKPI
@endsection
@section('content')
<div class="container body">
    <div class="row">
        @include('client.profile.sidemenu')
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Arti Logo AKPI</h2>
                </div>
                <div class="panel-body">
                    <center><img src="{{ asset('dist/images/logo.jpg') }}" class="img-responsive mgb-md" alt="profil"></center>
                    <h4>Makna Logo Asosiasi Konselor Pastoral Indonesia</h4>
                    <ol type="number">
                        <li class="basic-text mgb-md">Logo AKPI terdiri atas tiga (3) simbol, yakni lingkaran besar berwarna biru donker, lingkaran kecil berwarna merah darah, dan pita berwarna merah darah bertuliskan "Grow Professionally".</li>
                        <li class="basic-text mgb-md">Lingkaran besar berwarna biru dan lingkaran kecil berwarna merah menggambarkan baik konselor maupun konseli adalah manusia sederajat dan memiliki empat aspek utama, yakni fisik, mental, sosial, dan spiritual yang berbeda namun saling terkait dan memengaruhi.</li>
                        <li class="basic-text mgb-md">Lingkaran berujung runcing-runcing yang saling berhadapan menggambarkan konselor dan konseli melakukan perjumpaan dan berelasi secara dinamis dalam proses konseling sehingga konseli berubah, bertumbuh, berfungsi, dan bermakna.</li>
                        <li class="basic-text mgb-md">Lingkaran besar berwarna biru menggambarkan konseli memiliki peranan yang lebih besar daripada konselor dalam proses konseling.</li>
                        <li class="basic-text mgb-md">Lingkaran kecil berwarna merah berhadapan dengan lingkaran besar berwarna biru menggambarkan konselor masuk kedalam dunia pengalaman konseli tanpa terhanyut sehingga mampu memfasilitasi konseli berubah, bertumbuh, berfungsi, dan bermakna.</li>
                        <li class="basic-text mgb-md">Pita merah dibawah kedua lingkaran bertuliskan "Grow Professionally" menggambarkan konselor pastoral AKPI saling menolong, menumbuhkan, dan mengubah sehingga mampu menolong konseli secara indvidual, pasangan, keluarga, kelompok, dan komunitas secara profesional.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br>
@endsection
