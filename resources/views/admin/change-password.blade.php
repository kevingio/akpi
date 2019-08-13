@extends('admin.layouts.app')

@section('content')
<div class="container body">
    <div class="login-panel">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <div class="panel-body">
                    <form action="{{ url('/admin/ganti-password') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="usr">Password Lama</label>
                            <input type="password" class="form-control" name="old_password" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password Baru</label>
                            <input type="password" class="form-control" name="password" required>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Retype Password Baru</label>
                            <input type="password" class="form-control" name="retype" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Ganti Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
