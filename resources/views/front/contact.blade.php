@extends('front.layouts.app')
@section('title', 'Contact Us')
@section('css')
@endsection
@section('content')
    <div class="main-wrapper">

        <header class="header">
            <div class="left-section">
                <div class="logo">
                    <a href="{{ route('front.contact')}}">
                        <img src="{{ asset('public/front/images/logo.png')}}" alt="logo">
                    </a>
                </div>
            </div>

            @include('front.layouts.navbar')
        </header>

        <div class="small-hero-banner contact-banner">
            <div class="container">
                <h1>Contact Us</h1>
                <p>ShilpFab is ready to provide you fabric mould according to your needs</p>
            </div>
        </div>

        <div class="getintouch-section">
            <div class="container">
                <div class="left-section">
                    <div class="heading-section">
                        <h3 class="sub-title">Get In Touch</h3>
                        <h1 class="main-title">We're here to help! Reach out today and let’s bring your fabrication ideas to
                            life.</h1>
                    </div>
                    <div class="connect-links-section">
                        <ul>
                            <li>
                                <div class="links-icons"><img src="{{asset('public/front/images/phone.svg')}}" alt="phone"></div>
                                <a href="tel:+91 98258 21951">+91 98258 21951</a>
                            </li>
                            <li>
                                <div class="links-icons"><img src="{{asset('public/front/images/email.svg')}}" alt="email"></div>
                                <a href="mailto:test@gmail.com">test@gmail.com </a>
                            </li>
                            <li>
                                <div class="links-icons"><img src="{{asset('public/front/images/pin.svg')}}" alt="location"></div>
                                <address>D-107/A, Almighty Gate, GIDC Lodhika, Metoda, Metoda, Gujarat 360021</address>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="form-section">
                    <form>
                        <div class="input-group">
                            <label>First Name</label>
                            <input type="text" name="first-name" placeholder="First Name">
                        </div>
                        <div class="input-group">
                            <label>Last Name</label>
                            <input type="text" name="last-name" placeholder="Last Name">
                        </div>
                        <div class="input-group">
                            <label>Subject</label>
                            <input type="text" name="Subject" placeholder="Subject">
                        </div>
                        <div class="input-group">
                            <label>Email</label>
                            <input type="text" name="Email" placeholder="Email">
                        </div>
                        <div class="input-group textarea">
                            <label>Message</label>
                            <textarea rows="10" placeholder="Message"></textarea>
                        </div>

                        <button class="btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="map-section">
            <div class="responsive-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.8858510054138!2d70.6821908!3d22.2444094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3959cc563d6d8d33%3A0x9ab29a0925e7e8b8!2sShilp%20Fab!5e0!3m2!1sen!2sin!4v1742492914292!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


        @include('front.layouts.footer')
    </div>
@endsection


@section('scripts')
@endsection
