@extends('admin.layouts.app')

@section('content')
<div class="container body">
    <div class="row">
        <div class="col-md-3">
            @include('admin.profile.sidemenu')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                </div>
                <div class="panel-body bg-panel">
                    <div class="sidebar">
                        <div class="nav nav-sidebar sidebar-menu">
                            <li><a href="{{ route('admin.banner.create') }}">Tambah Gambar</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Gambar Slideshow</h2>
                </div>
                <div class="panel-body">
                    <div class="carousel slide" id="myCarousel" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($banners as $key => $banner)
                            <li data-target="#myCarousel" data-slide-to="{{ $key }}" @if($loop->first) class="active" @endif></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($banners as $key => $banner)
                            <div class="item @if($loop->first) active @endif">
                                <center>
                                    <img src="{{ asset($banner->path) }}" alt="Gambar {{ $key + 1 }}" style="margin:auto;" >
                                </center>
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
                    <br>
                    <table class="table table-striped table-product">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Tanggal Upload</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($banners as $key => $banner)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $banner->title }}</td>
                                <td>{{ date('l, d F Y', strtotime($banner->created_at)) }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.banner.edit', [$banner]) }}">
                                        <i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                                    </a>
                                    <a
                                        class="delete"
                                        href="javascript: void(0)"
                                        onclick="event.preventDefault();
                                                  document.getElementById('delete-form-{{ $banner->id }}').submit();"
                                    >
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <form id="delete-form-{{ $banner->id }}" action="{{ route('admin.banner.destroy', [$banner]) }}" method="post" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
