@extends('front.layouts.app')
@section('title', 'About Us')
@section('css')
@endsection
@section('content')
    <div class="main-wrapper">

        @include('front.layouts.navbar')

        <div class="small-hero-banner contact-banner">
            <div class="container">
                <h1>About Us</h1>
                <p>Shaping the Future of Fabrication with Precision Moulds</p>
            </div>
        </div>

        <div class="about-us-wrapper" data-aos="fade-right" data-aos-duration="2000">
            <div class="container">
                <p>At <strong>Shilpfab Fabrication</strong>, we specialise in designing and manufacturing high-quality fabrication moulds for a wide range of construction and infrastructure needs. With a strong focus on precision, durability, and performance, we provide innovative mould solutions that help our clients build with confidence.</p>

                <p>Our product range includes <strong>R E Well Moulds, Friction Slabs with Crash Barrier, Boundary Wall Column Moulds, Pipe Rack Mould,</strong> and many more custom moulds tailored to your project requirements. Each mould is crafted with industry-grade materials and strict quality standards to ensure long-lasting results in the field.</p>

                <p>With <strong>12+ years of experience</strong> and a deep understanding of fabrication processes, we are committed to supporting builders, contractors, and infrastructure companies by delivering dependable and cost-effective mould solutions.</p>

                <p>At <strong>Shilpfab Fabrication</strong>, we don’t just make moulds — we shape the foundation of your success.</p>
            </div>
        </div>

        @include('front.layouts.footer')


    </div>
@endsection


@section('scripts')
@endsection
