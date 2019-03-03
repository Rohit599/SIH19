
    <!-- Sidebar navigation -->
    <div id="slide-out" class="side-nav sn-bg-4 fixed">
      <ul class="custom-scrollbar">
        <!-- Logo -->
        <li>
          <div class="logo-wrapper waves-light">
            <a href="{{ url('/') }}"><img src="{{ url('img/logo.png') }}" class="img-fluid flex-center"></a>
          </div>
        </li>
        <!--/. Logo -->
        <!-- Side navigation links -->
        <li>
          <ul class="collapsible collapsible-accordion">
            <li><a href="{{ url('admin') }}" class="waves-effect"><i class="fas fa-home"></i> Home</a></li>
            <li><a href="{{ url('admin/issues') }}" class="waves-effect"><i class="fas fa-bolt"></i> Issue</a></li>
            <li><a href="{{ url('admin/users') }}" class="waves-effect"><i class="fas fa-users"></i> User</a></li>
            <li><a href="{{ url('admin/blogs') }}" class="waves-effect"><i class="fas fa-align-left"></i> Blog</a></li>
{{--             <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-eye"></i> About<i class="fas fa-angle-down rotate-icon"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a href="#" class="waves-effect">Introduction</a>
                  </li>
                  <li><a href="#" class="waves-effect">Monthly meetings</a>
                  </li>
                </ul>
              </div>
            </li> --}}
          </ul>
        </li>
        <!--/. Side navigation links -->
      </ul>
      <div class="sidenav-bg mask-strong"></div>
    </div>
    <!--/. Sidebar navigation -->
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-expand-lg scrolling-navbar double-nav">
      <!-- SideNav slide-out button -->
      <div class="float-left">
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
      </div>
      <!-- Breadcrumb-->
      <div class="breadcrumb-dn mr-auto">
        <p>Welcome {{ Auth()->user()->name }}</p>
      </div>
      <ul class="nav navbar-nav nav-flex-icons ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <img src="{{ Avatar::create(Auth()->user()->name)->toBase64() }}" height="30px"/> {{ Auth()->user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="{{ url('logout') }}">Log out</a>
          </div>
        </li>
      </ul>
    </nav>
    <!-- /.Navbar -->