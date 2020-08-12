<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 mb-4">
                <div class="footer-info">
                    <div class="info-header mb-3">
                        <img src="{{ url('/frontend/images/Logo-PNG.png') }}" alt="Logo SEBI" class="info-logo">
                    </div>
                    <div class="info-body text-left">
                        <p>Sekretariat Ikatan Silaturahim Alumni SEBI <br>
                            Jl. Raya Bojongsari, Depok Jawa Barat 16517 Indonesia <br>
                            <i class="fa fa-envelope pr-2" aria-hidden="true"></i><a
                                href="info@sebi.ac.id">info@sebi.ac.id</a>
                            <br>
                            <i class="fa fa-phone pr-2" aria-hidden="true"></i>(0251) 8616655
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2 mb-4">
                <div class="footer-link">
                    <div class="link-header">
                        <p>AKUN SAYA</p>
                    </div>
                    <ul class="list-group">
                        <li class="list-item">
                            <a href="{{ route('dashboard') }}">Administrator</a>
                        </li>
                        <li class="list-item">
                            <a href="{{ route('register') }}">Buat Akun</a>
                        </li>
                        @guest
                            <!-- Mobile btn_login -->
                        <form class="form-inline d-sm-block d-md-none">
                            @csrf
                            <button class="btn-login my-2 my-sm-0" type="button"
                            onclick="event.preventDefault(); location.href='{{ url('login') }}'">
                            <i class="fa fa-sign-in"></i> Login
                            </button>
                        </form>
                        <!-- Desktop btn_login -->
                        <form class="form-inline my-2 my-lg-0 d-none d-md-block">
                            @csrf
                            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="button"
                            onclick="event.preventDefault(); location.href='{{ url('login') }}'"> 
                                <i class="fa fa-sign-in"></i> Login
                            </button>
                        </form>
                        @endguest

                        @auth
                            <!-- Mobile btn_login -->
                        <form class="form-inline d-sm-block d-md-none" action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button class="btn-login my-2 my-sm-0" type="submit">
                                <i class="fa fa-sign-out"></i> Logout
                            </button>
                        </form>
                        <!-- Desktop btn_login -->
                        <form class="form-inline my-2 my-lg-0 d-none d-md-block" action="{{ url('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4" type="submit">
                                <i class="fa fa-sign-out"></i> Logout
                            </button>
                        </form>
                        @endauth
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-2 col-lg-2 mb-4">
                <div class="footer-link">
                    <div class="link-header">
                        <p>TAUTAN PENTING</p>
                    </div>
                    <ul class="list-group">
                        <li class="list-item">
                            <a href="https://v2.sebi.ac.id/" target="_blank">Website SEBI</a>
                        </li>
                        <li class="list-item">
                            <a href="https://v2.sebi.ac.id/jalur-reguler" target="_blank">Pendaftaran</a>
                        </li>
                        <li class="list-item">
                            <a href="#" target="_blank">Profil</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-4 mb-4">
                <div class="social-media text-center">
                    <div class="social-media-header">
                        <p>TETAP TERHUBUNG</p>
                    </div>
                    <div class="social-media-body d-flex justify-content-center">
                        <div class="social-media-logo">
                            <a href="https://www.instagram.com/alumnisebi_isas/" target="_blank">
                                <img src="{{ url('/frontend/images/social/ic_instagram.png') }}" alt="">
                            </a>
                        </div>

                        <div class="social-media-logo">
                            <a href="https://facebook.com/kampussebi/" target="_blank">
                                <img src="{{ url('/frontend/images/social/ic_facebook.png') }}" alt="">
                            </a>
                        </div>

                        <div class="social-media-logo">
                            <a href="https://www.youtube.com/channel/UC2-DSiRcHvtY1mYYm6e59aw" target="_blank">
                                <img src="{{ url('/frontend/images/social/ic_youtube.png') }}" alt="">
                            </a>
                        </div>

                        <div class="social-media-logo"><a href="#" target="_blank">
                                <img src="{{ url('/frontend/images/social/ic_twitter.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="container-fluid py-2">
    <div class="copy text-center">
        Copyright &copy;2019 - 2020 Ikatan Silaturahim Alumni SEBI
    </div>
</div>