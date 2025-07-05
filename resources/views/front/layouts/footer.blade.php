<footer>
    <div class="container">
        <div class="left-section">
            <img src="{{ asset('public/front/images/logo.png') }}" alt="logo" class="logo">
            <p class="highlight-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            </p>
            <div class="social-links">
                <ul>
                    <li><a href="#"><img src="{{ asset('public/front/images/facebook.svg') }}"></a></li>
                    <li><a href="#"><img src="{{ asset('public/front/images/whatsapp.svg') }}"></a></li>
                </ul>
            </div>
        </div>
        <div class="useful-links">
            <h6 class="links-label">Company Links</h6>
            <ul>
                <li><a href="{{route('front')}}">Home</a></li>
                <li><a href="{{route('front.work')}}">Our Works</a></li>
                <li><a href="{{route('front.about')}}">About Us</a></li>
                <li><a href="{{route('front.contact')}}">Contact Us</a></li>
            </ul>
        </div>
        <div class="services-links">
            <h6 class="links-label">Our Services</h6>
            <ul>
                <li>R E Well Mould</li>
                <li>Cross breyer mould</li>
                <li>Friction slab with cross beryer</li>
                <li>Bountry wall collam mould</li>
            </ul>
        </div>
        <div class="connect-links">
            <h6 class="links-label">Say Hello!</h6>
            <ul>
                <li>
                    <!-- <p>Have any Questions ?</p> -->
                    <div class="links-icons"><img src="{{ asset('public/front/images/phone.svg') }}"
                            alt="phone"></div>
                    <a href="tel:+911234567890">+91 98258 21951</a>
                </li>
                <li>
                    <!-- <p>Get in touch with us</p> -->
                    <div class="links-icons"><img src="{{ asset('public/front/images/email.svg') }}"
                            alt="email"></div>
                    <a href="mailto:test@gmail.com">test@gmail.com </a>
                </li>
                <li>
                    <!-- <p>You can find us at</p> -->
                    <div class="links-icons"><img src="{{ asset('public/front/images/pin.svg') }}"
                            alt="location"></div>
                    <address>D-107/A, Almighty Gate, GIDC Lodhika, Metoda, Metoda, Gujarat 360021</address>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© {{date('Y')}} <strong>ShilpFab</strong>. All Rights Reserved.</p>
    </div>
</footer>
