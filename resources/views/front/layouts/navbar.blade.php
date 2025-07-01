<header class="header">
    <div class="left-section">
        <div class="logo">
            <a href="{{ route('front') }}">
                <img src="{{ asset('public/front/images/Shilp-Fab-Logo-1.png') }}" alt="logo">
            </a>
        </div>
    </div>
    <nav class="nav-section">
        <ul>
            <li><a href="{{route('front')}}" class="nav-link active">Home</a></li>
            <li><a href="{{route('front.work')}}" class="nav-link">Our Work</a></li>
            <li><a href="{{route('front.about')}}" class="nav-link">About Us</a></li>
            <li><a href="{{route('front.contact')}}" class="nav-link">Contact Us</a></li>
            <!-- <li><a href="#" class="btn-primary">Get In Touch</a></li> -->
        </ul>
    </nav>
    <div class="hamburger-menu"></div>
</header>
