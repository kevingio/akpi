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
                            <li><a href="{{ route('admin.pengurus.create') }}">Tambah Pengurus</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Badan Pengurus Nasional AKPI</h2>
                </div>
                <div class="panel-body">
                    <div class="mgb-md text-center">
                        <h4>Periode</h4>
                        <select name="periode">
                            @foreach($periods as $period)
                            <option value="{{ $period->id }}" @if($loop->last) selected @endif>{{ $period->start . ' - ' . $period->end }}</option>
                            @endforeach
                        </select>
                    </div>
                    <table class="table table-striped table-product">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Lokasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($committees as $key => $committee)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $committee->member->name }}</td>
                                <td>{{ $committee->position->name }}</td>
                                <td>{{ $committee->member->location }}</td>
                                <td class="text-center">
                                    <a
                                        class="delete"
                                        href="javascript: void(0)"
                                        onclick="event.preventDefault();
                                                  document.getElementById('delete-form-{{ $committee->id }}').submit();"
                                    >
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <form id="delete-form-{{ $committee->id }}" action="{{ route('admin.pengurus.destroy', [$committee]) }}" method="post" style="display: none;">
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
