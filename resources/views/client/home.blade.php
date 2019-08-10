@extends('layouts.app')

@section('content')
<div>
    <div class="container-fluid frontImage" style="background-color: #947CB0;">
        <img class="ads" src="{{ asset('dist/images/header_akpi_.gif') }}" alt="img1">
        <div style="width: 100%; height: 15px; background-color: #3A539B;"></div>
        <div class="carousel slide" id="myCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach($banners as $key => $banner)
                <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="active"></li>
                @endforeach
            </ol>
            <div class="carousel-inner" style="min-height: 500px;">
                @foreach($banners as $key => $banner)
                <div class="item @if($loop->first) 'active' @endif">
                    <center><img src="{{ $banner->image }}" alt="Gambar {{ $key + 1 }}" style="margin:auto;" ></center>
                    <div class="carousel-caption d-none d-md-block text-right">
                        <h2>{{ $banner->name }}</h2>
                        <p>{{ date('l, d F Y', strtotime($banner->created_at)) }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            @if(!empty($banners) && sizeof($banners) > 0)
            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
            @endif
        </div>
    </div>
    <div class="container body" style="margin-top: 0px;">
        <div class="row">
            <div class="col-sm-6">
                <div class="box">
                    <div class="section-title">
                        <h3>KEGIATAN</h3>
                        <div>
                            @foreach($activities as $activity)
                            <a href="{{ url('/program/kegiatan/') . $activity->id }}">
                                <div class="article">
                                    <div class="article-image">
                                        <img src="{{ $activity->image }}" alt="foto artikel">
                                    </div>
                                    <div class="article-content">
                                        <h3>{{ $activity->name }}</h3>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="box">
                    <div class="section-title">
                        <h3>PROGRAM</h3>
                    </div>
                    <div>
                        @foreach($programs as $program)
                        <a href="{{ url('/program/detail/') . $program->id }}">
                            <div class="article">
                                <div class="article-image">
                                    <img src="{{ $program->image }}" alt="foto artikel">
                                </div>
                                <div class="article-content">
                                    <h3>{{ $program->name }}</h3>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    @if(!empty($quote))
    <div class="container-fluid quote-purple">
        <div class="container">
            <div class="col-lg-12">
                <a href="{{ asset($quote->image) }}" target="_blank">
                    <img src="{{ asset($quote->image) }}" alt="Walter Bagehot" align="center" style="width: auto; height: auto; max-height: 250px;" class="img-thumbnail">
                </a>
                <h4>- {{ $quote->author }}</h4>
                <p>Minggu ke-{{ date('W', strtotime($quote->created_at)) }}, {{ date('Y', strtotime($quote->created_at)) }}</p>
            </div>
        </div>
    </div>
    <br>
    @endif
    <div class="container-fluid bg-white counseling text-center">
        <h3>Kami menyediakan layanan konseling masalah psikologis-sosial-spiritual</h3>
        <h4>Hubungi kami via</h4>
        <p>Jogja Counseling Center: 085741147333</p>
        <p>Email:</p>
        <p>info@iapcakpi.org</p>
        <p class="mgb-program">akpiiapc@gmail.com</p>
        <div class="whatsapp">
            <a href="https://api.whatsapp.com/send?phone=6285741147333" class="button btn-whatsapp btn-xl">Whatsapp</a>
        </div>
        <div class="whatsapp">
            <a href="mailto:akpiiapc@gmail.com" class="button btn-danger btn-xl">Email</a>
        </div>
    </div>
</div>
@endsection
