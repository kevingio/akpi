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
                            <li><a href="{{ route('admin.quote.create') }}">Tambah Quote Baru</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Daftar Quote</h2>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-product">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No.</th>
                                <th>Quote</th>
                                <th>Author</th>
                                <th>Minggu</th>
                                <th>Tahun</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quotes as $key => $quote)
                            <tr>
                                <th scope="row">{{ $quote->id }}</th>
                                <td><img src="{{ asset($quote->image) }}" alt="quotes" width="100%" height="auto"></td>
                                <td>{{ $quote->author }}</td>
                                <td>{{ date('W', strtotime($quote->created_at)) }}</td>
                                <td>{{ date('Y', strtotime($quote->created_at)) }}</td>
                                <td class="text-center">
                                    <a
                                        class="delete"
                                        href="javascript: void(0)"
                                        onclick="event.preventDefault();
                                                  document.getElementById('delete-form-{{ $quote->id }}').submit();"
                                    >
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <form id="delete-form-{{ $quote->id }}" action="{{ route('admin.quote.destroy', [$quote]) }}" method="post" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center d-block">
                        {{ $quotes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
