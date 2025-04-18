@extends('Frontend.layouts.master')
@section('maincontent')
    <!-- ============== banner section =============== -->
    <section>
        <div class="background_Bg">
            <div class="container">
                <div class="row hero-section">
                    <!-- Left Side: Text -->
                    <div class="col-lg-6 col-md-12 d-flex flex-column justify-content-center hero-text">
                        <h1>I am {{ $banner->name }}</h1>
                        <h2>{{ $banner->title }}</h2>
                        <p>{{ $banner->short_details }}</p>
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <button class="mt-3 btn btn-custom">
                                    Download CV <i class="fa-solid fa-download"></i>
                                </button>
                            </div>
                            <div class="col-12 col-lg-8">
                                <div class="mt-4 social-icons">
                                    @foreach ($socialmedias as $socialmedia)
                                        <a href="{{ $socialmedia->link }}"><i class="{{ $socialmedia->icon }}"></i></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: Image -->
                    <div class="text-center col-lg-6 col-md-12 hero-image">
                        <img src="{{ asset($banner->image) }}" alt="Profile Image">
                    </div>
                </div>
            </div>

            <!-- counter section -->
            <div class="py-3 counter-section">
                <div class="container">
                    <div class="text-center row">
                        @foreach ($counters as $value)
                            <div class="col-6 col-md-3">
                                <h2 class="counter" data-target="{{ $value->count }}"
                                    @if ($value->plus == 1) data-plus="true" @endif></h2>
                                <p class="counter-title">{{ $value->title }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========== about us section =============== -->
    <section id="aboutUs">
        <div class="container mt-5">
            <div class="about-me">
                <h2 class="text-center about-us-title section-title">ABOUT US</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="about-image">
                            <img src="{{ asset($about->image) }}" alt="">
                        </div>
                    </div>
                    <div class="about-text">
                        <h3>I am <span>{{ $about->name }}</span></h3>
                        <h5>{{ $about->designation }}</h5>
                        <hr>
                        <p>{{ $about->details }}</p>
                    </div>
                </div>
            </div>

            <div class="education-experience">
                <h2 class="section-title">EDUCATION & EXPERIENCE</h2>
                <div class="main-wrapper">
                    <div class="text-center row text-md-start">
                        <!-- Experience Column -->
                        <div class="mb-4 col-md-6">
                            <div class="edu-exp-section-title d-flex">
                                <i class="fa-solid fa-graduation-cap"></i>
                                <h2 class="education-title">My Education</h2>
                            </div>

                            @foreach ($eductions as $education)
                                <div class="card-custom">
                                    <div class="date">{{ $education->year_title }}</div>
                                    <div class="title">{{ $education->course_name }}</div>
                                    <div class="exp-desc">{{ $education->institute_name }}</div>
                                </div>
                            @endforeach

                        </div>

                        <!-- Education Column -->
                        <div class="col-md-6">
                            <div class="edu-exp-section-title d-flex">
                                <i class="fa-solid fa-briefcase"></i>
                                <h2 class="experience-title">My Experience</h2>
                            </div>

                            @foreach ($experiences as $experience)
                                <div class="card-custom">
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
    </section>

    <!-- ====================== works/portfolio =================== -->
    <section>
        <div class="background_Bg">
            <div class="container text-center">
                <h2 class="section-title">MY RECENT WORKS</h2>
                <!-- Tabs -->
                <ul class="nav nav-pills justify-content-center" id="portfolioTabs">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#all">All</button>
                    </li>
                    @foreach ($portfolios as $value)
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="pill"
                                data-bs-target="#{{ $value->category_id }}">UX/UI</button>
                        </li>
                    @endforeach
                </ul>

                <!-- Content -->
                <div class="mt-4 tab-content">
                    <!-- All -->
                    <div class="tab-pane fade show active" id="all">
                        <div class="row g-4 justify-content-center">
                            @foreach ($portfolios->take(6) as $value)
                                <a href="{{ $value->link }}">
                                    <div class="col-md-6 portfolio-item show">
                                        <div class="portfolio-card">
                                            <img src="https://themejunction.net/tailwind/gerold/demo/assets/img/portfolio/2.jpg"
                                                alt="Deloitte">
                                            <a href="{{ $value->link }}">
                                                <div class="portfolio-overlay">
                                                    <div class="portfolio-title">{{ $value->title }}</div>
                                                    <p class="portfolio-desc">{{ $value->details }}</p>
                                                    <div class="portfolio-arrow">↗</div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <!-- portfolio -->
                    <div class="tab-pane fade" id="{{ $value->id }}">
                        <div class="row g-4 justify-content-center">
                            @foreach ($portfolios as $value)
                                <div class="col-md-6 portfolio-item show">
                                    <div class="portfolio-card">
                                        <img src="{{ $value->image }}" alt="UX">
                                        <a href="{{ $value->link }}">
                                            <div class="portfolio-overlay">
                                                <div class="portfolio-title">{{ $value->title }}</div>
                                                <p class="portfolio-desc">{{ $value->details }}</p>
                                                <div class="portfolio-arrow">↗</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================= skills ===================== -->

    <div class="my-skills-style">

        <section class="text-center">
            <h2 class="fw-bold">My Skills</h2>
            <p class="">We put your ideas and thus your wishes in the form of a unique web project that
                inspires you and your customers.</p>

            <div class="container mt-5">
                <div class="row g-3 justify-content-center">

                    @foreach ($skills as $skill)
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                            <div class="skill-card">
                                <div class="skill-icon">
                                    <i class="{{ $skill->icon }}" style="--hover-color:{{ $skill->color }};"></i>
                                </div>
                                <div class="skill-percentage">{{ $skill->percentage }}%</div>
                                <div class="skill-name">{{ $skill->name }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>



    <!-- ======================== Blog ======================= -->
    <section>
        <div class="background_Bg">
            <div class="container py-4">
                <div class="contact-heading">
                    <h2 class="text-center section-title">RECENT BLOGS</h2>
                </div>
                <div class="row g-4">
                    @foreach ($blogs as $blog)
                        <div class="col-md-4">
                            <a href="{{ route('blog.details', $blog->slug) }}">
                                <div class="blog-card">
                                    <span class="tag">{{ $blog->blogcategory->category_name }}</span>
                                    <img src="{{ asset($blog->thumb_img) }}" alt="Blog 1">
                                    <div class="overlay">
                                        <small>📅 {{ $blog->date }} </small>
                                        {{-- <small>📅 Oct 01, 2022 </small> --}}
                                        <h5>{{ $blog->title }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== contact us ===================== -->
    <section>
        <div class="background_Bg">
            <div class="container pt-5">
                <div class="contact-heading">
                    <h2 class="text-center section-title">CONTACT US</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6 col-sm-12 contact-section">
                        <h2>Let's work together!</h2>
                        <p>I design and code beautifully simple things and I love what I do. Just simple like that!</p>
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            @if (session('contactus_success'))
                                <div class="alert alert-success">{{ session('contactus_success') }}</div>
                            @endif
                            <div class="row g-3 contact-us-form">
                                <div class="col-md-6">
                                    <input type="text" name="first_name" class="form-control"
                                        placeholder="First name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="last_name" class="form-control" placeholder="Last name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" class="form-control"
                                        placeholder="Email address">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="Phone number">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" placeholder="Message" rows="4"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn contact-btn-custom">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-1 "></div>
                    <div
                        class="col-lg-5 col-md-6 col-11 d-flex flex-column justify-content-center text-light contact-info">
                        <div class="mb-4 d-flex align-items-center">
                            <i class="fas fa-phone"></i>
                            <div>
                                <h5>Phone</h5>
                                <p>{{ $contact->number }}</p>
                            </div>
                        </div>
                        <div class="mb-4 d-flex align-items-center">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <h5>Email</h5>
                                <p>{{ $contact->email }}</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <h5>Address</h5>
                                <p>{{ $contact->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
