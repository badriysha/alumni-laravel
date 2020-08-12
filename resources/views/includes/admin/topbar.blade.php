<header id="header" class="header">
    <div class="header-menu">
        <div class="col-sm-7">
            <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
        </div>
        <div class="col-sm-5">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <p class="d-inline px-3 mt-2" style="font-size: 14px;"><span>Hello, </span> {{ Auth::user()->name }}</p>
                    <img class="user-avatar rounded-circle d-inline-block" src="{{ url('backend/images/admin.jpg') }}" alt="User Avatar">
                </a>
                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>
                    <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>
                </div>
            </div>
        </div>
    </div>
</header>