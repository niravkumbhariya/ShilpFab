@extends('front.layouts.app')
@section('title', 'Our Work')
@section('css')
@endsection
@section('content')
<div class="main-wrapper">

    @include('front.layouts.navbar')

    <div class="small-hero-banner contact-banner">
        <div class="container">
            <h1>Our Works</h1>
            <p>ShilpFab is ready to provide you fabric mould according to your needs</p>
        </div>
    </div>

    <div class="product-list-section">
        <div class="container">
            <div class="product-list-wrapper">
                @foreach ($works as $work)
                <div class="product-box">
                    <div class="img-wrapper" style="height: 200px;">
                        <img src="{{asset("public/storage/works/$work->image")}}" alt="Our Work">
                    </div>
                    <div class="service-content-wrapper">
                        <h2 class="service-name">{{$work->title}}</h2>
                        <p>{!! Str::limit($work->desc,300,'...') !!}</p>
                    </div>
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
