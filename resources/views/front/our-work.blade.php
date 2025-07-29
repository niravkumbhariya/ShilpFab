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
            <p>Shilp Fab is ready to provide you fabrication mould according to your needs</p>
        </div>
    </div>

    <div class="product-list-section">
    <div class="container">
        <div class="product-list-wrapper">
            @foreach ($works as $work)
                <div class="product-box" data-aos="fade-up" data-aos-duration="2000">
                    {{-- Main image clickable --}}
                    @if($work->images->count() > 0)
                        <a data-fancybox="gallery{{ $work->id }}"
                           href="{{ asset('public/storage/works/'.$work->image) }}">
                            <div class="img-wrapper">
                                <img src="{{ asset('public/storage/works/'.$work->image) }}" alt="Our Work">
                            </div>
                            <div class="service-content-wrapper">
                                <h2 class="service-name">{{ $work->title }}</h2>
                                <p>{!! Str::limit($work->desc,300,'...') !!}</p>
                            </div>
                        </a>

                        {{-- Additional images (hidden but included in gallery) --}}
                        @foreach($work->images as $img)
                            <a data-fancybox="gallery{{ $work->id }}"
                               href="{{ asset('public/storage/works/'.$img->image) }}" style="display:none;"></a>
                        @endforeach
                    @else
                        {{-- If no multiple images, fallback to single image field --}}
                        <a data-fancybox="gallery{{ $work->id }}"
                           href="{{ asset('public/storage/works/'.$work->image) }}">
                            <div class="img-wrapper">
                                <img src="{{ asset('public/storage/works/'.$work->image) }}" alt="Our Work">
                            </div>
                            <div class="service-content-wrapper">
                                <h2 class="service-name">{{ $work->title }}</h2>
                                <p>{!! Str::limit($work->desc,300,'...') !!}</p>
                            </div>
                        </a>
                    @endif
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
