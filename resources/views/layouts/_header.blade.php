<header>
    <div class="l-header l-wrapper l-wrapper--fluid">
        <div class="l-header__left">
            <a href="/">
                <img class="l-header__image" src="{{ asset('assets/images/logo_hipe.webp') }}" alt="HiPE logo"
                    width="100%" height="100%">
            </a>
            <nav class="l-header__nav">
                <a href="{{ route('home.index') }}">Home</a>
                <a href="{{ route('services.index') }}">Services / Pricing</a>
                <a href="#">Articles</a>
                <a href="{{ route('about-us.index') }}">About Us</a>
            </nav>
        </div>
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
                    <a href="{{ route('home.index') }}">Home</a>
                    <a href="{{ route('services.index') }}">Services / Pricing</a>
                    <a href="#">Articles</a>
                    <a href="{{ route('about-us.index') }}">About Us</a>
                    <a href="#" class='contact'>Contact Us</a>
                </div>
                <div class="l-header__copyright">
                    <span>Copyright &copy; 2024 HiPE Japan Inc.
                </div>
            </div>
        </div>
    </div>
</header>
