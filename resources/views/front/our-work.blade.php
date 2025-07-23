@extends('front.layouts.app')
@section('title', 'Our Work')
@section('css')
@endsection
@section('content')
<div class="main-wrapper">

    @include('front.layouts.navbar')

    <div class="small-hero-banner our-work-banner">
        <div class="container">
            <h1>Our Works</h1>
            <p>ShilpFab is ready to provide you fabrication mould according to your needs</p>
        </div>
    </div>

    <div class="product-list-section">
        <div class="container">
            <div class="product-list-wrapper">
                @foreach ($works as $work)
                <div class="product-box" data-aos="fade-up" data-aos-duration="2000">
                    <a data-fancybox="gallery1" href="images/product1-img1.jpg">
                        <div class="img-wrapper">
                            <img src="{{asset("public/storage/works/$work->image")}}" alt="Our Work">
                        </div>
                        <div class="service-content-wrapper">
                            <h2 class="service-name">{{$work->title}}</h2>
                            <p>{!! Str::limit($work->desc,300,'...') !!}</p>
                        </div>
                    </a>
                    <a data-fancybox="gallery1" href="http://shilpfab.com/public/storage/services/1751864621_0frju1k6tX.jpg" style="display:none;"></a>
                    <a data-fancybox="gallery1" href="http://shilpfab.com/public/storage/services/1751863985_2XuCtn7hx0.jpg" style="display:none;"></a>
                </div>
                @endforeach
            </div>
        </div>
    </div>


    @include('front.layouts.footer')

</div>
@endsection


@section('scripts')
@endsection
