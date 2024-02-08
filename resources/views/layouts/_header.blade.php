<header class="l-header">
    <a href="/">
        <img class="l-header__image" src="{{ asset('assets/images/logo_hipe_black.webp') }}" alt="HiPE logo" width="100%"
            height="100%">
    </a>
    <nav class="l-header__nav">
        <a href="#">Home</a>
        <a href="#">Portfolio</a>
        <a href="#">Articles</a>
        <a href="#">About Us</a>
    </nav>
    <button type="button" class="l-header__button">Contact Us</button>

    <button id="hamburger" class="l-header__side-btn" aria-label="Toggle Sidebar">
        @include('components.svg.hamburger')
    </button>

    <!-- Mobile Sidebar -->
    <div id="mobileSidebar" class="l-header__side-nav hidden">
        <div class="l-header__container">
            <button id="closeSidebar">
                @include('components.svg.close')
            </button>
            <div class="l-header__items">
                <a href="#">Home</a>
                <a href="#">Portfolio</a>
                <a href="#">Articles</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
    </div>
</header>
