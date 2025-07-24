@extends('front.layouts.app')
@section('title', 'About Us')
@section('css')
@endsection
@section('content')
    <div class="main-wrapper">

        @include('front.layouts.navbar')

        <div class="small-hero-banner about-banner">
            <div class="container">
                <h1>About Us</h1>
                <p>Shaping the Future of Fabrication with Precision Moulds</p>
            </div>
        </div>

        <div class="about-us-wrapper" data-aos="fade-right" data-aos-duration="2000">
            <div class="container">
                <div class="box-wrapper">
                    <div class="left-section">
                        <div class="img-wrapper">
                            <img src="{{ asset('public/front/images/images.jpeg') }}" alt="Jitendra Gajjar">
                            <div class="md-details">
                                <h3>Jitendra Gajjar</h3>
                                <p>managing director</p>
                            </div>
                        </div>
                    </div>
                    <div class="right-section">
                        <p>At <strong>Shilp Fab</strong>, we bring ideas to life through precision-engineered moulds tailored for the evolving demands of the precast industry. With over <strong>15 years of expertise</strong>, we have established ourselves as a trusted name in the fabrication of high-quality and durable moulds.</p>

                        <p>Our facility is equipped with cutting-edge technology and a dedicated team of skilled professionals committed to delivering mould solutions that meet the highest standards of <strong>quality, durability, and performance.</strong> From standard designs to fully customized moulds, we ensure each product is manufactured to meet specific project needs with accuracy and efficiency.</p>

                        <p><strong>Our Core Product Range Includes:</strong></p>

                        <ul>
                            <li>RE Wall Moulds</li>
                            <li>Friction Slabs with Crash Barrier</li>
                            <li>Girder Moulds</li>
                            <li>Boundary Wall Column Moulds</li>
                            <li>Pipe Rack Mould</li>
                        </ul>
                    </div>
                </div>
                <p>In addition to our core products, we also fabricate a variety of <strong>custom moulds</strong> for specialized applications. Whether it’s a large infrastructure project or a private development, we collaborate closely with our clients to develop moulds that match their specifications, ensuring seamless execution on site.</p>

                <div class="about-box">
                    <h3 class="title-text">Why Choose Shilp Fab?</h3>
                    <ul>
                        <li>15+ Years of Industry Experience</li>
                        <li>Use of Industry-Grade Raw Materials</li>
                        <li>Strict Quality Assurance at Every Stage</li>
                        <li>Fast Turnaround Times and Competitive Pricing</li>
                        <li>Full Support from Concept to Delivery</li>
                    </ul>
                </div>

                <div class="about-box">
                    <h3 class="title-text">Our Vision</h3>
                    <p>To become a leader in fabrication mould manufacturing by continuously innovating and delivering products that redefine quality, safety, and reliability in precast.</p>
                </div>

                <div class="about-box">
                    <h3 class="title-text">Our Mission</h3>
                    <p>To empower precast professionals with superior mould solutions that drive project excellence and long-term performance.</p>
                </div>

                <p>At <strong>Shilp Fab</strong>, we don’t just make moulds — we shape the foundation of your success.</p>
            </div>
        </div>

        @include('front.layouts.footer')


    </div>
@endsection


@section('scripts')
@endsection
