<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Company Profile | @yield('title')</title>

    <meta name="description" content="AIMass Tailwind based SASS Template" />
    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png" />

    <!-- Site font -->

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/jos.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/menu.css') }}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />

    <!-- Development css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
    <div class="page-wrapper relative z-[1] bg-white">
        <!--...::: Header Start :::... -->
        @include('components.header')
        <!--...::: Header End :::... -->

        <main class="main-wrapper relative overflow-hidden">
            @yield('content')
        </main>

        <!--...::: Footer Section Start :::... -->
        @include('components.footer')
        <!--...::: Footer Section End :::... -->
    </div>

    <!--Vendor js-->
    <script src="{{ asset('assets/js/vendors/counterup.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/fslightbox.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jos.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/menu.js') }}"></script>

    <!-- Main js -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
