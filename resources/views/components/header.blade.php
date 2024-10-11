<header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
    <div class="global-container">
        <div class="flex items-center justify-between gap-x-8">
            <!-- Header Logo -->
            <a class href='/'>
                <h2 class="text-2xl font-medium">Company Profile</h2>
                {{-- <img src="assets/img/logo-dark.png" alt="AIMass" width="96" height="24" /> --}}
            </a>
            <!-- Header Logo -->

            <!-- Header Navigation -->
            <div class="menu-block-wrapper">
                <div class="menu-overlay"></div>
                <nav class="menu-block" id="append-menu-header">
                    <div class="mobile-menu-head">
                        <div class="go-back">
                            <img class="dropdown-icon" src="assets/img/icon-black-long-arrow-right.svg"
                                alt="cheveron-right" width="16" height="16" />
                        </div>
                        <div class="current-menu-title"></div>
                        <div class="mobile-menu-close">&times;</div>
                    </div>
                    <ul class="site-menu-main">
                        <li class="nav-item">
                            <a class='nav-link-item' href='#home'>Home</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link-item' href='#service'>Service</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link-item' href='#project'>Project</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link-item' href='#team'>Teams</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link-item' href='#testimonial'>Testimonial</a>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link-item' href='#faq'>Faq</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- Header Navigation -->

            <!-- Header User Event -->
            <div class="flex items-center gap-6">
                <a class='button hidden rounded-[50px] border-[#7F8995] bg-transparent text-black after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-white lg:inline-block'
                    href='/login'>Login</a>
                <a class='button hidden rounded-[50px] border-black bg-black text-white after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-white lg:inline-block'
                    href='#contact'>Contact</a>
                <!-- Responsive Offcanvas Menu Button -->
                <div class="block lg:hidden">
                    <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
            </div>
            <!-- Header User Event -->
        </div>
</header>
