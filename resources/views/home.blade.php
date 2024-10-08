@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
    <!--...::: Hero Section Start :::... -->
    <section id="section-hero">
        <!-- Section Spacer -->
        <div
            class="relative h-screen z-[1] overflow-hidden rounded-bl-[30px] rounded-br-[30px] bg-colorLinenRuffle pb-20 pt-28 lg:rounded-bl-[50px] lg:rounded-br-[50px] lg:pb-24 lg:pt-32 xl:pt-40 xxl:pb-[133px] xxl:pt-[195px]">
            <!-- Section Container -->
            <div class="global-container">
                <!-- Hero Content -->
                <div class="mb-14 flex flex-col items-center text-center lg:mb-20">
                    <h1 class="jos text-5xl slide-from-bottom mb-6 max-w-[510px] lg:max-w-[768px] xl:max-w-[1076px]">
                        {{ $hero->title }}
                    </h1>
                    <p class="jos slide-from-bottom mb-11 max-w-[700px] text-lg font-semibold sm:text-xl xl:max-w-[980px]">
                        {{ $hero->subtitle }}
                    </p>
                    <div class="jos flex flex-wrap justify-center gap-6" data-jos_animation="fade">
                        <a href="#"
                            class="button rounded-[50px] border-2 border-black bg-black py-4 text-white after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-white">Get
                            started for free</a>
                        <a href="#"
                            class="button rounded-[50px] border-2 border-black bg-transparent py-4 text-black after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-white">Learn
                            more</a>
                    </div>
                </div>
                <!-- Hero Content -->
                <!-- Hero Image -->
                <div class="jos hero-img overflow-hidden rounded-2xl bg-black" data-jos_animation="zoom">
                    <img src="/storage/{{ $hero->hero_image }}" alt="hero-dashboard" width="1296" height="640"
                        class="h-auto w-full" />
                </div>
                <!-- Hero Image -->

                <div class="my-10 h-[1px] w-full bg-[#DBD6CF] lg:my-16 xl:my-20"></div>
                <div class="jos mx-auto mb-12 max-w-[715px] text-center lg:mb-16">
                    <p class="text-lg">
                        Companies of all sizes trust us to find AI SaaS critical to
                        their growth and innovation
                    </p>
                </div>
                <!-- Slider main container -->
                <div class="jos swiper brand-slider" data-jos_animation="fade">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($trustedCompanies as $item)
                            <div class="swiper-slide">
                                <img src="/storage/{{ $item['company_logo'] }}" alt="{{ $item->company_name }}"
                                    width="180" height="38" class="max-w-full" />
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <!-- Section Container -->
            <!-- Hero Background Shape 1 -->
            <div
                class="orange-gradient-1 absolute -right-[150px] top-[370px] -z-[1] h-[500px] w-[500px] animate-spin rounded-[500px]">
            </div>
            <!-- Hero Background Shape 2 -->
            <div
                class="orange-gradient-2 absolute right-[57px] top-[620px] -z-[1] h-[450px] w-[450px] animate-spin rounded-[450px]">
            </div>
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Hero Section End :::... -->

    <!--...::: Service Section Start :::... -->
    <section id="section-service">
        <!-- Section Spacer -->
        <div class="pb-20 pt-20 xl:pb-[150px] xl:pt-[130px]">
            <!-- Section Container -->
            <div class="global-container">
                <!-- Section Content Block -->
                <div class="jos mb-10 lg:mb-16 xl:mb-20">
                    <div class="md:max-w-sm lg:max-w-xl xl:max-w-[746px]">
                        <h2>Core features that make it valuable</h2>
                    </div>
                </div>
                <!-- Section Content Block -->
                <!-- Service List -->
                <ul
                    class="jos grid grid-cols-1 gap-[2px] overflow-hidden rounded-[10px] border-2 border-black bg-black sm:grid-cols-2 lg:grid-cols-4">

                    @foreach ($services as $item)
                        <!-- Service Item -->
                        <li class="group bg-white p-[30px] transition-all duration-300 ease-in-out hover:bg-black">

                            <h3
                                class="mb-4 block text-xl leading-tight -tracking-[0.5px] group-hover:text-white xl:text-2xl xxl:text-[28px]">
                                <a class='hover:text-colorOrangyRed' href='/service-details'>
                                    {{ $item->heading }}
                                </a>
                            </h3>

                            <p class="mb-12 duration-300 group-hover:text-white">
                                {{ $item->description }}
                            </p>

                            <a class='relative inline-block h-[30px] w-[30px] duration-300' href='/service-details'>
                                <img src="{{ asset('assets/img/arrow-right-black.svg') }}" alt="arrow-right-black"
                                    width="30" height="30" />
                                <img src="{{ asset('assets/img/arrow-right-orange.svg') }}" alt="arrow-right-black"
                                    width="30" height="30"
                                    class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100" />
                            </a>
                        </li>
                        <!-- Service Item -->
                    @endforeach

                </ul>
                <!-- Service List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Service Section End :::... -->

    <!--...::: Content Section Start :::... -->
    <section id="content-section-1">
        <!-- Section Spacer -->
        <div class="pb-20 xl:pb-[150px]">
            <!-- Section Container -->
            <div class="global-container">
                <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-20 xl:gap-28 xxl:gap-32">
                    <!-- Content Left Block -->
                    <div class="jos order-2 overflow-hidden rounded-md md:order-1" data-jos_animation="fade-left">
                        <img src="assets/img/th-1/content-image-1.jpg" alt="content-image-1" width="526" height="450"
                            class="h-auto w-full" />
                    </div>
                    <!-- Content Left Block -->
                    <!-- Content Right Block -->
                    <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                        <!-- Section Content Block -->
                        <div class="mb-6">
                            <h2>Accessible to a wider audience</h2>
                        </div>
                        <!-- Section Content Block -->
                        <div class="text-lg leading-[1.4] lg:text-[21px]">
                            <p class="mb-7 last:mb-0">
                                Advanced AI capabilities accessible to a broader audience,
                                including small & medium-sized businesses and individuals
                                who may not have the resources or expertise to develop.
                            </p>
                            <p class="mb-7 last:mb-0">
                                Advanced AI capabilities accessible to a broader audience,
                                including small & medium-sized businesses and individuals
                                who may not have the resources or expertise to develop.
                            </p>
                        </div>
                    </div>
                    <!-- Content Right Block -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Content Section End :::... -->

    <!--...::: Content Section Start :::... -->
    <section id="content-section-2">
        <!-- Section Spacer -->
        <div class="pb-20 xl:pb-[150px]">
            <!-- Section Container -->
            <div class="global-container">
                <div
                    class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-20 xl:grid-cols-[minmax(0,_1.2fr)_1fr] xl:gap-28 xxl:gap-32">
                    <!-- Content Left Block -->
                    <div class="jos order-2 overflow-hidden rounded-md" data-jos_animation="fade-left">
                        <img src="assets/img/th-1/content-image-2.jpg" alt="content-image-2" width="526" height="450"
                            class="h-auto w-full" />
                    </div>
                    <!-- Content Left Block -->
                    <!-- Content Right Block -->
                    <div class="jos order-1" data-jos_animation="fade-right">
                        <!-- Section Content Block -->
                        <div class="mb-6">
                            <h2>Providing quick deploy solutions</h2>
                        </div>
                        <!-- Section Content Block -->
                        <div class="text-lg leading-[1.4] lg:text-[21px]">
                            <p class="mb-7 last:mb-0">
                                Our AI SaaS solutions can be quickly deployed, enabling
                                users to start benefiting from AI capabilities without
                                lengthy setup and development times in fast-paced
                                industries.
                            </p>
                            <ul
                                class="flex flex-col gap-y-5 font-dmSans text-xl leading-tight tracking-tighter text-black lg:mt-12 lg:text-[28px]">
                                <li class="flex items-start gap-x-3">
                                    <div class="mt-[2.5px] h-[30px] w-[30px]">
                                        <img src="assets/img/th-1/check-circle.svg" alt="check-circle" width="30"
                                            height="30" class="h-full w-full" />
                                    </div>
                                    Ready-to-use AI capabilities system
                                </li>
                                <li class="flex items-start gap-x-3">
                                    <div class="mt-[2.5px] h-[30px] w-[30px]">
                                        <img src="assets/img/th-1/check-circle.svg" alt="check-circle" width="30"
                                            height="30" class="h-full w-full" />
                                    </div>
                                    Users can quickly integrate AI features
                                </li>
                                <li class="flex items-start gap-x-3">
                                    <div class="mt-[2.5px] h-[30px] w-[30px]">
                                        <img src="assets/img/th-1/check-circle.svg" alt="check-circle" width="30"
                                            height="30" class="h-full w-full" />
                                    </div>
                                    Time savings translate to cost savings
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Content Right Block -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Content Section End :::... -->

    <!--...::: Funfact Section Start :::... -->
    <section id="funfact-section">
        <div class="mx-auto max-w-[1500px] px-5">
            <div
                class="jos grid grid-cols-1 overflow-hidden rounded-[30px] bg-black lg:rounded-[50px] xl:grid-cols-[minmax(400px,_1fr)_1.5fr] xxl:grid-cols-[1fr_minmax(800px,_1fr)]">
                <!-- Funfact Left Block -->
                <div class="relative overflow-hidden rounded-[30px] lg:rounded-[50px]">
                    <img src="assets/img/th-1/funfact-image.jpg" alt="funfact-image" width="721" height="784"
                        class="h-80 w-full object-cover object-center lg:h-[35rem] xl:h-full" />
                    <!-- Video Play Button -->
                    <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q"
                        class="absolute left-1/2 top-1/2 z-[1] -translate-x-1/2 -translate-y-1/2">
                        <div
                            class="relative flex h-[120px] w-[120px] items-center justify-center rounded-full border-[3px] border-black text-lg font-bold backdrop-blur-[2px] transition-all duration-300 hover:bg-colorOrangyRed hover:text-white">
                            Play
                            <div
                                class="absolute -z-[1] h-[110%] w-[110%] animate-[ping_1.5s_ease-in-out_infinite] rounded-full bg-gray-600 opacity-30">
                            </div>
                        </div>
                    </a>
                    <!-- Video Play Button -->
                </div>
                <!-- Funfacct Left Block -->

                <!-- Funfact Right Block -->
                <div class="self-center px-6 py-16 sm:py-20 md:px-16 xl:px-10 xl:py-24 xxl:py-32 xxl:pl-16 xxl:pr-28">
                    <!-- Section Content Block -->
                    <div class="mb-8 lg:mb-16 xl:mb-6">
                        <h2 class="text-white">AI-powered that streamline tasks</h2>
                    </div>
                    <!-- Section Content Block -->
                    <div class="text-left text-lg leading-[1.4] text-white lg:text-[21px]">
                        <p class="mb-7 last:mb-0">
                            As your business grows or your AI SaaS needs change, you can
                            easily adjust your subscription level to match those needs.
                            This flexibility ensures that AI remains an asset.
                        </p>
                    </div>
                    <!-- Horizontal Separator -->
                    <div class="my-14 h-[1px] w-full bg-colorCodGray"></div>
                    <!-- Counter Scroll -->
                    <ul
                        class="flex flex-col justify-center gap-x-11 gap-y-8 text-center sm:flex-row md:text-left xl:justify-normal xl:text-left xxl:gap-x-20">
                        <!-- Counter Items -->
                        <li>
                            <h3 class="text-5xl text-colorOrangyRed md:text-6xl lg:text-7xl xl:text-7xl xxl:text-[120px]"
                                data-module="countup">
                                <span class="start-number" data-countup-number="92">92</span>%
                            </h3>
                            <span class="block text-lg font-normal text-white lg:text-[21px]">
                                Customer service inquiries
                            </span>
                        </li>
                        <!-- Counter Items -->
                        <!-- Counter Items -->
                        <li>
                            <h3 class="text-5xl text-colorOrangyRed md:text-6xl lg:text-7xl xl:text-7xl xxl:text-[120px]"
                                data-module="countup">
                                <span class="start-number" data-countup-number="75">75</span>%
                            </h3>
                            <span class="block text-lg font-normal text-white lg:text-[21px]">
                                Using financial institutions
                            </span>
                        </li>
                        <!-- Counter Items -->
                    </ul>
                    <!-- Counter Scroll -->
                </div>
                <!-- Funfact Right Block -->
            </div>
        </div>
    </section>
    <!--...::: Funfact Section End :::... -->

    <!--...::: Pricing Section Start :::... -->
    <section class="pricing-section">
        <!-- Section Spacer -->
        <div class="pb-20 pt-20 xl:pb-[150px] xl:pt-[130px]">
            <!-- Section Container -->
            <div class="global-container">
                <!-- Section Content Block -->
                <div class="jos mb-10 text-center lg:mb-12">
                    <div class="mx-auto md:max-w-xs lg:max-w-xl xl:max-w-[746px]">
                        <h2>Cost-effectively build any software</h2>
                    </div>
                </div>
                <!-- Section Content Block -->
                <!-- Pricing Block -->
                <div class="container mx-auto">
                    <!-- Tab buttons -->
                    <div class="jos flex justify-center" data-jos_animation="fade">
                        <div class="inline-flex space-x-4 rounded-[50px] border-2 border-black font-semibold">
                            <button class="tab-button price-button active" data-tab="monthly">
                                Monthly
                            </button>
                            <button class="tab-button price-button" data-tab="annually">
                                Annually
                            </button>
                        </div>
                    </div>

                    <!-- Pricing Block -->
                    <div class="mt-12 lg:mt-16 xl:mt-20">
                        <!-- Price List -->
                        <ul id="monthly" class="tab-content grid grid-cols-1 gap-6 md:grid-cols-2 xxl:grid-cols-3">
                            <!-- Price Item -->
                            <li class="jos group flex flex-col rounded-[10px] bg-colorLinenRuffle p-10 transition-all duration-300 ease-linear hover:bg-black"
                                data-jos_animation="flip" data-jos_delay="0">
                                <h3
                                    class="font-dmSans text-[28px] font-bold leading-[1.28] tracking-tighter text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    Beginner
                                </h3>
                                <span
                                    class="text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">Up
                                    to 10 members</span>

                                <div class="my-5 h-[1px] w-full bg-[#DBD6CF]"></div>
                                <h4
                                    class="mb-4 font-dmSans text-5xl font-bold leading-none text-black transition-all duration-300 ease-linear group-hover:text-white md:text-6xl lg:text-7xl xl:text-[80px]">
                                    $25<span class="text-lg font-semibold">/Per month</span>
                                </h4>
                                <p
                                    class="mb-10 text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    This is an excellent option for people & small
                                    businesses who are starting out.
                                </p>
                                <a class='button mt-auto block rounded-[50px] border-2 border-black bg-transparent py-4 text-center text-black transition-all duration-300 ease-linear after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-black group-hover:border-colorOrangyRed group-hover:text-white'
                                    href='/pricing'>Choose
                                    the plan</a>
                            </li>
                            <!-- Price Item -->
                            <!-- Price Item -->
                            <li class="jos group flex flex-col rounded-[10px] bg-colorLinenRuffle p-10 transition-all duration-300 ease-linear hover:bg-black"
                                data-jos_animation="flip" data-jos_delay="0">
                                <h3
                                    class="font-dmSans text-[28px] font-bold leading-[1.28] tracking-tighter text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    Starter
                                </h3>
                                <span
                                    class="text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">Up
                                    to 50 members</span>

                                <div class="my-5 h-[1px] w-full bg-[#DBD6CF]"></div>
                                <h4
                                    class="mb-4 font-dmSans text-5xl font-bold leading-none text-black transition-all duration-300 ease-linear group-hover:text-white md:text-6xl lg:text-7xl xl:text-[80px]">
                                    $89<span class="text-lg font-semibold">/Per month</span>
                                </h4>
                                <p
                                    class="mb-10 text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    This plan is suitable for e-commerce stores as well as
                                    professional blogs.
                                </p>
                                <a class='button mt-auto block rounded-[50px] border-2 border-black bg-transparent py-4 text-center text-black transition-all duration-300 ease-linear after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-black group-hover:border-colorOrangyRed group-hover:text-white'
                                    href='/pricing'>Choose
                                    the plan</a>
                            </li>
                            <!-- Price Item -->
                            <!-- Price Item -->
                            <li class="jos group flex flex-col rounded-[10px] bg-colorLinenRuffle p-10 transition-all duration-300 ease-linear hover:bg-black"
                                data-jos_animation="flip" data-jos_delay="0">
                                <h3
                                    class="font-dmSans text-[28px] font-bold leading-[1.28] tracking-tighter text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    Pro
                                </h3>
                                <span
                                    class="text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">Up
                                    to 100 members</span>

                                <div class="my-5 h-[1px] w-full bg-[#DBD6CF]"></div>
                                <h4
                                    class="mb-4 font-dmSans text-5xl font-bold leading-none text-black transition-all duration-300 ease-linear group-hover:text-white md:text-6xl lg:text-7xl xl:text-[80px]">
                                    $199<span class="text-lg font-semibold">/Per month</span>
                                </h4>
                                <p
                                    class="mb-10 text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    Ideal for handling complicated projects enterprise-level
                                    projects, and websites.
                                </p>
                                <a class='button mt-auto block rounded-[50px] border-2 border-black bg-transparent py-4 text-center text-black transition-all duration-300 ease-linear after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-black group-hover:border-colorOrangyRed group-hover:text-white'
                                    href='/pricing'>Choose
                                    the plan</a>
                            </li>
                            <!-- Price Item -->
                        </ul>
                        <!-- Price List -->
                        <!-- Price List -->
                        <ul id="annually"
                            class="tab-content grid hidden grid-cols-1 gap-6 md:grid-cols-2 xxl:grid-cols-3">
                            <!-- Price Item -->
                            <li class="jos group flex flex-col rounded-[10px] bg-colorLinenRuffle p-10 transition-all duration-300 ease-linear hover:bg-black"
                                data-jos_animation="flip" data-jos_delay="0">
                                <h3
                                    class="font-dmSans text-[28px] font-bold leading-[1.28] tracking-tighter text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    Beginner
                                </h3>
                                <span
                                    class="text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">Up
                                    to 10 members</span>

                                <div class="my-5 h-[1px] w-full bg-[#DBD6CF]"></div>
                                <h4
                                    class="mb-4 font-dmSans text-5xl font-bold leading-none text-black transition-all duration-300 ease-linear group-hover:text-white md:text-6xl lg:text-7xl xl:text-[80px]">
                                    $240<span class="text-lg font-semibold">/Per year</span>
                                </h4>
                                <p
                                    class="mb-10 text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    This is an excellent option for people & small
                                    businesses who are starting out.
                                </p>
                                <a class='button mt-auto block rounded-[50px] border-2 border-black bg-transparent py-4 text-center text-black transition-all duration-300 ease-linear after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-black group-hover:border-colorOrangyRed group-hover:text-white'
                                    href='/pricing'>Choose
                                    the plan</a>
                            </li>
                            <!-- Price Item -->
                            <!-- Price Item -->
                            <li class="jos group flex flex-col rounded-[10px] bg-colorLinenRuffle p-10 transition-all duration-300 ease-linear hover:bg-black"
                                data-jos_animation="flip" data-jos_delay="0">
                                <h3
                                    class="font-dmSans text-[28px] font-bold leading-[1.28] tracking-tighter text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    Starter
                                </h3>
                                <span
                                    class="text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">Up
                                    to 50 members</span>

                                <div class="my-5 h-[1px] w-full bg-[#DBD6CF]"></div>
                                <h4
                                    class="mb-4 font-dmSans text-5xl font-bold leading-none text-black transition-all duration-300 ease-linear group-hover:text-white md:text-6xl lg:text-7xl xl:text-[80px]">
                                    $960<span class="text-lg font-semibold">/Per year</span>
                                </h4>
                                <p
                                    class="mb-10 text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    This plan is suitable for e-commerce stores as well as
                                    professional blogs.
                                </p>
                                <a class='button mt-auto block rounded-[50px] border-2 border-black bg-transparent py-4 text-center text-black transition-all duration-300 ease-linear after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-black group-hover:border-colorOrangyRed group-hover:text-white'
                                    href='/pricing'>Choose
                                    the plan</a>
                            </li>
                            <!-- Price Item -->
                            <!-- Price Item -->
                            <li class="jos group flex flex-col rounded-[10px] bg-colorLinenRuffle p-10 transition-all duration-300 ease-linear hover:bg-black"
                                data-jos_animation="flip" data-jos_delay="0">
                                <h3
                                    class="font-dmSans text-[28px] font-bold leading-[1.28] tracking-tighter text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    Pro
                                </h3>
                                <span
                                    class="text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">Up
                                    to 100 members</span>

                                <div class="my-5 h-[1px] w-full bg-[#DBD6CF]"></div>
                                <h4
                                    class="mb-4 font-dmSans text-5xl font-bold leading-none text-black transition-all duration-300 ease-linear group-hover:text-white md:text-6xl lg:text-7xl xl:text-[80px]">
                                    $1800<span class="text-lg font-semibold leading-none">/Per year</span>
                                </h4>
                                <p
                                    class="mb-10 text-lg text-black transition-all duration-300 ease-linear group-hover:text-white">
                                    Ideal for handling complicated projects enterprise-level
                                    projects, and websites.
                                </p>
                                <a class='button mt-auto block rounded-[50px] border-2 border-black bg-transparent py-4 text-center text-black transition-all duration-300 ease-linear after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-black group-hover:border-colorOrangyRed group-hover:text-white'
                                    href='/pricing'>Choose
                                    the plan</a>
                            </li>
                            <!-- Price Item -->
                        </ul>
                        <!-- Price List -->
                    </div>
                    <!-- Pricing Block -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Pricing Section End :::... -->

    <!--...::: FAQ Section Start :::... -->
    <section class="faq-section">
        <!-- Section Spacer -->
        <div class="pb-20 xl:pb-[150px]">
            <!-- Section Container -->
            <div class="global-container">
                <div class="grid grid-cols-1 gap-y-10 md:grid-cols-2">
                    <!-- FAQ Left Block -->
                    <div class="jos flex flex-col" data-jos_animation="fade-right">
                        <!-- Section Content Block -->
                        <div class="mb-6">
                            <div class="mx-auto md:mx-0 md:max-w-none">
                                <h2>Freely ask us for more information</h2>
                            </div>
                        </div>
                        <!-- Section Content Block -->
                        <div class="text-lg leading-[1.4] lg:text-[21px]">
                            <p class="mb-7 last:mb-0">
                                Our AI SaaS solutions can be quickly deployed, enabling
                                users to start benefiting from AI capabilities without
                                lengthy setup and development times in fast-paced
                                industries.
                            </p>
                            <a class='button mt-5 rounded-[50px] border-2 border-black bg-black py-4 text-white after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-white'
                                href='/faq'>Ask
                                you questions</a>
                        </div>
                    </div>
                    <!-- FAQ Left Block -->

                    <!-- FAQ Right Block -->
                    <div class="jos md:ml-10 lg:ml-20 xl:ml-32" data-jos_animation="fade-left">
                        <!-- Accordion-->
                        <ul class="accordion">
                            <!-- Accordion items -->
                            @foreach ($faqs as $item)
                                <li
                                    class="accordion-item border-b-[1px] border-[#DBD6CF] pb-6 pt-6 first:pt-0 last:border-b-0 last:pb-0 active">
                                    <div
                                        class="accordion-header flex items-center justify-between font-dmSans text-xl font-bold leading-[1.2] -tracking-[0.5px] text-black lg:text-[28px]">
                                        <p>{{ $item->question }}</p>
                                        <div class="accordion-icon">
                                            <img src="assets/img/plus.svg" alt="plus" />
                                        </div>
                                    </div>
                                    <div class="accordion-content text-[#2C2C2C]">
                                        <p>
                                            {{ $item->answer }}
                                        </p>
                                    </div>
                                </li>
                                <!-- Accordion items -->
                            @endforeach

                        </ul>
                        <!-- Accordion-->
                    </div>
                    <!-- FAQ Right Block -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: FAQ Section End :::... -->

    <!--...::: Testimonial Section Start :::... -->
    <section class="testimonial-section">
        <!-- Section Spacer -->
        <div class="bg-black pb-40 pt-20 xl:pb-[200px] xl:pt-[130px]">
            <!-- Section Container -->
            <div class="global-container">
                <!-- Section Content Block -->
                <div class="jos mb-10 text-center lg:mb-16 xl:mb-20">
                    <div class="mx-auto max-w-[300px] lg:max-w-[600px] xl:max-w-[680px]">
                        <h2 class="text-white">Positive feedback from our users</h2>
                    </div>
                </div>
                <!-- Section Content Block -->

                <!-- Testimonial List -->
                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Testimonial Item -->
                    <div class="jos flex flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-white"
                        data-jos_animation="fade-left" data-jos_delay="0.1">
                        <div class="block">
                            <img src="assets/img/th-1/rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            “This AI SaaS tool has revolutionized the way we process and
                            analyze data. This is a game-changer for our business.”
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets/img/th-1/testimonial-img-1.jpg" alt="testimonial-img" width="60"
                                    height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Max Weber
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    HR Manager
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos flex flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-white"
                        data-jos_animation="fade-left" data-jos_delay="0.2">
                        <div class="block">
                            <img src="assets/img/th-1/rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "It answers immediately, and we've seen a significant
                            reduction in response time. Our customers love it and so do
                            we!"
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets/img/th-1/testimonial-img-2.jpg" alt="testimonial-img" width="60"
                                    height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Douglas Smith
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    Businessman
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos flex flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-white"
                        data-jos_animation="fade-left" data-jos_delay="0.3">
                        <div class="block">
                            <img src="assets/img/th-1/rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "It is accurate, fast and supports multiple languages
                            support. It is a must for any international business
                            success."
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets/img/th-1/testimonial-img-3.jpg" alt="testimonial-img" width="60"
                                    height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Abraham Maslo
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    Founder @ Marketing Company
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos flex flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-white"
                        data-jos_animation="fade-right" data-jos_delay="0.1">
                        <div class="block">
                            <img src="assets/img/th-1/rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "Security is a top concern for us, and AI SaaS takes it
                            seriously. It's a reassuring layer of protection for our
                            organization."
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets/img/th-1/testimonial-img-4.jpg" alt="testimonial-img" width="60"
                                    height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Jack Fayol
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    HR Manager
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos flex flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-white"
                        data-jos_animation="fade-right" data-jos_delay="0.2">
                        <div class="block">
                            <img src="assets/img/th-1/rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "We were concerned about integrating their APIs were well
                            documented, and their support team was super cool."
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets/img/th-1/testimonial-img-5.jpg" alt="testimonial-img" width="60"
                                    height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Karen Lynn
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    Software Engineer
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                    <!-- Testimonial Item -->
                    <div class="jos flex flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-white"
                        data-jos_animation="fade-right" data-jos_delay="0.3">
                        <div class="block">
                            <img src="assets/img/th-1/rating.svg" alt="rating" width="146" height="25" />
                        </div>
                        <p>
                            "The return on investment has exceeded our expectations.
                            it's an investment in the future of our business."
                        </p>
                        <div class="flex items-center gap-x-4">
                            <div class="h-[60px] w-[60px] overflow-hidden rounded-full">
                                <img src="assets/img/th-1/testimonial-img-6.jpg" alt="testimonial-img" width="60"
                                    height="60" class="h-full w-full object-cover object-center" />
                            </div>
                            <div class="flex flex-col gap-y-1">
                                <span class="block text-lg font-semibold leading-[1.6]">
                                    Henry Ochi
                                </span>
                                <span class="block text-sm font-light leading-[1.4]">
                                    Bank Manager
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Item -->
                </div>
                <!-- Testimonial List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Testimonial Section Start :::... -->

    <!-- Body Background Shape 1 -->
    <div
        class="orange-gradient-1 absolute -left-[15px] top-[61%] -z-[1] h-[400px] w-[400px] -rotate-[-9.022deg] rounded-[400px]">
    </div>

    <!-- Body Background Shape 2 -->
    <div
        class="orange-gradient-2 absolute -left-[100px] top-[64%] -z-[1] h-[360px] w-[360px] -rotate-[-9.022deg] rounded-[360px]">
    </div>
@endsection
