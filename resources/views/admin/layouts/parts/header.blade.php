<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/admin') }}">AKPI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ request()->is('/admin/profil-akpi') || request()->is('/admin/profil-akpi/*') ? 'active' : '' }}"><a href="{{ url('/admin/profil-akpi') }}">Siapakah AKPI</a></li>
                <li class="{{ request()->is('/admin/program') || request()->is('/admin/program/*') ? 'active' : '' }}"><a href="{{ url('/admin/program') }}">Apa yang AKPI kerjakan</a></li>
                <li class="{{ request()->is('/admin/galeri') ? 'active' : '' }}"><a href="{{ url('/admin/galeri') }}">Galeri</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/admin/ganti-password') }}">Ganti Password</a></li>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
