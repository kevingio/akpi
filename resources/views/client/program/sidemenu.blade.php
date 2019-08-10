<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Telusuri Lebih Lanjut</h3>
        </div>
        <div class="panel-body bg-panel">
            <div class="sidebar">
                <div class="nav nav-sidebar sidebar-menu">
                    <li class="{{ request()->is('program') || request()->is('program/detail/*') ? 'active' : '' }}"><a href="{{ url('/program') }}">Program</a></li>
                    <li class="{{ request()->is('program/kegiatan') || request()->is('program/kegiatan/*') ? 'active' : '' }}"><a href="{{ url('/program/kegiatan') }}">Kegiatan</a></li>
                    <li class="{{ request()->is('program/journal') || request()->is('program/journal/*') ? 'active' : '' }}"><a href="{{ url('/program/journal') }}">E-Journal</a></li>
                    <li class="{{ request()->is('program/counseling') ? 'active' : '' }}"><a href="{{ url('/program/counseling') }}">E-Counseling</a></li>
                    <li class="{{ request()->is('program/penerbitan') || request()->is('program/penerbitan/*') ? 'active' : '' }}"><a href="{{ url('/program/penerbitan') }}">Penerbitan</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
