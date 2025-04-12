@extends('Frontend.layouts.master')
@section('maincontent')
    <!-- Details Section -->
    <section>
        <div class="another-page-heading"
            style="background: url('{{ asset('public/Frontend/frontend_assets/images/nav-details.jpg') }}') no-repeat center center/cover;">
            <div class="another-page-content">
                <h1 class="fw-bold">Contact Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item"><a><i class="fa-solid fa-arrow-right"></i></a></li>
                        <li class="text-white breadcrumb-item active" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- ==================== contact us ===================== -->
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
