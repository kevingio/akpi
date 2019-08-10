<div class="col-md-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Telusuri Lebih Lanjut</h3>
        </div>
        <div class="panel-body bg-panel">
            <div class="sidebar">
                <div class="nav nav-sidebar sidebar-menu">
                    <li class="{{ request()->is('profil-akpi') ? 'active' : '' }}"><a href="{{ url('/profil-akpi') }}">Profil AKPI</a></li>
                    <li class="{{ request()->is('profil-akpi/sejarah') ? 'active' : '' }}"><a href="{{ url('/profil-akpi/sejarah') }}">Sejarah AKPI</a></li>
                    <li class="{{ request()->is('profil-akpi/mars') ? 'active' : '' }}"><a href="{{ url('/profil-akpi/mars') }}">Mars AKPI</a></li>
                    <li class="{{ request()->is('profil-akpi/logo') ? 'active' : '' }}"><a href="{{ url('/profil-akpi/logo') }}">Logo AKPI</a></li>
                    <li class="{{ request()->is('profil-akpi/anggaran-dasar') ? 'active' : '' }}"><a href="{{ url('/profil-akpi/anggaran-dasar') }}">Anggaran Dasar</a></li>
                    <li class="{{ request()->is('profil-akpi/anggaran-rumah-tangga') ? 'active' : '' }}"><a href="{{ url('/profil-akpi/anggaran-rumah-tangga') }}">Anggaran Rumah Tangga</a></li>
                    <li class="{{ request()->is('profil-akpi/kode-etik') ? 'active' : '' }}"><a href="{{ url('/profil-akpi/kode-etik') }}">Kode Etik</a></li>
                    <li class="{{ request()->is('profil-akpi/pengurus') ? 'active' : '' }}"><a href="{{ url('/profil-akpi/pengurus') }}">Badan Pengurus Nasional</a></li>
                    <li class="{{ request()->is('profil-akpi/pendiri') ? 'active' : '' }}"><a href="{{ url('/profil-akpi/pendiri') }}">Pendiri</a></li>
                    <li class="{{ request()->is('profil-akpi/anggota-kehomatan') ? 'active' : '' }}"><a href="{{ url('/profil-akpi/anggota-kehormatan') }}">Anggota Kehormatan</a></li>
                    <li class="{{ request()->is('profil-akpi/pastoral-counselor') ? 'active' : '' }}"><a href="{{ url('/profil-akpi/pastoral-counselor') }}">Pastoral Counselor</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
