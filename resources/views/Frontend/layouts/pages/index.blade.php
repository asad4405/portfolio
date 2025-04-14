@extends('Frontend.layouts.master')
@section('maincontent')
    <!-- ============== banner section =============== -->
    <section>
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
                    <div class="col-6 col-md-3">
                        <h2 class="counter" data-target="14"></h2>
                        <p class="text-white">Years of Experience</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <h2 class="counter" data-target="50"></h2>
                        <p class="text-white">Projects Completed</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <h2 class="counter" data-target="1000"></h2>
                        <p class="text-white">Happy Clients</p>
                    </div>
                    <div class="col-6 col-md-3">
                        <h2 class="counter" data-target="14"></h2>
                        <p class="text-white">Years of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========== about us section =============== -->
    <section id="aboutUs">
        <div class="container mt-5">
            <div class="about-me">
                <h2 class="text-center section-title">ABOUT US</h2>
                <div class="about-line"></div>
                <div class="row">
                    <div class="col-12">
                        <div class="about-image">
                            <img src="{{ asset('public/Frontend/frontend_assets/images/about-banner.jpg') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="about-text">
                        <h3>I am <span>Md. Asaduzzaman</span></h3>
                        <h5>Software Developer</h5>
                        <hr>
                        <p>I'm a Professional Software Developer.
                            I have 1 year+ work experience.
                            I make top-quality websites. User-friendly and responsive custom websites. Skills:- HTML5, CSS3,
                            Bootstrap, JavaScript, jQuery, ajax, PHP, Laravel, MySQL. I always give a chance to my clients
                            to prove my best. Please feel
                            free to contact me anytime.</p>
                    </div>
                </div>
            </div>

            <div class="education-experience">
                <h2 class="section-title">EDUCATION & EXPERIENCE</h2>
                <div class="exp-line"></div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="highlight">Education</div>
                        @foreach ($eductions as $education)
                            <div class="edu-exp-box">
                                <p><strong>{{ $education->year_title }}</strong></p>
                                <h5>{{ $education->course_name }}</h5>
                                <p>{{ $education->institute_name }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="highlight mobile_highlight">Experience</div>
                        @foreach ($experiences as $experience)
                            <div class="edu-exp-box">
                                <p><i class="{{ $experience->icon }}"></i></p>
                                <h5>{{ $experience->exp_position }}</h5>
                                <p>{{ $experience->details }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ======================== Blog ======================= -->
    <section>
        <div class="container py-4">
            <div class="contact-heading">
                <h2 class="text-center section-title">RECENT BLOGS</h2>
                <div class="recent-blog-line"></div>
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
    </section>

    <!-- ==================== contact us ===================== -->
    <section>
        <div class="container mt-5">
            <div class="contact-heading">
                <h2 class="text-center section-title">CONTACT US</h2>
                <div class="contact-line"></div>
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
                                <input type="text" name="first_name" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="last_name" class="form-control" placeholder="Last name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email address">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control" placeholder="Phone number">
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
                <div class="col-lg-5 col-md-6 col-11 d-flex flex-column justify-content-center text-light contact-info">
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
    </section>
@endsection
