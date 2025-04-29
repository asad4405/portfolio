@extends('Frontend.layouts.master')
@section('title')
    Testimonial
@endsection
@section('maincontent')
    <!-- Details Section -->
    <section>
        <div class="background_Bg">
            <div class="another-page-heading"
                style="background: url('{{ asset('public/Frontend/frontend_assets/images/nav-details.jpg') }}') no-repeat center center/cover;">
                <div class="another-page-content">
                    <h1 class="fw-bold">Testimonial</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a><i class="fa-solid fa-arrow-right"></i></a></li>
                            <li class="text-white breadcrumb-item active" aria-current="page">Testimonial</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- ==================== Testimonial ===================== -->
            <section>
                <div class="background_Bg">
                    <div class="container py-2">
                        <div class="row align-items-center">
                            <!-- Left Column -->
                            <div class="mb-4 col-12">
                                <h2 class="testi-title moveup-animation delay-0">My Client's Stories</h2>
                                <p class="testi-title-des moveup-animation delay-1">Empowering people in a new digital
                                    journey with
                                    my super services</p>
                            </div>

                            <!--  Column -->
                            <div class="col-12">

                                <!-- Desktop view -->
                                <div id="testimonialCarouselDesktop"
                                    class="carousel slide d-none d-md-block moveup-animation delay-0"
                                    data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <!-- Slide  -->
                                        <div class="row">
                                            @foreach ($testimonials as $value)
                                                <div class="mt-4 col-6">
                                                    <div class="testimonial-card">
                                                        <div class="quote-icon">❝</div>
                                                        <p>“{{ $value->details }}”</p>
                                                        <div class="testimonial-name">{{ $value->client_name }}</div>
                                                        <small class="testi-title-des">{{ $value->client_sector }}</small>
                                                        <img src="{{ asset($value->image) }}" alt="Testimonial Img">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Mobile view -->
                            <div class="row d-block d-md-none moveup-animation delay-0">
                                @foreach ($testimonials as $testimonial)
                                    <div class="mt-3 col-12">
                                        <div class="text-center testimonial-card">
                                            <div class="quote-icon">❝</div>
                                            <p>“{{ $testimonial->details }}”</p>
                                            <div class="testimonial-name">{{ $testimonial->client_name }}</div>
                                            <small class="testi-title-des">{{ $testimonial->client_sector }}</small>
                                            <img src="{{ asset($testimonial->image) }}" alt="Testimonial Img">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
@endsection
