<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120511728-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-120511728-2');
</script> -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">AKPI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="{{ request()->is('profil-akpi') || request()->is('profil-akpi/*') ? 'active' : '' }}"><a href="{{ url('/profil-akpi') }}">Siapakah AKPI</a></li>
                <li class="{{ request()->is('program') || request()->is('program/*') ? 'active' : '' }}"><a href="{{ url('/program') }}">Apa yang AKPI kerjakan</a></li>
                <li class="{{ request()->is('galeri') ? 'active' : '' }}"><a href="{{ url('/galeri') }}">Galeri</a></li>
                <li class="{{ request()->is('galeri') ? 'active' : '' }}"><a href="{{ url('/kontak') }}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>
