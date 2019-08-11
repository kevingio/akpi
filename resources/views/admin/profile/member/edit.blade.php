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
                    <h2 class="panel-title">Tambah Anggota AKPI</h2>
                </div>
                <div class="panel-body">
                    <form action="{{ route('admin.anggota.update', [$member->id]) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" name="name" class="form-control" value="{{ $member->name }}" autocomplete="off" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nama">Nomor Anggota</label>
                                            <input type="text" name="member_no" class="form-control" value="{{ $member->member_no }}" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Tipe</label>
                                            <select class="form-control" name="type" required>
                                                <option value="anggota kehormatan" @if($member->type == 'anggota kehormatan') selected @endif>Anggota Kehormatan</option>
                                                <option value="pastoral counselor" @if($member->type == 'pastoral counselor') selected @endif>Pastoral Counselor</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Lokasi</label>
                                            <input type="text" name="location" class="form-control" value="{{ $member->location }}" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nomor HP</label>
                                            <input type="text" name="phone_number" class="form-control" value="{{ $member->phone_number }}" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <input type="text" name="status" class="form-control" value="{{ $member->status }}" autocomplete="off" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <h4 for="cover">Foto Profile</h4>
                                    <input type="file" name="image" onchange="readURL(this);" accept="image/*" style="width: 100%;">
                                    <div class="pdt-md preview-profile">
                                        <img src="{{ asset($member->avatar) }}" id="cover" alt="Foto Profile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" style="margin-top: 20px;" class="btn btn-primary">Edit</button>
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
