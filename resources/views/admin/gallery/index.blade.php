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
                    <h2 class="panel-title">Daftar Video di Galeri</h2>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-product">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No.</th>
                                <th>Nama Kegiatan</th>
                                <th>Waktu</th>
                                <th>Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($galleries as $key => $value)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $value->event_name }}</td>
                                <td>{{ date('l, d F Y', strtotime($value->event_date)) }}</td>
                                <td>{{ $value->youtube_url }}</td>
                                <td class="text-center">
                                    <a
                                        class="delete"
                                        href="javascript: void(0)"
                                        onclick="event.preventDefault();
                                                  document.getElementById('delete-form-{{ $value->id }}').submit();"
                                    >
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <form id="delete-form-{{ $value->id }}" action="{{ route('admin.galeri.destroy', [$value]) }}" method="post" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </tr>
                            @endforeach
                            @if(sizeof($galleries) == 0)
                            <tr>
                                <td colspan="5" class="text-center">Belum ada data</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
