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
                    <h2 class="panel-title">Edit Journal</h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.journal.update', [$journal->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <h4 for="cover">Thumbnail Journal (.jpeg/.jpg)</h4>
                                    <input type="file" name="image" onchange="readIMG(this);" accept="image/*">
                                    <div class="pdt-md preview-gambar-program">
                                        <img src="{{ asset($journal->thumbnail) }}" id="image" alt="Thumbnail">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h4 for="cover">File Journal (.pdf)</h4>
                                    <input type="file" name="pdf" onchange="readPDF(this);" accept="application/pdf">
                                    <div class="pdt-md preview-gambar-program">
                                        <object data="{{ asset($journal->path) }}" type="application/pdf" width="100%" height="333px" id="pdf"></object>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label>Nama Journal</label>
                                    <input class="form-control" type="text" autocomplete="off" value="{{ $journal->name }}" name="name" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nomor Journal</label>
                                    <input class="form-control" type="text" autocomplete="off" value="{{ $journal->journal_no }}" name="journal_no" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Abstraksi</label>
                            <textarea name="abstract" rows="10" class="form-control" required>{{ $journal->abstract }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" name="post">Edit</button>
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
