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
                    <h2 class="panel-title">Tambah Quote Baru</h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.quote.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Author</label>
                            <input class="form-control" type="text" name="author" required>
                        </div>
                        <div class="form-group">
                            <label for="cover">Gambar</label>
                            <input type="file" name="image" onchange="readURL(this);" accept="image/*" required>
                            <div class="pdt-md">
                                <img src="{{ asset('dist/images/default-pp.jpg') }}" id="cover" alt="Foto Profile" style="width: auto; max-height: 250px;">
                            </div>
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
