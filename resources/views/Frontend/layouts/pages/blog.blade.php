@extends('Frontend.layouts.master')
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
                            <li class="text-white breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- ==================== blog ===================== -->
            <section>
                <div class="background_Bg">
                    <div class="container py-4">
                        <div class="contact-heading">
                            <h2 class="text-center section-title moveup-animation delay-0"> BLOGS</h2>
                        </div>
                        <div class="row g-4">
                            @foreach ($blogs as $blog)
                                <div class="col-md-3 blog_col moveup-animation delay-1">
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
        </div>
    </section>
@endsection
