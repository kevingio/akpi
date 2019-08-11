@extends('admin.layouts.app')

@section('content')
<div class="container body">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Telusuri Lebih Lanjut</h3>
                </div>
                <div class="panel-body">
                    <div class="sidebar">
                        <div class="nav nav-sidebar sidebar-menu">
                            <li class="active"><a href="{{ route('admin.galeri.index') }}">Daftar Video</a></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                </div>
                <div class="panel-body">
                    <div class="sidebar">
                        <div class="nav nav-sidebar sidebar-menu">
                            <li><a href="{{ route('admin.galeri.create') }}">Tambah Video</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Tambah Video ke Galeri</h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.galeri.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Nama Kegiatan</label>
                            <input class="form-control" type="text" name="event_name" autocomplete="off" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Link video dari Youtube</label>
                                    <input class="form-control" type="text" name="youtube_url" autocomplete="off" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Kegiatan</label>
                                    <input class="form-control" type="date" name="event_date" autocomplete="off" required>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
