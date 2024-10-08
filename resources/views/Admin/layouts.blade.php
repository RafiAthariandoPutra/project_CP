<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

    <script async src="https://unpkg.com/@material-tailwind/html@latest/scripts/ripple.js"></script>


    <script async src="/node_modules/@material-tailwind/html/scripts/ripple.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    @stack('style')


</head>

<body>
    <div class="min-h-screen bg-blue-gray-50/50">
        @include('Admin.components.sidebar')
        <div class="p-4 xl:ml-80">
            @include('Admin.components.navbar')
            @yield('dashboard')
        </div>
    </div>

    @include('sweetalert::alert')


    @stack('script')
    @stack('custom_script')
</body>

</html>
