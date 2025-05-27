@extends('front.layouts.app')
@section('title', 'Home')
@section('css')
@endsection
@section('content')
    <div class="main-wrapper">
        @include('front.layouts.navbar')

        <div class="hero-banner">
            <div class="banner-wrapper">
                <img src="{{ asset('public/front/images/hero-banner.png') }}" atr="hero banner">
            </div>
        </div>

        <div class="product-list-section our-services-section">
            <div class="container">
                <div class="heading-section">
                    <h3 class="sub-title">Our Services</h3>
                    <h1 class="main-title">Specialist Mould Services</h1>
                </div>
                <div class="product-list-wrapper service-box-wrapper owl-carousel owl-theme">

                    @foreach ($services as $service)
                        <div class="product-box service-box">
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
                <div class="left-section">
                    <img src="{{ asset('public/front/images/img01.jpg') }}" alt="about-us">
                </div>
                <div class="right-section">
                    <div class="heading-section">
                        <h3 class="sub-title">About Us</h3>
                        <h1 class="main-title">Shipping that exceeds Expectations.</h1>
                    </div>
                    <div class="about-us-content-wrapper">
                        <p>Shipping that exceeds expectations refers to the process of delivering goods to customers in a
                            way that goes above and beyond their initial expectations. This can include various factors.</p>
                        <p>Shipping that exceeds expectations refers to the process of delivering goods to customers in a
                            way that goes above and beyond their initial expectations. This can include various factors.</p>

                        <div class="experience-box">
                            <div class="exp-years">20+</div>
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
            <video class="videoembed" autoplay muted loop>
                <source src="{{ asset('public/front/images/work-video.mp4') }}" type="video/mp4">
                <source src="{{ asset('public/front/images/work-video.ogg') }}" type="video/ogg">
            </video>
            <h4 class="video-text">We should move together and Feel the experience</h4>
        </div>
        <div class="more-info-section">
            <div class="info-box">
                <img src="{{ asset('public/front/images/visitor.svg') }}" class="info-image" alt="user">
                <h5>{{$totalVisitors}}</h5>
                <p>Visitors</p>
            </div>
            <div class="info-box">
                <img src="{{ asset('public/front/images/closure.svg') }}" class="info-image" alt="Successful Projects">
                <h5>10k+</h5>
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
                        <h3 class="sub-title">Get In Touch</h3>
                        <h1 class="main-title">We're here to help!</h1>
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
