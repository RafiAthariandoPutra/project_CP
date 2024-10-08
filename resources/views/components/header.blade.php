<header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
    <div class="global-container">
        <div class="flex items-center justify-between gap-x-8">
            <!-- Header Logo -->
            <a class href='/'>
                <img src="assets/img/logo-dark.png" alt="AIMass" width="96" height="24" />
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
                        <li class="nav-item nav-item-has-children">
                            <a href="/" class="nav-link-item drop-trigger">Home

                                {{-- <ul class="sub-menu" id="submenu-1">
                                <li class="sub-menu--item">
                                    <a href='/'>home 01</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href='/index-2'>home 02</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href='/index-3'>home 03</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href='/index-4'> home 04</a>
                                </li>
                            </ul> --}}
                        </li>
                        <li class="nav-item">
                            <a class='nav-link-item' href='/about'>About</a>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Services
                                <img class="dropdown-icon" src="{{ asset('assets/img/icon-black-cheveron-right.svg') }}"
                                    alt="cheveron-right" width="16" height="16" /></a>
                            <ul class="sub-menu" id="submenu-2">
                                <li class="sub-menu--item">
                                    <a href='/services'>Services</a>
                                </li>
                                <li class="sub-menu--item">
                                    <a href='/service-details'>Service Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item nav-item-has-children">
                            <a href="#" class="nav-link-item drop-trigger">Pages
                                <img class="dropdown-icon" src="{{ asset('assets/img/icon-black-cheveron-right.svg') }}"
                                    alt="cheveron-right" width="16" height="16" /></a>
                            <ul class="sub-menu" id="submenu-3">
                                <li class="sub-menu--item nav-item-has-children">
                                    <a href="#" data-menu-get="h3" class="drop-trigger">blogs
                                        <img class="dropdown-icon"
                                            src="{{ asset('assets/img/icon-black-cheveron-right.svg') }}"
                                            alt="cheveron-right" width="16" height="16" /></a>
                                    <ul class="sub-menu shape-none" id="submenu-4">
                                        <li class="sub-menu--item">
                                            <a href='/blog'>blogs</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href='/blog-details'>blog details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu--item nav-item-has-children">
                                    <a href="#" data-menu-get="h3" class="drop-trigger">Team
                                        <img class="dropdown-icon"
                                            src="{{ asset('assets/img/icon-black-cheveron-right.svg') }}"
                                            alt="cheveron-right" width="16" height="16" />
                                    </a>
                                    <ul class="sub-menu shape-none" id="submenu-5">
                                        <li class="sub-menu--item">
                                            <a href='/teams'>Teams</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href='/team-details'>Teams Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu--item nav-item-has-children">
                                    <a href="#" data-menu-get="h3" class="drop-trigger">FAQ
                                        <img class="dropdown-icon"
                                            src="{{ asset('assets/img/icon-black-cheveron-right.svg') }}"
                                            alt="cheveron-right" width="16" height="16" />
                                    </a>
                                    <ul class="sub-menu shape-none" id="submenu-6">
                                        <li class="sub-menu--item">
                                            <a href='/faq'>FAQ-1</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href='/faq-2'>FAQ-2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu--item nav-item-has-children">
                                    <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio
                                        <img class="dropdown-icon"
                                            src="{{ asset('assets/img/icon-black-cheveron-right.svg') }}"
                                            alt="cheveron-right" width="16" height="16" />
                                    </a>
                                    <ul class="sub-menu shape-none" id="submenu-7">
                                        <li class="sub-menu--item">
                                            <a href='/portfolio'>Portfolio</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href='/portfolio-details'>Portfolio Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-menu--item">
                                    <a class='drop-trigger' data-menu-get='h3' href='/pricing'>Pricing
                                    </a>
                                </li>

                                <li class="sub-menu--item nav-item-has-children">
                                    <a href="#" data-menu-get="h3" class="drop-trigger">Utilities
                                        <img class="dropdown-icon"
                                            src="{{ asset('assets/img/icon-black-cheveron-right.svg') }}"
                                            alt="cheveron-right" width="16" height="16" />
                                    </a>
                                    <ul class="sub-menu shape-none" id="submenu-8">
                                        <li class="sub-menu--item">
                                            <a href='/error-404'>Error 404</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href='/login'>Login</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href='/signup'>Signup</a>
                                        </li>
                                        <li class="sub-menu--item">
                                            <a href='/reset-password'>Reset Password</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class='nav-link-item' href='/contact'>Contact</a>
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
                    href='/signup'>Sign
                    up free</a>
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
