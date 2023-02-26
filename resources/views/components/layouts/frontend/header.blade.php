<!-- mobile menu start -->
<div class="mobile-menu">
    <nav class="mobile-header primary-menu d-xl-none">
        <div class="header-logo">
            <a href="{{ route('home') }}" class="logo"><img src="{{ asset(setting('logo')) ?? null }}" alt="logo"></a>
        </div>
        <div class="header-bar">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <nav class="menu">
        <div class="mobile-menu-area d-xl-none">
            <div class="mobile-menu-area-inner" id="scrollbar">
                <ul class="m-menu">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">About</a>
                    </li>
                    <li>
                        <a href="{{ route('project') }}">Projects</a>
                    </li>
                    <li>
                        <a href="{{ route('product') }}">Product</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<!-- moboli menu ending -->


<!-- header section start -->
<header class="header-section d-xl-block d-none px-5">
    <div class="header-area px-2">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset(setting('logo')) ?? null }}" alt="logo"></a>
        </div>
        <div class="main-menu d-none d-xl-block">
            <ul class="menu">
                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('project') }}">Project</a>
                </li>
                <li>
                    <a href="{{ route('product') }}">Product</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}">Contact</a>
                </li>
                <li>
                    <a href="{{ route('login') }}">Login</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- header section ending -->