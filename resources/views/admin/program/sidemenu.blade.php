<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Telusuri Lebih Lanjut</h3>
    </div>
    <div class="panel-body bg-panel">
        <div class="sidebar">
            <div class="nav nav-sidebar sidebar-menu">
                <li class="{{ request()->is('admin/program') || request()->is('admin/program/create') ? 'active' : '' }}"><a href="{{ url('admin/program') }}">Program</a></li>
                <li class="{{ request()->is('admin/program/kegiatan') || request()->is('admin/program/kegiatan/*') ? 'active' : '' }}"><a href="{{ url('admin/program/kegiatan') }}">Kegiatan</a></li>
                <li class="{{ request()->is('admin/program/journal') || request()->is('admin/program/journal/*') ? 'active' : '' }}"><a href="{{ url('admin/program/journal') }}">E-Journal</a></li>
                <li class="{{ request()->is('admin/program/penerbitan') || request()->is('admin/program/penerbitan/*') ? 'active' : '' }}"><a href="{{ url('admin/program/penerbitan') }}">Penerbitan</a></li>
            </div>
        </div>
    </div>
</div>
