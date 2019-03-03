<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar blue-gradient">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <strong><img src="{{ url('img/logo.png') }}" alt="{{ config('app.name') }}" height="45px"></strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">
                        HOME
                    </a>
                </li>
                <li class="nav-item {{ Request::is('/blogs') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('blogs') }}">
                        BLOGS
                    </a>
                </li>
                <li class="nav-item {{ Request::is(url('impactStories')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('impactStories') }}">
                        IMPACT STORIES
                    </a>
                </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle " id="issuesDropdownMenu" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false">ISSUES</a>
                          <div class="dropdown-menu dropdown-primary" aria-labelledby="issuesDropdownMenu">
                            <a class="dropdown-item" href="{{url('issue/create')}}">Create Issue</a>
                            <a class="dropdown-item" href="">View Issue</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">INITIATIVES</a>
                        </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link btn btn-info btn-rounded btn-md waves-effect waves-light" data-toggle="modal" data-target="#basicExampleModal" id="login_modal">Login/Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{ Avatar::create(Auth()->user()->name)->toBase64() }}" height="30px"/>
                            {{ Auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="{{ url('dash/issues') }}">My Issues</a>
                            <a class="dropdown-item" href="{{ url('dash/blogs') }}">My Blog Post</a>
                            <a class="dropdown-item" href="{{ url('dash/profile') }}">Profile</a>
                            @if (Auth()->user()->is_admin == 1)
                                <a class="dropdown-item" href="{{ url('admin') }}">Admin Panel</a>
                            @endif
                            <a class="dropdown-item" href="{{ url('logout') }}">Log out</a>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </div>
  </nav>

@yield('header')

</header>