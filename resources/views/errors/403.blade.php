<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!-- component -->
    <main class="h-screen w-full flex flex-col justify-center items-center bg-[#1A2238]">
        <h1 class="text-9xl font-extrabold text-white tracking-widest">403</h1>
        <div class="bg-[#FF6A3D] px-2 text-sm rounded rotate-12 absolute">
            Page Not Found
        </div>
        <button class="mt-5">
            <a
                class="relative inline-block text-sm font-medium text-[#FF6A3D] group active:text-orange-500 focus:outline-none focus:ring">
                <span
                    class="absolute inset-0 transition-transform translate-x-0.5 translate-y-0.5 bg-[#FF6A3D] group-hover:translate-y-0 group-hover:translate-x-0"></span>





                <button
                    class="px-6 py-3 scale-100 hover:scale-105 duration-300 transition bg-[#1A2238] border-[#FF6A3D] border-2">
                    <a href="/" class="text-[#FF6A3D] font-medium">Go Home</a>
                </button>
                {{-- <span class="relative block px-8 py-3 bg-[#1A2238] border border-current">
                    <a href="/">
                        <router-link to="/">
                            Go Home
                        </router-link>
                    </a>
                </span> --}}
            </a>
        </button>
    </main>
</body>

</html>
