<footer class="py-3 text-center exp-desc footerBg">
    <div class="container">
        <div class="mb-2">
            <!-- Logo -->
            <a href="{{ route('index') }}">
                <img src="{{ asset($generalsetting->logo) }}" alt="Logo" class="mb-3" style="width: 100px;">
            </a>
        </div>

        <!-- Navigation Links -->
        <ul class="flex-wrap mb-3 nav justify-content-center">
            <li class="nav-item">
                <a class="px-3 exp-desc nav-link fw-bold" href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="px-3 exp-desc nav-link fw-bold" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item">
                <a class="px-3 exp-desc nav-link fw-bold" href="{{ route('portfolio') }}">Portfolios</a>
            </li>
            <li class="nav-item">
                <a class="px-3 exp-desc nav-link fw-bold" href="{{ route('testimonial') }}">Testimonial</a>
            </li>
            <li class="nav-item">
                <a class="px-3 exp-desc nav-link fw-bold" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="px-3 exp-desc nav-link fw-bold" href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>
        <hr>
        <!-- Copyright -->
        <p class="mb-0 small footerColor">&copy; {{ date('Y') }} All rights reserved by <a href="https://www.facebook.com/123mdasaduzzaman"
                class="exp-desc text-decoration-underline fw-bold" target="_blank">Asad</a></p>
    </div>
</footer>

</body>

</html>
