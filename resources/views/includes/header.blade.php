<header>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar blue-gradient">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <strong>{{ config('app.name') }}</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7"
          aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/') }}">
                        Home
                    </a>
                </li>
                <li class="nav-item {{ Request::is('sell') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/sell') }}">
                        Sell Now
                    </a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/about') }}">
                        About Us
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://m.me/full2study" target="_blank">
                        Contact Us
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav nav-flex-icons">
                @if (!Auth::check())
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('register') }}">Register</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user"></i> {{ Auth()->user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink-4">
                            <a class="dropdown-item" href="{{ url('user') }}">My Ads</a>
                            <a class="dropdown-item" href="{{ url('user/profile') }}">Profile</a>
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