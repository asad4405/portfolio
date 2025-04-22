@extends('Frontend.layouts.master')
@section('maincontent')
    <!-- Details Section -->
    <section>
        <div class="background_Bg">
            <div class="another-page-heading"
                style="background: url('{{ asset('public/Frontend/frontend_assets/images/nav-details.jpg') }}') no-repeat center center/cover;">
                <div class="another-page-content">
                    <h1 class="fw-bold">Portfolio</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a><i class="fa-solid fa-arrow-right"></i></a></li>
                            <li class="text-white breadcrumb-item active" aria-current="page">Portfolio</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- ==================== Portfolio ===================== -->
            <section>
                <div class="background_Bg">
                    <div class="container text-center">
                        <h2 class="section-title moveup-animation delay-0">MY PORTFOLIOS</h2>

                        <!-- Tabs -->
                        <ul class="nav nav-pills justify-content-center" id="portfolioTabs">
                            <li class="nav-item moveup-animation delay-1">
                                <button class="nav-link active" data-bs-toggle="pill" data-bs-target="#all">All</button>
                            </li>
                            @php
                                $categories = $portfolios->pluck('category')->unique('id');
                            @endphp
                            @foreach ($categories as $category)
                                <li class="nav-item moveup-animation delay-1">
                                    <button class="nav-link" data-bs-toggle="pill"
                                        data-bs-target="#cat-{{ $category->id }}">
                                        {{ $category->category_name }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>

                        <!-- Content -->
                        <div class="mt-4 tab-content">
                            <!-- All -->
                            <div class="tab-pane fade show active" id="all">
                                <div class="row g-4 justify-content-center">
                                    @foreach ($portfolios->take(6) as $value)
                                        <div class="col-md-6 col-lg-4">
                                            <div class="portfolio-card">
                                                <img class="moveup-animation delay-3" src="{{ asset($value->image) }}"
                                                    alt="{{ $value->title }}">
                                                <a href="{{ $value->link }}" target="_blank">
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

                            <!-- Category Tabs -->
                            @foreach ($categories as $category)
                                <div class="tab-pane fade" id="cat-{{ $category->id }}">
                                    <div class="row g-4 justify-content-center">
                                        @foreach ($portfolios->where('category_id', $category->id) as $value)
                                            <div class="col-md-6 col-lg-4">
                                                <div class="portfolio-card">
                                                    <img class="moveup-animation delay-0" src="{{ asset($value->image) }}"
                                                        alt="{{ $value->title }}">
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
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="my-skills-style">

                    <section class="text-center">
                        <h2 class="fw-bold moveup-animation delay-0">MY SKILLS</h2>
                        <p class="moveup-animation delay-1">We put your ideas and thus your wishes in the form of a unique
                            web project
                            that
                            inspires you and your customers.</p>

                        <div class="container mt-5 moveup-animation delay-2">
                            <div class="row g-3 justify-content-center">

                                @foreach ($skills as $skill)
                                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                                        <div class="skill-card">
                                            <div class="skill-icon">
                                                <i class="{{ $skill->icon }}"
                                                    style="--hover-color:{{ $skill->color }};"></i>
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
            </section>
        </div>
    </section>
@endsection
