@extends('Frontend.layouts.master')
@section('title')
    Blog Details
@endsection
@section('maincontent')
    <!-- Details Section -->
    <section>
        <div class="background_Bg">
            <div class="another-page-heading"
                style="background: url('{{ asset('public/Frontend/frontend_assets/images/nav-details.jpg') }}') no-repeat center center/cover;">
                <div class="another-page-content">
                    <h1 class="fw-bold">Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a><i class="fa-solid fa-arrow-right"></i></a></li>
                            <li class="text-white breadcrumb-item active" aria-current="page">Blog Details</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="container mt-3">
                <div class="row">
                    <!-- Main Content -->
                    <div class="col-lg-8 col-md-8 col-12">
                        <div class="blog-card">
                            <!-- Full Image (No Hover Effects) -->
                            <img src="{{ asset($blog->main_img) }}" class="blog-image" alt="Blog Image">
                            <span
                                class="top-0 m-3 badge-custom position-absolute end-0">{{ $blog->blogcategory->category_name }}</span>

                            <div class="mx-4">
                                <!-- Meta Info -->
                                <div class="mt-4 d-flex align-items-center text-muted meta-info">
                                    <span class="me-3"><i class="fa fa-user"></i> By Admin</span>
                                    <span class="me-3"><i class="fa-solid fa-calendar-days"></i> 11 Jul, 2023</span>
                                </div>
                                <!-- Blog Title -->
                                <h3 class="mt-3 sidebar-date-title fw-bold">{{ $blog->title }}</h3>
                                <!-- Blog Content -->
                                <div class="sidebar-date-title">
                                    <div class="mt-2">
                                        {{ $blog->long_details }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Empty Space (Desktop only) -->
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="sidebar">
                            <h5 class="mt-4 fw-bold">RECENT POST</h5>
                            @foreach ($recent_blogs as $recent_blog)
                                <a href="{{ route('blog.details', $recent_blog->slug) }}">
                                    <div class="recent-post">
                                        <img src="{{ asset($recent_blog->thumb_img) }}" alt="Post">
                                        <div class="sidebar-date-title">
                                            <small>📅 {{ $recent_blog->date }} </small>
                                            {{-- <small>📅 Jan 2024 </small> --}}
                                            <h6 class="mb-0">{{ $recent_blog->title }}</h6>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
