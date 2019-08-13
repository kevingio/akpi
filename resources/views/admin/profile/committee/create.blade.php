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
                    <h2 class="panel-title">Tambah Badan Pengurus Nasional AKPI</h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.pengurus.store') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Anggota</label>
                                    <select class="form-control" name="member_id" required>
                                        @foreach($availableMembers as $member)
                                        <option value="{{ $member->id }}">{{ $member->name . ' - ' . $member->member_nor }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <select class="form-control" name="position_id" required>
                                        @foreach($availablePositions as $position)
                                        <option value="{{ $position->id }}">{{ $position->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Periode</label>
                                    <select name="period_id" class="form-control" required>
                                        @foreach($periods as $period)
                                        <option value="{{ $period->id }}" @if($loop->last) selected @endif>{{ $period->start  . ' - ' . $period->end }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
