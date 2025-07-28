<header class="header">
    <div class="left-section">
        <div class="logo">
            <a href="{{ route('front') }}">
                <img src="{{ asset('public/front/images/logo2.png') }}" alt="logo">
            </a>
        </div>
    </div>
    <nav class="nav-section">
        <ul>
            <li><a href="{{ route('front') }}" class="nav-link {{ request()->routeIs('front') ? 'active' : '' }}">Home</a>
            </li>
            <li><a href="{{ route('front.work') }}"
                    class="nav-link {{ request()->routeIs('front.work') ? 'active' : '' }}">Our Work</a></li>
            <li><a href="{{ route('front.about') }}"
                    class="nav-link {{ request()->routeIs('front.about') ? 'active' : '' }}">About Us</a></li>
            <li><a href="{{ route('front.contact') }}"
                    class="nav-link {{ request()->routeIs('front.contact') ? 'active' : '' }}">Contact Us</a></li>
        </ul>
    </nav>

    <div class="hamburger-menu"></div>
</header>
