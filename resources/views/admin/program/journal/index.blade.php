@extends('admin.layouts.app')

@section('content')
<div class="container body">
    <div class="row">
        <div class="col-md-3">
            @include('admin.program.sidemenu')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Menu</h3>
                </div>
                <div class="panel-body bg-panel">
                    <div class="sidebar">
                        <div class="nav nav-sidebar sidebar-menu">
                            <li><a href="{{ route('admin.journal.create') }}">Tambah Journal Baru</a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Daftar Journal</h2>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-product">
                        <thead class="thead-inverse">
                            <tr>
                                <th>No. Journal</th>
                                <th>Nama Journal</th>
                                <th>Waktu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($journals as $key => $journal)
                            <tr>
                                <td>{{ $journal->journal_no }}</td>
                                <td>{{ $journal->name }}</td>
                                <td>{{ date('l, d F Y', strtotime($journal->created_at)) }}</td>
                                <td class="text-center">
                                    <a href="{{ route('admin.journal.edit', [$journal->id]) }}">
                                        <i class="fa fa-pencil mr-2" aria-hidden="true"></i>
                                    </a>
                                    <a
                                        class="delete"
                                        href="javascript: void(0)"
                                        onclick="event.preventDefault();
                                        document.getElementById('delete-form-{{ $journal->id }}').submit();"
                                        >
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                                <form id="delete-form-{{ $journal->id }}" action="{{ route('admin.journal.destroy', [$journal->id]) }}" method="post" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center d-block">
                        {{ $journals->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
