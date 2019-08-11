@extends('admin.layouts.app')

@section('content')
<div class="container body">
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                </div>
                <div class="panel-body bg-panel">
                    <div class="sidebar">
                        <div class="nav nav-sidebar sidebar-menu">
                            <li class="active"><a href="{{ route('admin.banner.create') }}">Tambah Gambar</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Tambah Gambar Slideshow</h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.banner.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama">Judul Gambar</label>
                                    <input type="text" name="title" class="form-control" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <label for="cover">Gambar untuk slideshow</label>
                                    <input type="file" name="image" accept="image/*" onchange="readURL(this);" required>
                                    <div class="pdt-md preview-gambar-program">
                                        <img src="https://dummyimage.com/200x30/ffffff/fff" id="cover" alt="Foto Profile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#cover').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
