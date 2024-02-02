<header class="l-header">
    <a href="/">
        <img class="l-header__image"
            src="{{ asset('assets/images/logo_hipe.webp') }}" 
            alt="HiPE logo"
            width="100%"
            height="100%"
        >
    </a>   
    <nav class="l-header__nav">
        <a href="#" class="l-header__nav__item">Home</a>
        <a href="#" class="l-header__nav__item">Portfolio</a>
        <a href="#" class="l-header__nav__item">Articles</a>
        <a href="#" class="l-header__nav__item">About Us</a>
    </nav>
    <button type="button" class="l-header__button">Contact Us</button>

    <button id="hamburger" class="l-header__side-btn" aria-label="Toggle Sidebar">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
    </button>

    <!-- Mobile Sidebar -->
    <div id="mobileSidebar" class="l-header__side-nav hidden">
        <div class="l-header__side-nav__container">
            <div class="l-header__side-nav__container__header">
                <button id="closeSidebar">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>   
            </div>
            <div class="l-header__side-nav__container__items">
                <a href="#" class="l-header__side-nav__container__items__link">Home</a>
                <a href="#" class="l-header__side-nav__container__items__link">Portfolio</a>
                <a href="#" class="l-header__side-nav__container__items__link">Articles</a>
                <a href="#" class="l-header__side-nav__container__items__link">About Us</a>
                <a href="#" class="l-header__side-nav__container__items__link underline">Contact Us</a>
            </div>
        </div>
    </div>
</header>
