@extends('admin.layouts.app')

@section('content')
<div class="container body">
    <div class="row">
        <div class="col-md-3">
            @include('admin.program.sidemenu')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Tambah Penerbitan Baru</h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.penerbitan.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <h4 for="cover">Foto Penerbitan</h4>
                                    <input type="file" name="image" onchange="readURL(this);" accept="image/*" required>
                                    <div class="pdt-md preview-gambar-program">
                                        <img src="https://dummyimage.com/200x30/ffffff/fff" id="cover" alt="Foto Profile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Penerbitan</label>
                            <input class="form-control" type="text" name="name" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kegiatan</label>
                            <input class="form-control" type="date" name="created_at" autocomplete="off" required>
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea name="description" rows="10" class="form-control" autocomplete="off" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="post">Post</button>
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
