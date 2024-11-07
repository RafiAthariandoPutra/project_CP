@extends('layouts.main')

@section('title', 'Home Page')

@section('content')
    <!--...::: Hero Section Start :::... -->
    <section id="home">
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
    <section id="service">
        <!-- Section Spacer -->
        <div class="pb-20 pt-20 xl:pb-[150px] xl:pt-[130px]">
            <!-- Section Container -->
            <div class="global-container">
                <!-- Section Content Block -->
                <div class="jos mb-10 lg:mb-16 xl:mb-20">
                    <div class="md:max-w-sm lg:max-w-xl xl:max-w-[746px]">
                        <h2>Our Services</h2>
                    </div>
                </div>
                <!-- Section Content Block -->
                <!-- Service List -->
                <ul
                    class="jos grid grid-cols-1 gap-[2px] overflow-hidden rounded-[10px] border-2 border-black bg-black sm:grid-cols-2 lg:grid-cols-4">

                    @foreach ($services as $item)
                        <!-- Service Item -->
                        <li class="group bg-white p-[30px] transition-all duration-300 ease-in-out hover:bg-black">
                            {{-- <div class="relative mb-9 h-[70px] w-[70px]">
                                <img src="/assets/img/speed-black.png" alt="" width="70" height="70" />
                                <img src="/assets/img/speed-orange.png" alt="service-icon-orange-1" width="70"
                                    height="70"
                                    class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100" />
                            </div> --}}
                            <h3
                                class="mb-4 block text-xl leading-tight -tracking-[0.5px] group-hover:text-white xl:text-2xl xxl:text-[28px]">
                                <a class='hover:text-colorOrangyRed' href='/service-details'>
                                    {{ $item->heading }}
                                </a>
                            </h3>

                            <p class="mb-12 duration-300 group-hover:text-white">
                                {{ $item->description }}
                            </p>

                            {{-- <a class='relative inline-block h-[30px] w-[30px] duration-300' href='/service-details'>
                                <img src="assets/img/arrow-right-black.svg" alt="arrow-right-black" width="30"
                                    height="30" />
                                <img src="assets/img/arrow-right-orange.svg" alt="arrow-right-black" width="30"
                                    height="30"
                                    class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100" />

                            </a> --}}
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
    {{-- @foreach ($project as $item) --}}
    <section id="project">
        <!-- Section Spacer -->
        <div class="pb-20 xl:pb-[150px]">
            <!-- Section Container -->
            <div class="global-container">
                <div class="jos mb-12 text-center lg:mb-16 xl:mb-20">
                    <div class="mx-auto md:max-w-xs lg:max-w-xl xl:max-w-[746px]">
                        <h2>Our projects</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-20 xl:gap-28 xxl:gap-32">
                    <!-- Content Left Block -->
                    <div class="jos order-2 overflow-hidden rounded-md md:order-1" data-jos_animation="fade-left">
                        <a href="/project/{{ $project[1]->slug }}">
                            <img src="/storage/{{ $project[1]->image }}" alt="content-image-1" width="526" height="450"
                                class="h-auto w-full" />
                        </a>
                    </div>
                    <!-- Content Left Block -->
                    <!-- Content Right Block -->
                    <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                        <!-- Section Content Block -->
                        <div class="mb-6">
                            <h2>{{ $project[1]->name }}</h2>
                        </div>
                        <!-- Section Content Block -->
                        <div class="text-lg leading-[1.4] lg:text-[21px]">
                            <p class="mb-7 last:mb-0">
                                {{ $project[1]->description }}
                            </p>
                            {{-- <p class="mb-7 last:mb-0">
                                Advanced AI capabilities accessible to a broader audience,
                                including small & medium-sized businesses and individuals
                                who may not have the resources or expertise to develop.
                            </p> --}}
                        </div>
                    </div>
                    <!-- Content Right Block -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    {{-- @endforeach --}}
    <!--...::: Content Section End :::... -->

    <!--...::: Content Section Start :::... -->
    <section id="project">
        <!-- Section Spacer -->
        <div class="pb-20 xl:pb-[150px]">
            <!-- Section Container -->
            <div class="global-container">

                <div
                    class="grid grid-cols-1 items-center gap-12 md:grid-cols-2 lg:gap-20 xl:grid-cols-[minmax(0,_1.2fr)_1fr] xl:gap-28 xxl:gap-32">
                    <!-- Content Left Block -->
                    <div class="jos order-2 overflow-hidden rounded-md" data-jos_animation="fade-left">
                        <a href="/project/{{ $project[0]->slug }}">
                            <img src="/storage/{{ $project[0]->image }}" alt="content-image-2" width="526"
                                height="450" class="h-auto w-full" />
                        </a>
                    </div>
                    <!-- Content Left Block -->
                    <!-- Content Right Block -->
                    <div class="jos order-1" data-jos_animation="fade-right">
                        <!-- Section Content Block -->
                        <div class="mb-6">
                            <h2>{{ $project[0]->name }}</h2>
                        </div>
                        <!-- Section Content Block -->
                        <div class="text-lg leading-[1.4] lg:text-[21px]">
                            <p class="mb-7 last:mb-0">
                                {{ $project[0]->description }}
                            </p>
                            {{-- <ul
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
                            </ul> --}}
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


    <!--...::: Team Section Start :::... -->
    <section id="team">
        <!-- Section Spacer -->
        <div class="pb-40 xl:pb-[220px]">
            <!-- Section Container -->
            <div class="global-container">
                <!-- Section Content Block -->
                <div class="jos mb-10 text-center lg:mb-16 xl:mb-20">
                    <div class="mx-auto md:max-w-xs lg:max-w-xl xl:max-w-[746px]">
                        <h2>Our team consists of a group of talents</h2>
                    </div>
                </div>
                <!-- Section Content Block -->

                <!-- Team Member List -->
                <ul class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Team Member Item -->
                    @foreach ($team as $item)
                        <li class="jos rounded-[20px] bg-colorLinenRuffle p-[20px]" data-jos_animation="flip"
                            data-jos_delay="0.1">
                            <div class="xl:h[300px] w-full overflow-hidden rounded-[20px] xxl:h-[400px]">

                                <a href="/team/{{ $item->slug }}">
                                    <img src="/storage/{{ $item->image }}" alt="team-member-img-1" width="376"
                                        height="400" class="h-full w-full object-cover" />
                                </a>
                            </div>

                            <div class="mt-5">
                                <a class='font-dmSans text-[26px] leading-[1.33] hover:text-colorOrangyRed xxl:text-[30px]'
                                    href='/team-details'>
                                    {{ $item->name }}
                                </a>
                                <div
                                    class="mt-3 flex flex-col justify-between gap-3 xxl:flex-row xxl:flex-wrap xxl:items-center">
                                    <span class="text-[21px]">{{ $item->position }}</span>
                                    <ul class="mt-auto flex gap-x-[15px]">
                                        <li>
                                            <a href="http://www.facebook.com" target="_blank" rel="noopener noreferrer"
                                                class="group relative flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-black hover:bg-colorOrangyRed">
                                                <img src="assets/img/facebook-icon-white.svg" alt="facebook"
                                                    width="14" height="14"
                                                    class="opacity-100 group-hover:opacity-0" />
                                                <img src="assets/img/facebook-icon-black.svg" alt="facebook"
                                                    width="14" height="14"
                                                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.twitter.com" target="_blank" rel="noopener noreferrer"
                                                class="group relative flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-black hover:bg-colorOrangyRed">
                                                <img src="assets/img/twitter-icon-white.svg" alt="twitter"
                                                    width="14" height="14"
                                                    class="opacity-100 group-hover:opacity-0" />
                                                <img src="assets/img/twitter-icon-black.svg" alt="twitter"
                                                    width="14" height="14"
                                                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.linkedin.com" target="_blank" rel="noopener noreferrer"
                                                class="group relative flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-black hover:bg-colorOrangyRed">
                                                <img src="assets/img/linkedin-icon-white.svg" alt="linkedin"
                                                    width="14" height="14"
                                                    class="opacity-100 group-hover:opacity-0" />
                                                <img src="assets/img/linkedin-icon-black.svg" alt="linkedin"
                                                    width="14" height="14"
                                                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100" />
                                            </a>
                                        </li>
                                        <li>
                                            <a href="http://www.instagram.com" target="_blank" rel="noopener noreferrer"
                                                class="group relative flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-black hover:bg-colorOrangyRed">
                                                <img src="assets/img/instagram-icon-white.svg" alt="instagram"
                                                    width="14" height="14"
                                                    class="opacity-100 group-hover:opacity-0" />
                                                <img src="assets/img/instagram-icon-black.svg" alt="instagram"
                                                    width="14" height="14"
                                                    class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 opacity-0 group-hover:opacity-100" />
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Team Member Item -->
                    @endforeach

                </ul>
                <!-- Team Member List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Team Section End :::... -->

    <!--...::: Testimonial Section Start :::... -->
    <section id="testimonial" class="testimonial-section">
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
                    @foreach ($testimonal as $item)
                        <div class="jos flex flex-col gap-y-8 rounded-[10px] border-[1px] border-colorCodGray p-[30px] text-white"
                            data-jos_animation="fade-left" data-jos_delay="0.1">
                            <div class="max-w-[300px] ">
                                <div class="flex items-center">
                                    @for ($i = 0; $i < $item->rating; $i++)
                                        <svg width="30" fill="orange" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                            <path
                                                d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
                                        </svg>
                                    @endfor

                                </div>
                            </div>
                            <p>
                                {{ $item->message }}
                            </p>
                            <div class="flex items-center gap-x-4">
                                <div class= "h-[60px] w-[60px] overflow-hidden rounded-full">
                                    <img src="/storage/{{ $item->client_image }}" alt="testimonial-img" width="60"
                                        height="60" class="h-full w-full object-cover object-center" />
                                </div>
                                <div class="flex flex-col gap-y-1">
                                    <span class="block text-lg font-semibold leading-[1.6]">
                                        {{ $item->client_name }}
                                    </span>
                                    <span class="block text-sm font-light leading-[1.4]">
                                        {{ $item->client_position }}
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- Testimonial Item -->
                </div>
                <!-- Testimonial List -->
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Testimonial Section Start :::... -->




    <!--...::: FAQ Section Start :::... -->
    <section id="faq" class="faq-section ">
        <!-- Section Spacer -->
        <div class="pb-20 xl:pb-[150px]">
            <!-- Section Container -->
            <div class="global-container pt-20">
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

    <!--...::: About Contact Section Start :::... -->
    <section id="contact">
        <!-- Section Spacer -->
        <div class="bg-black pb-20 pt-20 xl:pb-[150px] xl:pt-[130px]">
            <!-- Section Container -->
            <div class="global-container">
                <div class="grid grid-cols-1 items-center gap-14 md:grid-cols-[minmax(0,_1fr)_1.4fr]">
                    <!-- Content Left Block -->
                    <div class="jos order-2 overflow-hidden rounded-[20px] md:order-1" data-jos_animation="fade-right">
                        <img src="assets/img/about-contact-img.jpg" alt="about-contact-img" width="526"
                            height="550" class="h-auto w-full" />
                    </div>
                    <!-- Content Left Block -->
                    <!-- Content Right Block -->
                    <div class="jos order-1 md:order-2  " data-jos_animation="fade-down">
                        <!-- Section Content Block -->
                        <div class="mb-6 md:max-w-max">
                            <h2 class="text-white hover:text-colorOrangyRed">
                                We always want to connect our clients
                            </h2>
                        </div>
                        <!-- Section Content Block -->
                        <div class="text-left text-lg leading-[1.4] text-white lg:text-[21px]">
                            <p class="mb-7 last:mb-0">
                                AI accessible and beneficial for organizations, and we
                                look forward to partnering with businesses to achieve
                                their AI goals.
                            </p>
                        </div>

                        <button id="button-contact" data-dialog-target="sign-in-modal"
                            class="rounded-md bg-blue-800 mt-12 py-2 px-4 border border-transparent text-center text-lg text-white transition-all shadow-md hover:shadow-lg focus:bg-blue-700 focus:shadow-none active:bg-blue-700 hover:bg-blue-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
                            type="button">
                            Contact Form
                        </button>


                        {{-- Modal --}}

                        <div data-dialog-backdrop="sign-in-modal" data-dialog-backdrop-close="true"
                            data-popover-transition="transition-all duration-300"
                            class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
                            <div data-dialog="sign-in-modal" data-dialog-mount="opacity-100 translate-y-0 scale-100"
                                data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
                                data-dialog-transition="transition-all duration-300"
                                class="relative mx-auto  max-w-screen-sm rounded-lg overflow-hidden shadow-sm">
                                <div class="relative flex flex-col bg-white">
                                    <div
                                        class="relative m-2.5 items-center flex justify-center text-white py-5 rounded-md">
                                        <h3 id="judul-contact" class="text-2xl text-gray-900">
                                            Contact Send
                                        </h3>
                                    </div>
                                    <form class="w-full" action="/contact-send" method="post">
                                        @csrf
                                        <div class="flex w-full flex-col -mt-5 gap-4 p-4">
                                            <div class="flex w-full flex-col md:flex-row gap-4 ">

                                                <div class="w-full ">
                                                    <label class="block mb-2 text-sm text-slate-600">
                                                        Name
                                                    </label>
                                                    <input type="text" name="name"
                                                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                                        placeholder="eg. eeeefmelfmel" />
                                                    @error('name')
                                                        <p class="text-red-500 text-xs mt-1">
                                                            {{ $massage }}
                                                        </p>
                                                    @enderror
                                                </div>

                                                <div class="w-full ">
                                                    <label class="block mb-2 text-sm text-slate-600">
                                                        Company Name
                                                    </label>
                                                    <input type="text" name="company_name"
                                                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                                        placeholder="eg. eeeefmelfmel" />
                                                    @error('company_name')
                                                        <p class="text-red-500 text-xs mt-1">
                                                            {{ $massage }}
                                                        </p>
                                                    @enderror
                                                </div>


                                            </div>
                                            <div class="flex w-full flex-col md:flex-row gap-4 ">

                                                <div class="w-full ">
                                                    <label class="block mb-2 text-sm text-slate-600">
                                                        Phone Number
                                                    </label>
                                                    <input type="tel" name="phone_number"
                                                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                                        placeholder="eg. eeeefmelfmel" />
                                                    @error('phone_number')
                                                        <p class="text-red-500 text-xs mt-1">
                                                            {{ $massage }}
                                                        </p>
                                                    @enderror
                                                </div>

                                                <div class="w-full">
                                                    <label class="block mb-2 text-sm text-slate-600">
                                                        Email
                                                    </label>
                                                    <input type="email" name="email"
                                                        class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                                        placeholder="eg. Software" />
                                                    @error('email')
                                                        <p class="text-red-500 text-xs mt-1">
                                                            {{ $massage }}
                                                        </p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="w-full">
                                                <textarea
                                                    class="py-3 px-0 block w-full bg-transparent border-t-transparent border-b-2 border-x-transparent border-b-gray-200 text-sm focus:border-blue-500 focus:border-t-transparent focus:border-x-transparent focus:border-b-blue-500 focus:ring-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-neutral-700 dark:text-neutral-900 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 dark:focus:border-b-neutral-600"
                                                    rows="3" placeholder="Message..."></textarea>
                                                @error('message')
                                                    <p class="text-red-500 text-xs mt-1">
                                                        {{ $massage }}
                                                    </p>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="p-6 pt-0">
                                            <button id="contact-send" type="submit"
                                                class="w-full text-white py-3 px-4 inline-flex justify-center items-center gap-x-2 text-lg font-medium rounded-lg border border-transparent transition disabled:opacity-50 disabled:pointer-events-none">
                                                Send
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Right Block -->
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: About Contact Section End :::... -->
    {{-- </main> --}}



    <!-- Body Background Shape 1 -->
    <div
        class="orange-gradient-1 absolute -left-[15px] top-[61%] -z-[1] h-[400px] w-[400px] -rotate-[-9.022deg] rounded-[400px]">
    </div>

    <!-- Body Background Shape 2 -->
    <div
        class="orange-gradient-2 absolute -left-[100px] top-[64%] -z-[1] h-[360px] w-[360px] -rotate-[-9.022deg] rounded-[360px]">
    </div>
@endsection
