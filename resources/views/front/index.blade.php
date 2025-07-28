@extends('front.layouts.app')
@section('title', 'Home')
@section('css')
@endsection
@section('content')
    <div class="main-wrapper">
        @include('front.layouts.navbar')

        <div class="hero-banner">
            <div class="banner-wrapper owl-carousel owl-theme">
                <img src="{{ asset('public/front/images/mould01.jpg') }}" atr="hero banner">
                <img src="{{ asset('public/front/images/hero-banner-03.jpg') }}" atr="hero banner">
            </div>
            <div class="banner-content">
                <h1>Crafting Precision, Building the Future</h1>
                <p>Shilp Fab specialises in the design and manufacturing of high-quality fabrication moulds</p>
            </div>
        </div>

        <div class="product-list-section our-services-section">
            <div class="container">
                <div class="heading-section">
                    <h3 class="sub-title" data-aos="fade-right" data-aos-duration="2000">Our Services</h3>
                    <h1 class="main-title" data-aos="fade-left" data-aos-duration="2000">Specialist Mould Services</h1>
                </div>
                <div class="product-list-wrapper service-box-wrapper owl-carousel owl-theme">

                    @foreach ($services as $service)
                        <div class="product-box service-box" data-aos="fade-up" data-aos-duration="2000">
                            <div class="img-wrapper">
                                <img src="{{ asset("public/storage/services/$service->image") }}" alt="service">
                            </div>
                            <div class="service-content-wrapper">
                                <h2 class="service-name">{{ $service->title }}</h2>
                                <p>{!! Str::limit($service->desc, 300, '...') !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="about-us-section">
            <div class="container">
                <div class="left-section" data-aos="fade-right" data-aos-duration="2000">
                    <img src="{{ asset('public/front/images/img01.jpg') }}" alt="about-us">
                </div>
                <div class="right-section">
                    <div class="heading-section">
                        <h3 class="sub-title" data-aos="fade-left" data-aos-duration="2000">About Us</h3>
                        <h1 class="main-title" data-aos="fade-left" data-aos-duration="2000">Shipping that exceeds Expectations.</h1>
                    </div>
                    <div class="about-us-content-wrapper">
                        <p data-aos="fade-left" data-aos-duration="2000">With over 15+ years of experience in the fabrication industry, we specialize in crafting high-quality, precision-engineered moulds for a wide range of construction and infrastructure projects.</p>
                        <p data-aos="fade-left" data-aos-duration="2000">Shipping that exceeds expectations refers to the process of delivering goods to customers in a way that goes above and beyond their initial expectations. This can include various factors.</p>
                        <p data-aos="fade-left" data-aos-duration="2000">Every product we deliver reflects our commitment to innovation, quality workmanship, and on-time delivery.</p>
                        <p data-aos="fade-left" data-aos-duration="2000">We don’t just build moulds — <strong>We build the foundation of tomorrow’s infrastructure.</strong></p>

                        <div class="experience-box" data-aos="fade-left" data-aos-duration="2000">
                            <div class="exp-years">15+</div>
                            <div class="exp-text">
                                <span>Years Working</span>
                                <p>Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="videoembed-setion">
            <!-- <video class="videoembed" autoplay muted loop>
                <source src="{{ asset('public/front/images/work-video-01.mp4') }}" type="video/mp4">
                <source src="{{ asset('public/front/images/work-video-01.ogg') }}" type="video/ogg">
            </video> -->
            
            <h4 class="video-text">We should move together and Feel the experience</h4>
        </div>
        <div class="more-info-section" data-aos="fade-up" data-aos-duration="2000">
            <div class="info-box">
                <img src="{{ asset('public/front/images/visitor.svg') }}" class="info-image" alt="user">
                <h5>{{$totalVisitors}}</h5>
                <p>Visitors</p>
            </div>
            <div class="info-box">
                <img src="{{ asset('public/front/images/closure.svg') }}" class="info-image" alt="Successful Projects">
                <h5>50+</h5>
                <p>Successful Projects</p>
            </div>
            <div class="info-box">
                <img src="{{ asset('public/front/images/electrical.svg') }}" class="info-image" alt="Expert Engineer">
                <h5>20+</h5>
                <p>Expert Engineer</p>
            </div>
        </div>

        <div class="getintouch-section">
            <div class="container">
                <div class="left-section">
                    <div class="heading-section">
                        <h3 class="sub-title" data-aos="fade-right" data-aos-duration="2000">Get In Touch</h3>
                        <h1 class="main-title" data-aos="fade-right" data-aos-duration="2000">We're here to help!</h1>
                    </div>
                </div>
                @include('front.contact-form')
            </div>
        </div>

        @include('front.layouts.footer')
    </div>
@endsection


@section('scripts')
@endsection
