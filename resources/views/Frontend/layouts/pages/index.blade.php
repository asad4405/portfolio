@extends('Frontend.layouts.master')
@section('maincontent')
    <!-- ================= Navbar ======================= -->
    <section>
        <!-- Navbar (Desktop) -->
        <nav class="navbar navbar-expand-lg desktop-menu">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand desktop-navbar-brand" href="#">
                    <img src="{{ asset('public/Frontend/frontend_assets/images/logo.png') }}" alt="Logo">
                </a>

                <!-- Navigation Items -->
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
                        <!-- Blog Dropdown (Hover) -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#">Blog</a>
                            <ul class="dropdown-menu navbar-submenu">
                                <li><a class="dropdown-item" href="#">Latest Posts</a></li>
                                <li><a class="dropdown-item" href="#">Trending</a></li>
                                <li><a class="dropdown-item" href="#">Categories</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Navbar (Mobile) -->
        <nav class="navbar d-lg-none">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('public/Frontend/frontend_assets/images/logo.png') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
            </div>
        </nav>

        <!-- Offcanvas Drawer (Mobile) -->
        <div class="offcanvas offcanvas-start d-lg-none" id="mobileMenu">
            <div class="offcanvas-header">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('public/Frontend/frontend_assets/images/logo.png') }}" alt="Logo">
                </a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#aboutUs">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Portfolios</a></li>
                    <!-- Collapsible Blog Submenu -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#blogSubmenu" role="button">
                            Blog ⬇
                        </a>
                        <div class="collapse" id="blogSubmenu">
                            <ul class="navbar-nav ps-3">
                                <li class="nav-item"><a class="nav-link" href="#">Latest Posts</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Trending</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Categories</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </section>

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
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-github"></i></a>
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
                        <div class="edu-exp-box">
                            <p><strong>(2019 - 2020)</strong></p>
                            <h5>Web Designer</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="edu-exp-box">
                            <p><strong>(2019 - 2020)</strong></p>
                            <h5>Web Developer</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6">
                        <div class="highlight mobile_highlight">Experience</div>
                        <div class="edu-exp-box">
                            <p><i class="fa-solid fa-code"></i></p>
                            <h5>Front-End Developer</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <div class="edu-exp-box">
                            <p><i class="fa-solid fa-code"></i></p>
                            <h5>Back-End Developer</h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
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
                <div class="col-lg-6 col-md-6 contact-section">
                    <h2>Let's work together!</h2>
                    <p>I design and code beautifully simple things and I love what I do. Just simple like that!</p>
                    <form>
                        <div class="row g-3 contact-us-form">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Email address">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Phone number">
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" placeholder="Message" rows="4"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn contact-btn-custom">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-6 d-flex flex-column justify-content-center text-light contact-info">
                    <div class="mb-4 d-flex align-items-center">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h5>Phone</h5>
                            <p>+01 123 654 8096</p>
                        </div>
                    </div>
                    <div class="mb-4 d-flex align-items-center">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h5>Email</h5>
                            <p>gerolddesign@mail.com</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h5>Address</h5>
                            <p>Warne Park Street Pine, FL 33157, New York</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
