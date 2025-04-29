@extends('Frontend.layouts.master')
@section('title')
    About
@endsection
@section('maincontent')
    <!-- Details Section -->
    <section>
        <div class="background_Bg">
            <div class="another-page-heading"
                style="background: url('{{ asset('public/Frontend/frontend_assets/images/nav-details.jpg') }}') no-repeat center center/cover;">
                <div class="another-page-content">
                    <h1 class="fw-bold">About Me</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a><i class="fa-solid fa-arrow-right"></i></a></li>
                            <li class="text-white breadcrumb-item active" aria-current="page">About Me</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- ==================== about me ===================== -->
            <div class="container mt-5">
                <div class="about-me">
                    <h2 class="text-center about-us-title section-title moveup-animation">Details of - {{ $generalsetting->name }}</h2>
                    <div class="row">
                        <div class="col-12">
                            <div class="about-image moveup-animation delay-0">
                                <img src="{{ asset($about->image) }}" alt="">
                            </div>
                        </div>
                        <div class="about-text ">
                            <h3 class="moveup-animation delay-1">I am <span>{{ $about->name }}</span></h3>
                            <h5 class="moveup-animation delay-2">{{ $about->designation }}</h5>
                            <hr>
                            <p class="moveup-animation delay-3">{{ $about->details }}</p>
                        </div>
                    </div>
                </div>

                <div class="education-experience">
                    <h2 class="section-title moveup-animation delay-0">EDUCATION & EXPERIENCE</h2>
                    <div class="main-wrapper">
                        <div class="text-center row text-md-start">
                            <!-- Experience Column -->
                            <div class="mb-4 col-md-6 moveup-animation delay-1">
                                <div class="edu-exp-section-title d-flex">
                                    <i class="fa-solid fa-graduation-cap"></i>
                                    <h2 class="education-title">My Education</h2>
                                </div>

                                @foreach ($eductions as $education)
                                    <div class="card-custom ">
                                        <div class="date">{{ $education->year_title }}</div>
                                        <div class="title">{{ $education->course_name }}</div>
                                        <div class="exp-desc">{{ $education->institute_name }}</div>
                                    </div>
                                @endforeach

                            </div>

                            <!-- Education Column -->
                            <div class="col-md-6 moveup-animation delay-2">
                                <div class="edu-exp-section-title d-flex">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <h2 class="experience-title ">My Experience</h2>
                                </div>

                                @foreach ($experiences as $key => $experience)
                                    <div class="card-custom ">
                                        <div class="date"><i class="{{ $experience->icon }}"></i></div>
                                        <div class="title">{{ $experience->exp_position }}</div>
                                        <div class="edu-desc">{{ $experience->details }}</div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
