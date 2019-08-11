@extends('admin.layouts.app')

@section('content')
<div class="container body">
    <div class="row">
        <div class="col-md-3">
            @include('admin.profile.sidemenu')
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Edit Gambar Slideshow</h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.banner.update', [$banner]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama">Judul Gambar</label>
                                    <input type="text" name="title" class="form-control" autocomplete="off" value="{{ $banner->title }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="cover">Gambar untuk slideshow</label>
                                    <input type="file" name="data" onchange="readURL(this);">
                                    <div class="pdt-md preview-gambar-program">
                                        <img src="{{ asset($banner->path) }}" id="cover" alt="Gambar">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-default">Edit</button>
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
