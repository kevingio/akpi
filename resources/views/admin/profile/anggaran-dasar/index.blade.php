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
                            <li><a href="{{ route('admin.anggaran-dasar.show', ['pdf']) }}">Update File PDF Anggaran Dasar</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Anggaran Dasar AKPI</h2>
                </div>
                <div class="panel-body">
                    <object width="100%" height="720px" data="https://docs.google.com/gview?embedded=true&url={{ asset('assets/src/ad.pdf') }}"></object>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
