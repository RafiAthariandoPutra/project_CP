@extends('layouts.main')

@section('title', 'Team Details')


@section('content')
    <main class="main-wrapper relative overflow-hidden">
        <!--...::: Breadcrumb Section Start :::... -->
        <section id="section-breadcrumb">
            <!-- Section Spacer -->
            <div class="breadcrumb-wrapper">
                <!-- Section Container -->
                <div class="global-container">
                    <div class="breadcrumb-block">
                        <h1 class="breadcrumb-title">Team Details</h1>
                        <ul class="breadcrumb-nav">
                            <li><a href='/'>Home</a></li>
                            <li>Team Details</li>
                        </ul>
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Breadcrumb Section End :::... -->

        <!--...::: Team Details Section Start :::... -->
        <section id="team-details-section">
            <!-- Section Spacer -->
            <div class="pb-40 xl:pb-[220px]">
                <!-- Section Container -->
                <div class="global-container">
                    <!-- Team Details Top Block-->
                    <div
                        class="grid items-center gap-x-16 gap-y-16 md:grid-cols-2 lg:grid-cols-[minmax(0,_1.2fr)_auto] xl:gap-x-20 xxl:gap-x-32">
                        <!-- Team Content Left Block -->
                        <div class="jos order-2 md:order-1" data-jos_animation="fade-left">
                            <!-- Section Content Block -->
                            <div class="mb-6">
                                <h2>{{ $team->name }}</h2>
                            </div>
                            <!-- Section Content Block -->
                            <div class="text-lg leading-[1.4] lg:text-[21px]">
                                <p class="mb-7 last:mb-0">
                                    {{ $team->bio }}
                                </p>

                            </div>
                        </div>
                        <!-- Team Content Left Block -->

                        <!-- team Content Right Block -->
                        <div class="jos order-1 md:order-2" data-jos_animation="fade-right">
                            <!-- Team Member Item -->
                            <div class="rounded-[20px] bg-colorLinenRuffle p-[20px]">
                                <div class="xl:h[300px] w-full overflow-hidden rounded-[20px] xxl:h-[400px]">
                                    <img src="/storage/{{ $team->image }}" alt="team-member-img-1" width="376"
                                        height="400" class="h-full w-full object-cover" />
                                </div>

                                <div class="mt-5">
                                    <div
                                        class="mt-3 flex flex-col justify-between gap-3 xxl:flex-row xxl:flex-wrap xxl:items-center">
                                        <h4 class="text-[21px] leading-[1.33]">
                                            {{ $team->position }}
                                        </h4>

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
                            </div>
                            <!-- Team Member Item -->
                        </div>
                        <!-- team Content Right Block -->
                    </div>
                    <!-- Team Details Top Block-->

                    <!-- Horizontal Separator -->
                    <div class="my-20 h-[1px] w-full bg-[#EAEDF0]"></div>
                    <!-- Horizontal Separator -->

                    <!-- Team Details Bottom Block-->
                    {{-- <div>
                        <!-- Team Member Skill List -->
                        <ul class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- Team Member Skill Item -->
                            <li class="jos flex flex-col gap-y-4 lg:text-[21px]" data-jos_delay="0.1">
                                <div class="text-2xl lg:text-3xl font-bold leading-[1.4] -tracking-[1px]">
                                    1. AI Strategy:
                                </div>
                                <p>
                                    The CAIO plays a pivotal role in shaping the
                                    organization's AI strategy. They work closely with senior
                                    leadership.
                                </p>
                            </li>
                            <!-- Team Member Skill Item -->
                            <!-- Team Member Skill Item -->
                            <li class="jos flex flex-col gap-y-4 lg:text-[21px]" data-jos_delay="0.2">
                                <div class="text-2xl lg:text-3xl font-bold leading-[1.4] -tracking-[1px]">
                                    2. Technology Evaluation:
                                </div>
                                <p>
                                    He assess emerging AI technologies, tools, and platforms
                                    to determine which ones are suitable for the organization.
                                </p>
                            </li>
                            <!-- Team Member Skill Item -->
                            <!-- Team Member Skill Item -->
                            <li class="jos flex flex-col gap-y-4 lg:text-[21px]" data-jos_delay="0.3">
                                <div class="text-2xl lg:text-3xl font-bold leading-[1.4] -tracking-[1px]">
                                    3. AI Project Oversight:
                                </div>
                                <p>
                                    The CAIO oversees the planning and execution of AI & ML
                                    projects throughout the organization.
                                </p>
                            </li>
                            <!-- Team Member Skill Item -->
                            <!-- Team Member Skill Item -->
                            <li class="jos flex flex-col gap-y-4 lg:text-[21px]" data-jos_delay="0.4">
                                <div class="text-2xl lg:text-3xl font-bold leading-[1.4] -tracking-[1px]">
                                    4. Data Management:
                                </div>
                                <p>
                                    Data is a critical component of AI, and the CAIO often
                                    manages the organization's data strategy.
                                </p>
                            </li>
                            <!-- Team Member Skill Item -->
                            <!-- Team Member Skill Item -->
                            <li class="jos flex flex-col gap-y-4 lg:text-[21px]" data-jos_delay="0.5">
                                <div class="text-2xl lg:text-3xl font-bold leading-[1.4] -tracking-[1px]">
                                    5. Risk Management:
                                </div>
                                <p>
                                    He is also responsible for identifying and mitigating
                                    AI-related risks, including also ethical considerations
                                </p>
                            </li>
                            <!-- Team Member Skill Item -->
                            <!-- Team Member Skill Item -->
                            <li class="jos flex flex-col gap-y-4 lg:text-[21px]" data-jos_delay="0.6">
                                <div class="text-2xl lg:text-3xl font-bold leading-[1.4] -tracking-[1px]">
                                    6. Innovation:
                                </div>
                                <p>
                                    The CAIO fosters a culture of innovation by encouraging
                                    experimentation with AI technologies, promoting research.
                                </p>
                            </li>
                            <!-- Team Member Skill Item -->
                        </ul>
                        <!-- Team Member Skill List -->
                    </div> --}}
                    <!-- Team Details Bottom Block-->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Section Spacer -->
        </section>
        <!--...::: Team Details Section End :::... -->
    </main>

@endsection
