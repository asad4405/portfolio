<!DOCTYPE html>
<html lang="en">

<head>
    @php
        $blogs = App\Models\Blog::where('status', 1)->get();
        $generalsetting = App\Models\GeneralSetting::where('status', 1)->first();
    @endphp
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Portfolio</title>
    <link rel="stylesheet" type="text/css"
        href="{{ asset('public/Frontend/frontend_assets/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/Frontend/frontend_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Frontend/frontend_assets/css/mobie-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Frontend/frontend_assets/css/tab-pad-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Frontend/frontend_assets/css/only-pc-responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="{{ asset($generalsetting->favicon) }}" type="image/x-icon" />
</head>
<!-- ================= Navbar ======================= -->

<section>
    <!-- Navbar (Desktop) -->
    <nav class="navbar navbar-expand-lg desktop-menu">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand desktop-navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset($generalsetting->logo) }}" alt="Logo">
            </a>

            <!-- Navigation Items -->
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('index') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Portfolio</a></li>
                    <!-- Blog Dropdown (Hover) -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#">Blog</a>
                        <ul class="dropdown-menu navbar-submenu">
                            @foreach ($blogs as $blog)
                                <li><a class="dropdown-item"
                                        href="{{ route('blog.details', $blog->slug) }}">{{ $blog->blogcategory->category_name }}</a>
                                </li>
                            @endforeach
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
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset($generalsetting->logo) }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu">
                <i class="fa-solid fa-bars-staggered"></i>
            </button>
        </div>
    </nav>

    <!-- Offcanvas Drawer (Mobile) -->
    <div class="offcanvas offcanvas-start d-lg-none" id="mobileMenu">
        <div class="offcanvas-header">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img src="{{ asset($generalsetting->logo) }}" alt="Logo">
            </a>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('index') }}">Home</a></li>
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
                            @foreach ($blogs as $blog)
                                <li class="nav-item"><a class="nav-link"
                                        href="{{ route('blog.details', $blog->slug) }}">{{ $blog->blogcategory->category_name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</section>

<body>
