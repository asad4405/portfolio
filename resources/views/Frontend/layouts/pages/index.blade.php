@extends('Frontend.layouts.master')
@section('maincontent')
    <!-- ================= Navbar ======================= -->
    <section>
        <!-- Navbar (Desktop) -->
        <nav class="navbar navbar-expand-lg desktop-menu">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('Frontend/frontend_assets/images/logo.png') }}" alt="Logo">
                </a>

                <!-- Navigation Items -->
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Portfolios</a></li>
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
                    <img src="{{ asset('Frontend/frontend_assets/images/logo.png') }}" alt="Logo">
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
                    <img src="{{ asset('Frontend/frontend_assets/images/logo.png') }}" alt="Logo">
                </a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
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
@endsection
