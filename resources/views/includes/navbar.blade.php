<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ url('frontend/images/Logo-PNG.png') }}" alt="ALUMNI SEBI">
            <h6 class="mt-3 py-0">IKATAN<br>
                <span>ALUMNI SEBI</span>
            </h6>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item {{ Request::path() === '/' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">beranda</a>
                </li>
                <li class="nav-item {{ Request::is('search*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('search') }}">cari alumni</a>
                </li>
                <li class="nav-item {{ Request::is('news*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('news') }}">berita</a>
                </li>
                <li class="nav-item {{ Request::is('donation*') ? 'active' : '' }}">
                    <a class="nav-link" href="#">donasi</a>
                </li>
                <li class="nav-item {{ Request::is('contact*') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('contact') }}">kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="head" style="margin-top: 120px;"></div>