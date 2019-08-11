<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Telusuri Lebih Lanjut</h3>
    </div>
    <div class="panel-body bg-panel">
        <div class="sidebar">
            <div class="nav nav-sidebar sidebar-menu">
                <li @if(request()->is('*/mars') || request()->is('*/mars/*')) class="active" @endif><a href="{{ route('admin.mars.index') }}">Mars AKPI</a></li>
                <li @if(request()->is('*/anggaran-dasar') || request()->is('*/anggaran-dasar/*')) class="active" @endif><a href="{{ route('admin.anggaran-dasar.index') }}">Anggaran Dasar</a></li>
                <li @if(request()->is('*/anggaran-rumah-tangga') || request()->is('*/anggaran-rumah-tangga/*')) class="active" @endif><a href="{{ route('admin.anggaran-rumah-tangga.index') }}">Anggaran Rumah Tangga</a></li>
                <li @if(request()->is('*/kode-etik') || request()->is('*/kode-etik/*')) class="active" @endif><a href="{{ route('admin.kode-etik.index') }}">Kode Etik</a></li>
                <li @if(request()->is('*/pengurus') || request()->is('*/pengurus/*')) class="active" @endif><a href="{{ route('admin.mars.index') }}">Badan Pengurus Nasional</a></li>
                <li @if(request()->is('*/anggota') || request()->is('*/anggota/*')) class="active" @endif><a href="{{ route('admin.mars.index') }}">Anggota</a></li>
                <li @if(request()->is('*/banner') || request()->is('*/banner/*')) class="active" @endif><a href="{{ route('admin.banner.index') }}">Slideshow</a></li>
            </div>
        </div>
    </div>
</div>
