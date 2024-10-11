@extends('layouts.main')

@section('title', 'Project Details')

@section('content')
    <main class="main-wrapper relative overflow-hidden">
        <!--...::: Breadcrumb Section Start :::... -->
        <section id="section-breadcrumb">
            <!-- Section Spacer -->
            <div class="breadcrumb-wrapper">
                <!-- Section Container -->
                <div class="global-container">
                    <div class="breadcrumb-block">
                        <h1 class="breadcrumb-title">Project Details</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href='/'>Home</a></li>
                            <li>Project Details</li>
                        </ul>
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Breadcrumb Section End :::... -->

        <!--...::: Portfolio Details Section Start :::... -->
        <section id="portfolio-detial-section">
            <!-- Section Spacer -->
            <div class="pb-20 xl:pb-[150px]">
                <!-- Section Container -->
                <div class="global-container">
                    <!-- Section Content Block -->
                    <div class="jos mb-10 lg:mb-16 xl:mb-20">
                        <div class="md:max-w-xs lg:max-w-xl xl:max-w-[846px]">
                            <h2>{{ $project->name }}</h2>
                        </div>
                    </div>
                    <!-- Section Content Block -->

                    <div class="jos h-80 w-full overflow-hidden rounded-[10px] lg:h-[550px]" data-jos_animation="zoom">
                        <img src="/storage/{{ $project->image }}" alt="portfolio-main-img" width="1296" height="550"
                            class="h-full w-full object-cover" />
                    </div>
                    <!-- Portfolio Info List -->
                    <ul
                        class="mt-[55px] grid grid-cols-1 justify-between gap-x-16 gap-y-6 sm:grid-cols-2 sm:gap-y-8 lg:flex">
                        <li class="jos flex flex-col gap-y-2 sm:gap-y-4" data-jos_delay="0.1">
                            <span class="text-[21px] font-semibold leading-[1.4] text-[#7F8995]">Client:</span>
                            <div class="text-2xl font-bold leading-[1.4] -tracking-[1px] md:text-[30px]">
                                {{ $project->client_name }}
                            </div>
                        </li>
                        <li class="jos flex flex-col gap-y-2 sm:gap-y-4" data-jos_delay="0.2">
                            <span class="text-[21px] font-semibold leading-[1.4] text-[#7F8995]">Services:</span>
                            <div class="text-2xl font-bold leading-[1.4] -tracking-[1px] md:text-[30px]">
                                {{ $project->service }}
                            </div>
                        </li>
                        <li class="jos flex flex-col gap-y-2 sm:gap-y-4" data-jos_delay="0.3">
                            <span class="text-[21px] font-semibold leading-[1.4] text-[#7F8995]">Duration:</span>
                            <div class="text-2xl font-bold leading-[1.4] -tracking-[1px] md:text-[30px]">
                                Start: {{ $project->start_date }} |
                                End: {{ $project->end_date }}
                            </div>
                        </li>
                        <li class="jos flex flex-col gap-y-2 sm:gap-y-4" data-jos_delay="0.4">
                            <span class="text-[21px] font-semibold leading-[1.4] text-[#7F8995]">Website</span>
                            <div class="text-2xl font-bold leading-[1.4] -tracking-[1px] md:text-[30px]">
                                <a href="https://www.example.com"
                                    class="flex items-center gap-x-[10px] hover:text-colorOrangyRed">Tidak Tersedia
                                    {{-- <div class="h-9 w-9">
                                        <img src="assets/img/th-1/icon-black-long-arrow-right.svg"
                                            alt="icon-black-long-arrow-right" width="35" height="35"
                                            class="h-auto w-9" />
                                    </div> --}}
                                </a>
                            </div>
                        </li>
                    </ul>
                    <!-- Portfolio Info List -->

                    <!-- Horizontal Separator -->
                    <div class="my-10 h-[1px] w-full bg-[#EAEDF0] lg:my-20"></div>
                    <!-- Horizontal Separator -->

                    <div class="flex flex-col gap-y-10 lg:gap-y-20">
                        <!-- Content Block -->
                        <div class="grid grid-cols-1 items-center gap-[30px] lg:grid-cols-2">
                            <!-- Content Left Block -->
                            <div class="jos order-2 overflow-hidden rounded-md lg:order-1" data-jos_animation="fade-right">
                                <img src="assets/img/th-1/content-image-5.jpg" alt="content-image-6" width="636"
                                    height="400" class="h-auto w-full" />
                            </div>
                            <!-- Content Left Block -->
                            <!-- Content Right Block -->
                            <div class="jos order-1 lg:order-2" data-jos_animation="fade-left">
                                <!-- Section Content Block -->
                                <div class="mb-4 xl:mb-6">
                                    <h2>Project overview</h2>
                                </div>
                                <!-- Section Content Block -->
                                <span class="mb-8 block text-2xl font-bold leading-snug">
                                    Machine Learning and Predictive Analytics:
                                </span>
                                <ul class="mb-7 flex flex-col gap-y-[30px] text-lg leading-[1.4] last:mb-0 lg:text-[21px]">
                                    <li
                                        class="relative pl-[30px] after:absolute after:left-[10px] after:top-3 after:h-[6px] after:w-[6px] after:rounded-[50%] after:bg-black">
                                        Demand Forecasting: AI SaaS helps businesses predict
                                        demand for products and services, optimizing inventory
                                        management and supply chain operations.
                                    </li>
                                    <li
                                        class="relative pl-[30px] after:absolute after:left-[10px] after:top-3 after:h-[6px] after:w-[6px] after:rounded-[50%] after:bg-black">
                                        Customer Churn Prediction: It's used to identify
                                        customers at risk of leaving a service or product,
                                        allowing proactive retention efforts.
                                    </li>
                                </ul>
                            </div>
                            <!-- Content Right Block -->
                        </div>
                        <!-- Content Block -->
                        <!-- Content Block -->
                        <div class="grid grid-cols-1 items-center gap-[30px] lg:grid-cols-2">
                            <!-- Content Left Block -->
                            <div class="jos order-2 overflow-hidden rounded-md lg:order-2" data-jos_animation="fade-left">
                                <img src="assets/img/th-1/content-image-6.jpg" alt="content-image-6" width="636"
                                    height="400" class="h-auto w-full" />
                            </div>
                            <!-- Content Left Block -->
                            <!-- Content Right Block -->
                            <div class="jos order-1 lg:order-1" data-jos_animation="fade-right">
                                <!-- Section Content Block -->
                                <div class="mb-4 xl:mb-6">
                                    <h2>Project results</h2>
                                </div>
                                <!-- Section Content Block -->
                                <span class="mb-8 block text-2xl font-bold leading-snug">
                                    Natural Language Processing (NLP):
                                </span>
                                <ul class="mb-7 flex flex-col gap-y-[30px] text-lg leading-[1.4] last:mb-0 lg:text-[21px]">
                                    <li
                                        class="relative pl-[30px] after:absolute after:left-[10px] after:top-3 after:h-[6px] after:w-[6px] after:rounded-[50%] after:bg-black">
                                        Text Analysis: AI SaaS can be used to analyze text data
                                        for sentiment analysis, entity recognition, language
                                        translation, and text summarization.
                                    </li>
                                    <li
                                        class="relative pl-[30px] after:absolute after:left-[10px] after:top-3 after:h-[6px] after:w-[6px] after:rounded-[50%] after:bg-black">
                                        Chatbots and Virtual Assistants: Businesses use AI SaaS
                                        to build chatbots and virtual assistants for customer
                                        support, improving response times and efficiency.
                                    </li>
                                </ul>
                            </div>
                            <!-- Content Right Block -->
                        </div>
                        <!-- Content Block -->
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Portfolio Details Section End :::... -->

        <!--...::: About Contact Section Start :::... -->
        {{-- <section id="about-conact">
            <!-- Section Spacer -->
            <div class="bg-black pb-40 pt-20 xl:pb-[200px] xl:pt-[130px]">
                <!-- Section Container -->
                <div class="global-container">
                    <div class="grid grid-cols-1 items-center gap-14 md:grid-cols-[minmax(0,_1fr)_1.4fr]">
                        <!-- Content Left Block -->
                        <div class="jos order-2 overflow-hidden rounded-[20px] md:order-1" data-jos_animation="fade-right">
                            <img src="assets/img/th-1/about-contact-img.jpg" alt="about-contact-img" width="526"
                                height="550" class="h-auto w-full" />
                        </div>
                        <!-- Content Left Block -->
                        <!-- Content Right Block -->
                        <div class="jos order-1 md:order-2" data-jos_animation="fade-down">
                            <!-- Section Content Block -->
                            <div class="mb-6 md:max-w-max">
                                <h2 class="text-white">
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

                            <ul
                                class="mt-10 flex flex-col gap-6 font-dmSans text-[30px] tracking-[1.33] lg:mt-14 lg:gap-y-3 xl:mt-[70px]">
                                <li
                                    class="flex flex-col gap-x-2 leading-tight text-colorOrangyRed lg:flex-row lg:leading-normal">
                                    Website:
                                    <a href="https://www.example.com"
                                        class="text-white hover:text-colorOrangyRed">www.example.com</a>
                                </li>
                                <li
                                    class="flex flex-col gap-x-2 leading-tight text-colorOrangyRed lg:flex-row lg:leading-normal">
                                    Email:
                                    <a href="mailto:yourmail@mail.com"
                                        class="text-white hover:text-colorOrangyRed">yourmail@mail.com</a>
                                </li>
                                <li
                                    class="flex flex-col gap-x-2 leading-tight text-colorOrangyRed lg:flex-row lg:leading-normal">
                                    Phone:
                                    <a href="tel:+1234567890" class="text-white hover:text-colorOrangyRed">(123)
                                        456-7890</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Content Right Block -->
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section> --}}
        <!--...::: About Contact Section End :::... -->
    </main>

@endsection
