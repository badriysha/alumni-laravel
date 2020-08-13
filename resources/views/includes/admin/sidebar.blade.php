<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Dashboard</div>
                <ul class="pcoded-item pcoded-left-item">
                    <li class="active">
                        <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-home"></i>
                            </span>
                            <span class="pcoded-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pcoded-hasmenu">
                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                            <span class="pcoded-mtext">Page layouts</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class=" pcoded-hasmenu">
                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                    <span class="pcoded-mtext">Vertical</span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="">
                                        <a href="menu-static.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Static Layout</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="menu-header-fixed.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Header Fixed</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="menu-compact.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Compact</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="menu-sidebar.html" class="waves-effect waves-dark">
                                            <span class="pcoded-mtext">Sidebar Fixed</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="{{ route('dashboard') }}" class="waves-effect waves-dark">
                            <span class="pcoded-micon">
                                <i class="feather icon-user"></i>
                            </span>
                            <span class="pcoded-mtext">Profil</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>