<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Dashboard</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="pcoded-hasmenu">
                    <a href="javascript:void()" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="icon-home"></i></span>
                        <span class="pcoded-mtext">Home</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="active">
                            <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Dashboard</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="{{ route('home') }}" class="waves-effect waves-dark" target="_blank">
                                <span class="pcoded-mtext">Landing Page</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="pcoded-navigation-label">Content</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="{{ route('event.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-calendar"></i>
                        </span>
                        <span class="pcoded-mtext">Acara</span>
                    </a>
                </li>
                <li class="">
                    <a href="#!" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-note"></i>
                        </span>
                        <span class="pcoded-mtext">Artikel</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('news.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-book-open"></i>
                        </span>
                        <span class="pcoded-mtext">Berita</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('job.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-briefcase"></i>
                        </span>
                        <span class="pcoded-mtext">Lowongan</span>
                    </a>
                </li>
            </ul>
            <div class="pcoded-navigation-label">Setting</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="#!" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-people"></i>
                        </span>
                        <span class="pcoded-mtext">Users</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('roles.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-lock-open"></i>
                        </span>
                        <span class="pcoded-mtext">User Roles</span>
                    </a>
                </li>
                <li class="">
                    <a href="#!" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Menu</span>
                    </a>
                </li>
            </ul>
            <div class="pcoded-navigation-label">User Setting</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class="">
                    <a href="#!" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-user"></i>
                        </span>
                        <span class="pcoded-mtext">Profile</span>
                    </a>
                </li>
                <li class="">
                    <a href="#!" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-reload"></i>
                        </span>
                        <span class="pcoded-mtext">Reset Password</span>
                    </a>
                </li>
                <li class="">
                    <a href="#!" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="icon-logout"></i>
                        </span>
                        <span class="pcoded-mtext">Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>