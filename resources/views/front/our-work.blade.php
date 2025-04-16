@extends('front.layouts.app')
@section('title', 'Our Work')
@section('css')
@endsection
@section('content')
<div class="main-wrapper">

    <header class="header">
        <div class="left-section">
            <div class="logo">
                <a href="{{route('front')}}">
                    <img src="{{asset('public/front/images/logo.png')}}" alt="logo">
                </a>
            </div>
        </div>

        @include('front.layouts.navbar')
    </header>

    <div class="small-hero-banner contact-banner">
        <div class="container">
            <h1>Our Works</h1>
            <p>ShilpFab is ready to provide you fabric mould according to your needs</p>
        </div>
    </div>

    <div class="product-list-section">
        <div class="container">
            <div class="product-list-wrapper">
                <div class="product-box">
                    <div class="img-wrapper">
                        <img src="{{asset('public/front/images/service-01.jpg')}}" alt="service">
                    </div>
                    <div class="service-content-wrapper">
                        <h2 class="service-name">R E Well Mould</h2>
                        <p>Rajkot Vadinar Project L & T</p>
                    </div>
                </div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <img src="{{asset('public/front/images/service-01.jpg')}}" alt="service">
                    </div>
                    <div class="service-content-wrapper">
                        <h2 class="service-name">Cross Breyer Mould</h2>
                        <p>Rajkot Vadinar Project L & T</p>
                    </div>
                </div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <img src="{{asset('public/front/images/service-01.jpg')}}" alt="service">
                    </div>
                    <div class="service-content-wrapper">
                        <h2 class="service-name">R E Well Mould</h2>
                        <p>Rajkot Vadinar Project L & T</p>
                    </div>
                </div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <img src="{{asset('public/front/images/service-01.jpg')}}" alt="service">
                    </div>
                    <div class="service-content-wrapper">
                        <h2 class="service-name">Friction Slab With Cross Beryer</h2>
                        <p>Rajkot Vadinar Project L & T</p>
                    </div>
                </div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <img src="{{asset('public/front/images/service-01.jpg')}}" alt="service">
                    </div>
                    <div class="service-content-wrapper">
                        <h2 class="service-name">R E Well Mould</h2>
                        <p>Rajkot Vadinar Project L & T</p>
                    </div>
                </div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <img src="{{asset('public/front/images/service-01.jpg')}}" alt="service">
                    </div>
                    <div class="service-content-wrapper">
                        <h2 class="service-name">Cross Breyer Mould</h2>
                        <p>Rajkot Vadinar Project L & T</p>
                    </div>
                </div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <img src="{{asset('public/front/images/service-01.jpg')}}" alt="service">
                    </div>
                    <div class="service-content-wrapper">
                        <h2 class="service-name">R E Well Mould</h2>
                        <p>Rajkot Vadinar Project L & T</p>
                    </div>
                </div>
                <div class="product-box">
                    <div class="img-wrapper">
                        <img src="{{asset('public/front/images/service-01.jpg')}}" alt="service">
                    </div>
                    <div class="service-content-wrapper">
                        <h2 class="service-name">Friction Slab With Cross Beryer</h2>
                        <p>Rajkot Vadinar Project L & T</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('front.layouts.footer')

</div>
@endsection


@section('scripts')
@endsection
