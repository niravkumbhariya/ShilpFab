<footer data-aos="fade-up" data-aos-duration="2000">
    <div class="container">
        <div class="left-section">
            <img src="{{ asset('public/front/images/ShilpFab-Logo-footer.png') }}" alt="logo" class="logo">
            <p class="highlight-text">We don’t just make moulds — we shape the foundation of your success.</p>
            <div class="social-links">
                <ul>
                    <li><a href="https://wa.me/9825821951" target="_blank" title="9825821951"><img src="{{ asset('public/front/images/whatsapp.svg') }}"></a></li>
                </ul>
            </div>
        </div>
        <div class="useful-links">
            <h6 class="links-label">Company Links</h6>
            <ul>
                <li><a href="{{route('front')}}" title="Home">Home</a></li>
                <li><a href="{{route('front.work')}}" title="Our Works">Our Works</a></li>
                <li><a href="{{route('front.about')}}" title="About Us">About Us</a></li>
                <li><a href="{{route('front.contact')}}" title="Contact Us">Contact Us</a></li>
            </ul>
        </div>
        <div class="services-links">
            <h6 class="links-label">Mould Manufacturing</h6>
            <ul>
                <li>RE Wall</li>
                <li>Friction Slab With Crash Barrier</li>
                <li>Girder</li>
                <li>Boundary Wall Column</li>
                <li>Pipe Rack</li>
            </ul>
        </div>
        <div class="connect-links">
            <h6 class="links-label">Say Hello!</h6>
            <ul>
                <li>
                    <!-- <p>Have any Questions ?</p> -->
                    <div class="links-icons"><img src="{{ asset('public/front/images/phone.svg') }}" alt="phone"></div>
                    <a href="tel:+9198258 21951" title="+91 9825821951">+91 98258 21951</a>
                </li>
                <li>
                    <!-- <p>Get in touch with us</p> -->
                    <div class="links-icons"><img src="{{ asset('public/front/images/email.svg') }}" alt="email"></div>
                    <a href="mailto:test@gmail.com" title="test@gmail.com">test@gmail.com </a>
                </li>
                <li>
                    <!-- <p>You can find us at</p> -->
                    <div class="links-icons"><img src="{{ asset('public/front/images/pin.svg') }}" alt="location"></div>
                    <address>Plot No. D-107/A, Almighty Gate, Lodhika GIDC, Metoda-360021, Dist. Rajkot, (Gujarat - INDIA). </address>
                </li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© {{date('Y')}} <strong>Shilp Fab</strong>. All Rights Reserved.</p>
    </div>
</footer>
