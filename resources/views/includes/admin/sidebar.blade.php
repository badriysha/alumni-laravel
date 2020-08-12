<aside id="left-panel" class="left-panel">
      <nav class="navbar navbar-expand-sm navbar-default">

          <div class="navbar-header">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                  aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand" href="./"><img src="{{ url('backend/images/logo.png') }}" alt="Logo"></a>
              <a class="navbar-brand hidden" href="./"><img src="{{ url('backend/images/logo2.png') }}" alt="Logo"></a>
          </div>

          <div id="main-menu" class="main-menu collapse navbar-collapse">
              <ul class="nav navbar-nav">
                  <li>
                      <a href="{{ route('home') }}" target="_blank"><i class="menu-icon fa fa-home" style="width: 25px"></i>Home</a>
                  </li>
                  <li class="{{ Request::is('admin') ? 'active' : '' }}">
                      <a href="{{ route('dashboard') }}"> <i class="menu-icon fa fa-dashboard" style="width: 25px"></i>Dashboard</a>
                  </li>
                  <h3 class="menu-title">Content</h3>
                  <li class="menu-item-has-children dropdown {{ Request::is('admin/post*') ? 'active' : '' }}">
                      <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false"> <i class="menu-icon fa fa-bullhorn" style="width: 25px"></i>Post Content</a>
                      <ul class="sub-menu children dropdown-menu">
                          <li><i class="fa fa-book" style="width: 25px"></i><a href="{{ route('news.index') }}">News</a></li>
                          <li><i class="fa fa-suitcase" style="width: 25px"></i><a href="{{ route('job.index') }}">Jobs</a></li>
                          <li><i class="fa fa-calendar-o" style="width: 25px"></i><a href="{{ route('event.index') }}">Events</a></li>
                      </ul>
                  </li>
                  <li>
                    <a href=""> <i class="menu-icon fa fa-tags" style="width: 25px"></i>Category</a>
                  </li>
                  <h3 class="menu-title">User Setting</h3>
                  <li class=" {{ Request::is('admin/user*') ? 'active' : '' }}">
                    <a href="{{ url('/admin/user') }}"> <i class="menu-icon fa fa-user" style="width: 25px"></i>User</a>
                  </li>
                  <li>
                    <a href=""> <i class="menu-icon fa fa-unlock-alt" style="width: 25px"></i>User Roles</a>
                  </li>
                  <li>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-link bg-transparent pl-0"><i class="fa fa-sign-out pr-1"></i>&nbsp; Logout</button>
                    </form>
                  </li>
              </ul>
          </div>
      </nav>
  </aside>