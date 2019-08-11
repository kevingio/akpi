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
                            <li class="active"><a href="{{ route('admin.mars.show', ['pdf']) }}">Update File PDF Mars</a></li>
                            <li><a href="{{ route('admin.mars.show', ['music']) }}">Update File MP3 Mars</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Mars AKPI</h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.mars.show', ['pdf']) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="email">File PDF:</label>
                            <input type="file" name="data" accept="application/pdf" required>
                        </div>
                        <button type="submit" class="btn btn-default">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
