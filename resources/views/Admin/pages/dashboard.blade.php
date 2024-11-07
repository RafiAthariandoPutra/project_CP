@extends('Admin.layouts')
@section('title', 'Dashboard')


@section('dashboard')
    <aside
        class="fixed top-0 right-0 z-50 h-screen w-96 bg-white px-2.5 shadow-lg transition-transform duration-300 translate-x-96">
        <div class="flex items-start justify-between px-6 pt-8 pb-6">
            <div>
                <h5
                    class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900">
                    Dashboard Configurator</h5>
                <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                    See our dashboard options.</p>
            </div><button
                class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                type="button"><span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" aria-hidden="true" class="h-5 w-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg></span></button>
        </div>
        <div class="py-4 px-6">
            <div class="mb-12">
                <h6
                    class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                    Sidenav Colors</h6>
                <div class="mt-3 flex items-center gap-2"><span
                        class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-gray-100 to-gray-100 border-gray-200 border-transparent"></span><span
                        class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-black to-black border-gray-200 border-black"></span><span
                        class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-green-400 to-green-600 border-transparent"></span><span
                        class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-orange-400 to-orange-600 border-transparent"></span><span
                        class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-red-400 to-red-600 border-transparent"></span><span
                        class="h-6 w-6 cursor-pointer rounded-full border bg-gradient-to-br transition-transform hover:scale-105 from-pink-400 to-pink-600 border-transparent"></span>
                </div>
            </div>
            <div class="mb-12">
                <h6
                    class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                    Sidenav Types</h6>
                <p class="block antialiased font-sans text-sm font-light leading-normal text-gray-700">
                    Choose between 3 different sidenav types.</p>
                <div class="mt-3 flex items-center gap-2"><button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-gray-900 text-gray-900 hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85]"
                        type="button">Dark</button><button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-gray-900 text-gray-900 hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85]"
                        type="button">Transparent</button><button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85]"
                        type="button">White</button></div>
            </div>
            <div class="mb-12">
                <hr>
                <div class="flex items-center justify-between py-5">
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                        Navbar Fixed</h6>
                    <div class="inline-flex items-center">
                        <div class="relative inline-block w-8 h-4 cursor-pointer rounded-full"><input id="navbar-fixed"
                                type="checkbox"
                                class="peer appearance-none w-8 h-4 absolute bg-blue-gray-100 rounded-full cursor-pointer transition-colors duration-300 checked:bg-gray-900 peer-checked:border-gray-900 peer-checked:before:bg-gray-900"
                                value="false"><label for="navbar-fixed"
                                class="bg-white w-5 h-5 border border-blue-gray-100 rounded-full shadow-md absolute top-2/4 -left-1 -translate-y-2/4 peer-checked:translate-x-full transition-all duration-300 cursor-pointer before:content[''] before:block before:bg-blue-gray-500 before:w-10 before:h-10 before:rounded-full before:absolute before:top-2/4 before:left-2/4 before:-translate-y-2/4 before:-translate-x-2/4 before:transition-opacity before:opacity-0 hover:before:opacity-10 peer-checked:border-gray-900 peer-checked:before:bg-gray-900">
                                <div
                                    class="inline-block top-2/4 left-2/4 -translate-x-2/4 -translate-y-2/4 p-5 rounded-full">
                                </div>
                            </label></div>
                    </div>
                </div>
                <hr>
                <div class="my-8 flex flex-col gap-4"><a
                        href="https://www.creative-tim.com/product/material-tailwind-dashboard-react?rel=mtdr"
                        target="_black"><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] block w-full"
                            type="button">Free Download</button></a><a
                        href="https://www.material-tailwind.com/docs/react/installation?rel=mtdr" target="_black"><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-blue-gray-500 text-blue-gray-500 hover:opacity-75 focus:ring focus:ring-blue-gray-200 active:opacity-[0.85] block w-full"
                            type="button">View Documentation</button></a><a
                        href="https://www.material-tailwind.com/blocks/react?rel=mtdr" target="_black"><button
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-blue-gray-500 text-blue-gray-500 hover:opacity-75 focus:ring focus:ring-blue-gray-200 active:opacity-[0.85] block w-full"
                            type="button">Material Tailwind PRO</button></a></div><a
                    class="mx-auto flex items-center justify-center gap-2"
                    href="https://github.com/creativetimofficial/material-tailwind-dashboard-react" target="_blank"
                    rel="noreferrer">
                    <div class="relative grid items-center font-sans font-bold uppercase whitespace-nowrap select-none text-white py-1.5 text-xs rounded-lg bg-blue-gray-900 px-4"
                        style="opacity: 1;">
                        <div class="absolute top-2/4 -translate-y-2/4 w-5 h-5 left-1.5"><svg
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="mt-px ml-1.5 h-4 w-4">
                                <path fill-rule="evenodd"
                                    d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                    clip-rule="evenodd"></path>
                            </svg></div><span class="ml-[18px]">346 - Stars</span>
                    </div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path
                            d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z">
                        </path>
                    </svg>
                </a>
            </div>
            <div class="text-center">
                <h6
                    class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                    Thank you for sharing ❤️</h6>
                <div class="mt-4 flex justify-center gap-2"><button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] flex items-center gap-2"
                        type="button"><i class="fa-brands fa-twitter text-white"></i>Tweet</button><button
                        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] flex items-center gap-2"
                        type="button"><i class="fa-brands fa-facebook text-white"></i>Share</button>
                </div>
            </div>
        </div>
    </aside><button
        class="align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-12 max-w-[48px] h-12 max-h-[48px] text-sm bg-white text-blue-gray-900 shadow-md hover:shadow-lg hover:shadow-blue-gray-500/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none fixed bottom-8 right-8 z-40 rounded-full shadow-blue-gray-900/10"
        type="button"><span class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                class="h-5 w-5">
                <path fill-rule="evenodd"
                    d="M11.078 2.25c-.917 0-1.699.663-1.85 1.567L9.05 4.889c-.02.12-.115.26-.297.348a7.493 7.493 0 00-.986.57c-.166.115-.334.126-.45.083L6.3 5.508a1.875 1.875 0 00-2.282.819l-.922 1.597a1.875 1.875 0 00.432 2.385l.84.692c.095.078.17.229.154.43a7.598 7.598 0 000 1.139c.015.2-.059.352-.153.43l-.841.692a1.875 1.875 0 00-.432 2.385l.922 1.597a1.875 1.875 0 002.282.818l1.019-.382c.115-.043.283-.031.45.082.312.214.641.405.985.57.182.088.277.228.297.35l.178 1.071c.151.904.933 1.567 1.85 1.567h1.844c.916 0 1.699-.663 1.85-1.567l.178-1.072c.02-.12.114-.26.297-.349.344-.165.673-.356.985-.57.167-.114.335-.125.45-.082l1.02.382a1.875 1.875 0 002.28-.819l.923-1.597a1.875 1.875 0 00-.432-2.385l-.84-.692c-.095-.078-.17-.229-.154-.43a7.614 7.614 0 000-1.139c-.016-.2.059-.352.153-.43l.84-.692c.708-.582.891-1.59.433-2.385l-.922-1.597a1.875 1.875 0 00-2.282-.818l-1.02.382c-.114.043-.282.031-.449-.083a7.49 7.49 0 00-.985-.57c-.183-.087-.277-.227-.297-.348l-.179-1.072a1.875 1.875 0 00-1.85-1.567h-1.843zM12 15.75a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"
                    clip-rule="evenodd"></path>
            </svg></span></button>
    <form method="GET" action="{{ route('download.cetak') }}">
        <button type="submit" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-white text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none">
            Print
          </button>
    </form>
    <div class="mt-12">
        <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">
            <div
                class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                <div
                    class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="w-6 h-6 text-white">
                        <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                        <path fill-rule="evenodd"
                            d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                            clip-rule="evenodd"></path>
                        <path
                            d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z">
                        </path>
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                        Today's Money</p>
                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        $53k</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                        <strong class="text-green-500">+55%</strong>&nbsp;than last week
                    </p>
                </div>
            </div>
            <div
                class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                <div
                    class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="w-6 h-6 text-white">
                        <path
                            d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 10.088 10.088 0 005.06-1.01.75.75 0 00.42-.643 4.875 4.875 0 00-6.957-4.611 8.586 8.586 0 011.71 5.157v.003z">
                        </path>
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                        Today's Users</p>
                    {{-- <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        {{ Auth()->user()->count() }}</h4> --}}
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                        <strong class="text-green-500">+3%</strong>&nbsp;than last month
                    </p>
                </div>
            </div>
            <div
                class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                <div
                    class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="w-6 h-6 text-white">
                        <path
                            d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z">
                        </path>
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                        New Clients</p>
                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        3,462</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                        <strong class="text-red-500">-2%</strong>&nbsp;than yesterday
                    </p>
                </div>
            </div>
            <div
                class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                <div
                    class="bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-gray-900/20 absolute grid h-12 w-12 place-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                        class="w-6 h-6 text-white">
                        <path
                            d="M18.375 2.25c-1.035 0-1.875.84-1.875 1.875v15.75c0 1.035.84 1.875 1.875 1.875h.75c1.035 0 1.875-.84 1.875-1.875V4.125c0-1.036-.84-1.875-1.875-1.875h-.75zM9.75 8.625c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-.75a1.875 1.875 0 01-1.875-1.875V8.625zM3 13.125c0-1.036.84-1.875 1.875-1.875h.75c1.036 0 1.875.84 1.875 1.875v6.75c0 1.035-.84 1.875-1.875 1.875h-.75A1.875 1.875 0 013 19.875v-6.75z">
                        </path>
                    </svg>
                </div>
                <div class="p-4 text-right">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                        Sales</p>
                    <h4
                        class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                        $103,430</h4>
                </div>
                <div class="border-t border-blue-gray-50 p-4">
                    <p class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                        <strong class="text-green-500">+5%</strong>&nbsp;than yesterday
                    </p>
                </div>
            </div>
        </div>
        <div class="mb-6 grid grid-cols-1 gap-y-12 gap-x-6 md:grid-cols-2 xl:grid-cols-3">
            <div
                class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700">
                    <div type="bar" height="220" series="[object Object]" options="[object Object]"
                        width="100%" style="min-height: 235px;">
                        <div id="apexchartssh7sz7hm" class="apexcharts-canvas apexchartssh7sz7hm apexcharts-theme-light"
                            style="width: 301px; height: 220px;"><svg id="SvgjsSvg1329" width="301" height="220"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                style="background: transparent;">
                                <foreignObject x="0" y="0" width="301" height="220">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 110px;"></div>
                                </foreignObject>
                                <g id="SvgjsG1405" class="apexcharts-yaxis" rel="0"
                                    transform="translate(11.7072114944458, 0)">
                                    <g id="SvgjsG1406" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1408"
                                            font-family="inherit" x="20" y="36.5" text-anchor="end"
                                            dominant-baseline="auto" font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1409">50</tspan>
                                            <title>50</title>
                                        </text><text id="SvgjsText1411" font-family="inherit" x="20" y="65.70592600593567"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1412">40</tspan>
                                            <title>40</title>
                                        </text><text id="SvgjsText1414" font-family="inherit" x="20" y="94.91185201187133"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1415">30</tspan>
                                            <title>30</title>
                                        </text><text id="SvgjsText1417" font-family="inherit" x="20" y="124.117778017807"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1418">20</tspan>
                                            <title>20</title>
                                        </text><text id="SvgjsText1420" font-family="inherit" x="20"
                                            y="153.32370402374266" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1421">10</tspan>
                                            <title>10</title>
                                        </text><text id="SvgjsText1423" font-family="inherit" x="20"
                                            y="182.52963002967834" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1424">0</tspan>
                                            <title>0</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1331" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(41.7072114944458, 35)">
                                    <defs id="SvgjsDefs1330">
                                        <linearGradient id="SvgjsLinearGradient1334" x1="0" y1="0"
                                            x2="0" y2="1">
                                            <stop id="SvgjsStop1335" stop-opacity="0.4"
                                                stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                            <stop id="SvgjsStop1336" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                            <stop id="SvgjsStop1337" stop-opacity="0.5"
                                                stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                        </linearGradient>
                                        <clipPath id="gridRectMasksh7sz7hm">
                                            <rect id="SvgjsRect1339" width="243.2927885055542"
                                                height="150.02963002967834" x="-2" y="-2" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff">
                                            </rect>
                                        </clipPath>
                                        <clipPath id="forecastMasksh7sz7hm"></clipPath>
                                        <clipPath id="nonForecastMasksh7sz7hm"></clipPath>
                                        <clipPath id="gridRectMarkerMasksh7sz7hm">
                                            <rect id="SvgjsRect1340" width="243.2927885055542"
                                                height="150.02963002967834" x="-2" y="-2" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1338" width="5.469549451555524" height="146.02963002967834" x="0"
                                        y="0" rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient1334)"
                                        class="apexcharts-xcrosshairs" y2="146.02963002967834" filter="none"
                                        fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1360" class="apexcharts-grid">
                                        <g id="SvgjsG1361" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1373" x1="0" y1="29.20592600593567"
                                                x2="239.2927885055542" y2="29.20592600593567" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1374" x1="0" y1="58.41185201187134"
                                                x2="239.2927885055542" y2="58.41185201187134" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1375" x1="0" y1="87.61777801780701"
                                                x2="239.2927885055542" y2="87.61777801780701" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1376" x1="0" y1="116.82370402374268"
                                                x2="239.2927885055542" y2="116.82370402374268" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                        </g>
                                        <g id="SvgjsG1362" class="apexcharts-gridlines-vertical">
                                            <line id="SvgjsLine1364" x1="0" y1="0" x2="0"
                                                y2="146.02963002967834" stroke="#dddddd" stroke-dasharray="5"
                                                stroke-linecap="butt" class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1365" x1="34.184684072222026" y1="0"
                                                x2="34.184684072222026" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1366" x1="68.36936814444405" y1="0"
                                                x2="68.36936814444405" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1367" x1="102.55405221666608" y1="0"
                                                x2="102.55405221666608" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1368" x1="136.7387362888881" y1="0"
                                                x2="136.7387362888881" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1369" x1="170.92342036111012" y1="0"
                                                x2="170.92342036111012" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1370" x1="205.10810443333213" y1="0"
                                                x2="205.10810443333213" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1371" x1="239.29278850555414" y1="0"
                                                x2="239.29278850555414" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                        </g>
                                        <line id="SvgjsLine1379" x1="0" y1="146.02963002967834"
                                            x2="239.2927885055542" y2="146.02963002967834" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt">
                                        </line>
                                        <line id="SvgjsLine1378" x1="0" y1="1" x2="0"
                                            y2="146.02963002967834" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1363" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1372" x1="0" y1="0" x2="239.2927885055542"
                                            y2="0" stroke="#dddddd" stroke-dasharray="5" stroke-linecap="butt"
                                            class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1377" x1="0" y1="146.02963002967834"
                                            x2="239.2927885055542" y2="146.02963002967834" stroke="#dddddd"
                                            stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1341" class="apexcharts-bar-series apexcharts-plot-series">
                                        <g id="SvgjsG1342" class="apexcharts-series" rel="1" seriesName="Views"
                                            data:realIndex="0">
                                            <path id="SvgjsPath1347"
                                                d="M 14.357567310333252 141.03063002967835 L 14.357567310333252 5.001 C 14.357567310333252 2.5010000000000003 16.857567310333252 0.001 19.357567310333252 0.001 L 19.357567310333252 0.001 C 19.592342036111013 0.001 19.827116761888774 2.501 19.827116761888774 5.001 L 19.827116761888774 141.03063002967835 C 19.827116761888774 143.53063002967835 17.327116761888774 146.03063002967835 14.827116761888774 146.03063002967835 L 14.827116761888774 146.03063002967835 C 14.592342036111013 146.03063002967835 14.357567310333252 143.53063002967835 14.357567310333252 141.03063002967835 Z "
                                                fill="rgba(56,142,60,0.8)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMasksh7sz7hm)"
                                                pathTo="M 14.357567310333252 141.03063002967835 L 14.357567310333252 5.001 C 14.357567310333252 2.5010000000000003 16.857567310333252 0.001 19.357567310333252 0.001 L 19.357567310333252 0.001 C 19.592342036111013 0.001 19.827116761888774 2.501 19.827116761888774 5.001 L 19.827116761888774 141.03063002967835 C 19.827116761888774 143.53063002967835 17.327116761888774 146.03063002967835 14.827116761888774 146.03063002967835 L 14.827116761888774 146.03063002967835 C 14.592342036111013 146.03063002967835 14.357567310333252 143.53063002967835 14.357567310333252 141.03063002967835 Z "
                                                pathFrom="M 14.357567310333252 146.03063002967835 L 14.357567310333252 146.03063002967835 L 19.827116761888774 146.03063002967835 L 19.827116761888774 146.03063002967835 L 19.827116761888774 146.03063002967835 L 19.827116761888774 146.03063002967835 L 19.827116761888774 146.03063002967835 L 14.357567310333252 146.03063002967835 Z"
                                                cy="0" cx="48.54225138255528" j="0" val="50"
                                                barHeight="146.02963002967834" barWidth="5.469549451555524">
                                            </path>
                                            <path id="SvgjsPath1349"
                                                d="M 48.54225138255528 141.03063002967835 L 48.54225138255528 92.61877801780702 C 48.54225138255528 90.11877801780702 51.04225138255528 87.61877801780702 53.54225138255528 87.61877801780702 L 53.54225138255528 87.61877801780702 C 53.77702610833304 87.61877801780702 54.0118008341108 90.11877801780702 54.0118008341108 92.61877801780702 L 54.0118008341108 141.03063002967835 C 54.0118008341108 143.53063002967835 51.5118008341108 146.03063002967835 49.0118008341108 146.03063002967835 L 49.0118008341108 146.03063002967835 C 48.77702610833304 146.03063002967835 48.54225138255528 143.53063002967835 48.54225138255528 141.03063002967835 Z "
                                                fill="rgba(56,142,60,0.8)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMasksh7sz7hm)"
                                                pathTo="M 48.54225138255528 141.03063002967835 L 48.54225138255528 92.61877801780702 C 48.54225138255528 90.11877801780702 51.04225138255528 87.61877801780702 53.54225138255528 87.61877801780702 L 53.54225138255528 87.61877801780702 C 53.77702610833304 87.61877801780702 54.0118008341108 90.11877801780702 54.0118008341108 92.61877801780702 L 54.0118008341108 141.03063002967835 C 54.0118008341108 143.53063002967835 51.5118008341108 146.03063002967835 49.0118008341108 146.03063002967835 L 49.0118008341108 146.03063002967835 C 48.77702610833304 146.03063002967835 48.54225138255528 143.53063002967835 48.54225138255528 141.03063002967835 Z "
                                                pathFrom="M 48.54225138255528 146.03063002967835 L 48.54225138255528 146.03063002967835 L 54.0118008341108 146.03063002967835 L 54.0118008341108 146.03063002967835 L 54.0118008341108 146.03063002967835 L 54.0118008341108 146.03063002967835 L 54.0118008341108 146.03063002967835 L 48.54225138255528 146.03063002967835 Z"
                                                cy="87.61777801780701" cx="82.7269354547773" j="1" val="20"
                                                barHeight="58.41185201187133" barWidth="5.469549451555524"></path>
                                            <path id="SvgjsPath1351"
                                                d="M 82.7269354547773 141.03063002967835 L 82.7269354547773 121.82470402374268 C 82.7269354547773 119.32470402374268 85.2269354547773 116.82470402374268 87.7269354547773 116.82470402374268 L 87.7269354547773 116.82470402374268 C 87.96171018055506 116.82470402374268 88.19648490633283 119.32470402374268 88.19648490633283 121.82470402374268 L 88.19648490633283 141.03063002967835 C 88.19648490633283 143.53063002967835 85.69648490633283 146.03063002967835 83.19648490633283 146.03063002967835 L 83.19648490633283 146.03063002967835 C 82.96171018055506 146.03063002967835 82.7269354547773 143.53063002967835 82.7269354547773 141.03063002967835 Z "
                                                fill="rgba(56,142,60,0.8)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMasksh7sz7hm)"
                                                pathTo="M 82.7269354547773 141.03063002967835 L 82.7269354547773 121.82470402374268 C 82.7269354547773 119.32470402374268 85.2269354547773 116.82470402374268 87.7269354547773 116.82470402374268 L 87.7269354547773 116.82470402374268 C 87.96171018055506 116.82470402374268 88.19648490633283 119.32470402374268 88.19648490633283 121.82470402374268 L 88.19648490633283 141.03063002967835 C 88.19648490633283 143.53063002967835 85.69648490633283 146.03063002967835 83.19648490633283 146.03063002967835 L 83.19648490633283 146.03063002967835 C 82.96171018055506 146.03063002967835 82.7269354547773 143.53063002967835 82.7269354547773 141.03063002967835 Z "
                                                pathFrom="M 82.7269354547773 146.03063002967835 L 82.7269354547773 146.03063002967835 L 88.19648490633283 146.03063002967835 L 88.19648490633283 146.03063002967835 L 88.19648490633283 146.03063002967835 L 88.19648490633283 146.03063002967835 L 88.19648490633283 146.03063002967835 L 82.7269354547773 146.03063002967835 Z"
                                                cy="116.82370402374268" cx="116.91161952699933" j="2" val="10"
                                                barHeight="29.205926005935666" barWidth="5.469549451555524"></path>
                                            <path id="SvgjsPath1353"
                                                d="M 116.91161952699933 141.03063002967835 L 116.91161952699933 86.77759281661989 C 116.91161952699933 84.27759281661989 119.41161952699933 81.77759281661989 121.91161952699933 81.77759281661989 L 121.91161952699933 81.77759281661989 C 122.1463942527771 81.77759281661989 122.38116897855485 84.27759281661989 122.38116897855485 86.77759281661989 L 122.38116897855485 141.03063002967835 C 122.38116897855485 143.53063002967835 119.88116897855485 146.03063002967835 117.38116897855485 146.03063002967835 L 117.38116897855485 146.03063002967835 C 117.1463942527771 146.03063002967835 116.91161952699933 143.53063002967835 116.91161952699933 141.03063002967835 Z "
                                                fill="rgba(56,142,60,0.8)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMasksh7sz7hm)"
                                                pathTo="M 116.91161952699933 141.03063002967835 L 116.91161952699933 86.77759281661989 C 116.91161952699933 84.27759281661989 119.41161952699933 81.77759281661989 121.91161952699933 81.77759281661989 L 121.91161952699933 81.77759281661989 C 122.1463942527771 81.77759281661989 122.38116897855485 84.27759281661989 122.38116897855485 86.77759281661989 L 122.38116897855485 141.03063002967835 C 122.38116897855485 143.53063002967835 119.88116897855485 146.03063002967835 117.38116897855485 146.03063002967835 L 117.38116897855485 146.03063002967835 C 117.1463942527771 146.03063002967835 116.91161952699933 143.53063002967835 116.91161952699933 141.03063002967835 Z "
                                                pathFrom="M 116.91161952699933 146.03063002967835 L 116.91161952699933 146.03063002967835 L 122.38116897855485 146.03063002967835 L 122.38116897855485 146.03063002967835 L 122.38116897855485 146.03063002967835 L 122.38116897855485 146.03063002967835 L 122.38116897855485 146.03063002967835 L 116.91161952699933 146.03063002967835 Z"
                                                cy="81.77659281661988" cx="151.09630359922136" j="3" val="22"
                                                barHeight="64.25303721305846" barWidth="5.469549451555524"></path>
                                            <path id="SvgjsPath1355"
                                                d="M 151.09630359922136 141.03063002967835 L 151.09630359922136 5.001 C 151.09630359922136 2.5010000000000003 153.59630359922136 0.001 156.09630359922136 0.001 L 156.09630359922136 0.001 C 156.3310783249991 0.001 156.5658530507769 2.501 156.5658530507769 5.001 L 156.5658530507769 141.03063002967835 C 156.5658530507769 143.53063002967835 154.0658530507769 146.03063002967835 151.5658530507769 146.03063002967835 L 151.5658530507769 146.03063002967835 C 151.3310783249991 146.03063002967835 151.09630359922136 143.53063002967835 151.09630359922136 141.03063002967835 Z "
                                                fill="rgba(56,142,60,0.8)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMasksh7sz7hm)"
                                                pathTo="M 151.09630359922136 141.03063002967835 L 151.09630359922136 5.001 C 151.09630359922136 2.5010000000000003 153.59630359922136 0.001 156.09630359922136 0.001 L 156.09630359922136 0.001 C 156.3310783249991 0.001 156.5658530507769 2.501 156.5658530507769 5.001 L 156.5658530507769 141.03063002967835 C 156.5658530507769 143.53063002967835 154.0658530507769 146.03063002967835 151.5658530507769 146.03063002967835 L 151.5658530507769 146.03063002967835 C 151.3310783249991 146.03063002967835 151.09630359922136 143.53063002967835 151.09630359922136 141.03063002967835 Z "
                                                pathFrom="M 151.09630359922136 146.03063002967835 L 151.09630359922136 146.03063002967835 L 156.5658530507769 146.03063002967835 L 156.5658530507769 146.03063002967835 L 156.5658530507769 146.03063002967835 L 156.5658530507769 146.03063002967835 L 156.5658530507769 146.03063002967835 L 151.09630359922136 146.03063002967835 Z"
                                                cy="0" cx="185.28098767144337" j="4" val="50"
                                                barHeight="146.02963002967834" barWidth="5.469549451555524">
                                            </path>
                                            <path id="SvgjsPath1357"
                                                d="M 185.28098767144337 141.03063002967835 L 185.28098767144337 121.82470402374268 C 185.28098767144337 119.32470402374268 187.78098767144337 116.82470402374268 190.28098767144337 116.82470402374268 L 190.28098767144337 116.82470402374268 C 190.51576239722112 116.82470402374268 190.7505371229989 119.32470402374268 190.7505371229989 121.82470402374268 L 190.7505371229989 141.03063002967835 C 190.7505371229989 143.53063002967835 188.2505371229989 146.03063002967835 185.7505371229989 146.03063002967835 L 185.7505371229989 146.03063002967835 C 185.51576239722112 146.03063002967835 185.28098767144337 143.53063002967835 185.28098767144337 141.03063002967835 Z "
                                                fill="rgba(56,142,60,0.8)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMasksh7sz7hm)"
                                                pathTo="M 185.28098767144337 141.03063002967835 L 185.28098767144337 121.82470402374268 C 185.28098767144337 119.32470402374268 187.78098767144337 116.82470402374268 190.28098767144337 116.82470402374268 L 190.28098767144337 116.82470402374268 C 190.51576239722112 116.82470402374268 190.7505371229989 119.32470402374268 190.7505371229989 121.82470402374268 L 190.7505371229989 141.03063002967835 C 190.7505371229989 143.53063002967835 188.2505371229989 146.03063002967835 185.7505371229989 146.03063002967835 L 185.7505371229989 146.03063002967835 C 185.51576239722112 146.03063002967835 185.28098767144337 143.53063002967835 185.28098767144337 141.03063002967835 Z "
                                                pathFrom="M 185.28098767144337 146.03063002967835 L 185.28098767144337 146.03063002967835 L 190.7505371229989 146.03063002967835 L 190.7505371229989 146.03063002967835 L 190.7505371229989 146.03063002967835 L 190.7505371229989 146.03063002967835 L 190.7505371229989 146.03063002967835 L 185.28098767144337 146.03063002967835 Z"
                                                cy="116.82370402374268" cx="219.46567174366538" j="5" val="10"
                                                barHeight="29.205926005935666" barWidth="5.469549451555524"></path>
                                            <path id="SvgjsPath1359"
                                                d="M 219.46567174366538 141.03063002967835 L 219.46567174366538 34.206926005935685 C 219.46567174366538 31.706926005935685 221.96567174366538 29.20692600593568 224.46567174366538 29.20692600593568 L 224.46567174366538 29.20692600593568 C 224.70044646944314 29.20692600593568 224.93522119522092 31.706926005935685 224.93522119522092 34.206926005935685 L 224.93522119522092 141.03063002967835 C 224.93522119522092 143.53063002967835 222.43522119522092 146.03063002967835 219.93522119522092 146.03063002967835 L 219.93522119522092 146.03063002967835 C 219.70044646944314 146.03063002967835 219.46567174366538 143.53063002967835 219.46567174366538 141.03063002967835 Z "
                                                fill="rgba(56,142,60,0.8)" fill-opacity="1" stroke-opacity="1"
                                                stroke-linecap="round" stroke-width="0" stroke-dasharray="0"
                                                class="apexcharts-bar-area" index="0"
                                                clip-path="url(#gridRectMasksh7sz7hm)"
                                                pathTo="M 219.46567174366538 141.03063002967835 L 219.46567174366538 34.206926005935685 C 219.46567174366538 31.706926005935685 221.96567174366538 29.20692600593568 224.46567174366538 29.20692600593568 L 224.46567174366538 29.20692600593568 C 224.70044646944314 29.20692600593568 224.93522119522092 31.706926005935685 224.93522119522092 34.206926005935685 L 224.93522119522092 141.03063002967835 C 224.93522119522092 143.53063002967835 222.43522119522092 146.03063002967835 219.93522119522092 146.03063002967835 L 219.93522119522092 146.03063002967835 C 219.70044646944314 146.03063002967835 219.46567174366538 143.53063002967835 219.46567174366538 141.03063002967835 Z "
                                                pathFrom="M 219.46567174366538 146.03063002967835 L 219.46567174366538 146.03063002967835 L 224.93522119522092 146.03063002967835 L 224.93522119522092 146.03063002967835 L 224.93522119522092 146.03063002967835 L 224.93522119522092 146.03063002967835 L 224.93522119522092 146.03063002967835 L 219.46567174366538 146.03063002967835 Z"
                                                cy="29.20592600593568" cx="253.6503558158874" j="6" val="40"
                                                barHeight="116.82370402374266" barWidth="5.469549451555524"></path>
                                            <g id="SvgjsG1344" class="apexcharts-bar-goals-markers">
                                                <g id="SvgjsG1346" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMasksh7sz7hm)"></g>
                                                <g id="SvgjsG1348" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMasksh7sz7hm)"></g>
                                                <g id="SvgjsG1350" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMasksh7sz7hm)"></g>
                                                <g id="SvgjsG1352" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMasksh7sz7hm)"></g>
                                                <g id="SvgjsG1354" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMasksh7sz7hm)"></g>
                                                <g id="SvgjsG1356" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMasksh7sz7hm)"></g>
                                                <g id="SvgjsG1358" className="apexcharts-bar-goals-groups"
                                                    class="apexcharts-hidden-element-shown"
                                                    clip-path="url(#gridRectMarkerMasksh7sz7hm)"></g>
                                            </g>
                                            <g id="SvgjsG1345"
                                                class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                            </g>
                                        </g>
                                        <g id="SvgjsG1343" class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                            data:realIndex="0"></g>
                                    </g>
                                    <line id="SvgjsLine1380" x1="0" y1="0" x2="239.2927885055542"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1381" x1="0" y1="0" x2="239.2927885055542"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1382" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1383" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                            <text id="SvgjsText1385" font-family="inherit" x="17.092342036111013"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1386">M</tspan>
                                                <title>M</title>
                                            </text><text id="SvgjsText1388" font-family="inherit" x="51.27702610833304"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1389">T</tspan>
                                                <title>T</title>
                                            </text><text id="SvgjsText1391" font-family="inherit" x="85.46171018055506"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1392">W</tspan>
                                                <title>W</title>
                                            </text><text id="SvgjsText1394" font-family="inherit" x="119.6463942527771"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1395">T</tspan>
                                                <title>T</title>
                                            </text><text id="SvgjsText1397" font-family="inherit" x="153.8310783249991"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1398">F</tspan>
                                                <title>F</title>
                                            </text><text id="SvgjsText1400" font-family="inherit" x="188.01576239722112"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1401">S</tspan>
                                                <title>S</title>
                                            </text><text id="SvgjsText1403" font-family="inherit" x="222.20044646944314"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1404">S</tspan>
                                                <title>S</title>
                                            </text>
                                        </g>
                                    </g>
                                    <g id="SvgjsG1425" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1426" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1427" class="apexcharts-point-annotations"></g>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 px-6 pt-0">
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                        Website View</h6>
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                        Last Campaign Performance</p>
                </div>
                <div class="p-6 border-t border-blue-gray-50 px-6 py-5">
                    <p
                        class="antialiased font-sans text-sm leading-normal flex items-center font-normal text-blue-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" stroke-width="2" class="h-4 w-4 text-blue-gray-400">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                clip-rule="evenodd"></path>
                        </svg>&nbsp;campaign sent 2 days ago
                    </p>
                </div>
            </div>
            <div
                class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700">
                    <div type="line" height="220" series="[object Object]" options="[object Object]"
                        width="100%" style="min-height: 235px;">
                        <div id="apexchartszerw1gu6" class="apexcharts-canvas apexchartszerw1gu6 apexcharts-theme-light"
                            style="width: 301px; height: 220px;"><svg id="SvgjsSvg1428" width="301" height="220"
                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="301" height="220">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 110px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect1433" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                    fill="#fefefe"></rect>
                                <g id="SvgjsG1512" class="apexcharts-yaxis" rel="0"
                                    transform="translate(19.007015228271484, 0)">
                                    <g id="SvgjsG1513" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1515"
                                            font-family="inherit" x="20" y="36.6" text-anchor="end"
                                            dominant-baseline="auto" font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1516">600</tspan>
                                            <title>600</title>
                                        </text><text id="SvgjsText1518" font-family="inherit" x="20" y="60.93827167161306"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1519">500</tspan>
                                            <title>500</title>
                                        </text><text id="SvgjsText1521" font-family="inherit" x="20" y="85.27654334322611"
                                            text-anchor="end" dominant-baseline="auto" font-size="13px"
                                            font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1522">400</tspan>
                                            <title>400</title>
                                        </text><text id="SvgjsText1524" font-family="inherit" x="20"
                                            y="109.61481501483917" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1525">300</tspan>
                                            <title>300</title>
                                        </text><text id="SvgjsText1527" font-family="inherit" x="20"
                                            y="133.95308668645222" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1528">200</tspan>
                                            <title>200</title>
                                        </text><text id="SvgjsText1530" font-family="inherit" x="20"
                                            y="158.29135835806528" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1531">100</tspan>
                                            <title>100</title>
                                        </text><text id="SvgjsText1533" font-family="inherit" x="20"
                                            y="182.62963002967834" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label " style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1534">0</tspan>
                                            <title>0</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1430" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(49.007015228271484, 35)">
                                    <defs id="SvgjsDefs1429">
                                        <clipPath id="gridRectMaskzerw1gu6">
                                            <rect id="SvgjsRect1435" width="240.99298477172852"
                                                height="170.02963002967834" x="-7" y="-12" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff">
                                            </rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskzerw1gu6"></clipPath>
                                        <clipPath id="nonForecastMaskzerw1gu6"></clipPath>
                                        <clipPath id="gridRectMarkerMaskzerw1gu6">
                                            <rect id="SvgjsRect1436" width="283.9929847717285"
                                                height="198.02963002967834" x="-26" y="-26" rx="0" ry="0"
                                                opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                fill="#fff">
                                            </rect>
                                        </clipPath>
                                    </defs>
                                    <line id="SvgjsLine1434" x1="0" y1="0" x2="0"
                                        y2="146.02963002967834" stroke="#b6b6b6" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                        height="146.02963002967834" fill="#b1b9c4" filter="none" fill-opacity="0.9"
                                        stroke-width="1"></line>
                                    <g id="SvgjsG1459" class="apexcharts-grid">
                                        <g id="SvgjsG1460" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1473" x1="0" y1="24.338271671613057"
                                                x2="231.99298477172852" y2="24.338271671613057" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1474" x1="0" y1="48.676543343226115"
                                                x2="231.99298477172852" y2="48.676543343226115" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1475" x1="0" y1="73.01481501483917"
                                                x2="231.99298477172852" y2="73.01481501483917" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1476" x1="0" y1="97.35308668645223"
                                                x2="231.99298477172852" y2="97.35308668645223" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1477" x1="0" y1="121.69135835806529"
                                                x2="231.99298477172852" y2="121.69135835806529" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                        </g>
                                        <g id="SvgjsG1461" class="apexcharts-gridlines-vertical">
                                            <line id="SvgjsLine1463" x1="0" y1="0" x2="0"
                                                y2="146.02963002967834" stroke="#dddddd" stroke-dasharray="5"
                                                stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1464" x1="28.999123096466064" y1="0"
                                                x2="28.999123096466064" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1465" x1="57.99824619293213" y1="0"
                                                x2="57.99824619293213" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1466" x1="86.9973692893982" y1="0"
                                                x2="86.9973692893982" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1467" x1="115.99649238586426" y1="0"
                                                x2="115.99649238586426" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1468" x1="144.99561548233032" y1="0"
                                                x2="144.99561548233032" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1469" x1="173.9947385787964" y1="0"
                                                x2="173.9947385787964" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1470" x1="202.99386167526245" y1="0"
                                                x2="202.99386167526245" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1471" x1="231.99298477172852" y1="0"
                                                x2="231.99298477172852" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <line id="SvgjsLine1480" x1="0" y1="146.02963002967834"
                                            x2="231.99298477172852" y2="146.02963002967834" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt">
                                        </line>
                                        <line id="SvgjsLine1479" x1="0" y1="1" x2="0"
                                            y2="146.02963002967834" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1462" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1472" x1="0" y1="0"
                                            x2="231.99298477172852" y2="0" stroke="#dddddd"
                                            stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1478" x1="0" y1="146.02963002967834"
                                            x2="231.99298477172852" y2="146.02963002967834" stroke="#dddddd"
                                            stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1437" class="apexcharts-line-series apexcharts-plot-series">
                                        <g id="SvgjsG1438" class="apexcharts-series" zIndex="0"
                                            seriesName="Sales" data:longestSeries="true" rel="1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath1458"
                                                d="M 0 133.86049419387183 L 28.999123096466064 136.29432136103313 L 57.99824619293213 73.01481501483917 L 86.9973692893982 68.14716068051656 L 115.99649238586426 24.338271671613057 L 144.99561548233032 60.84567917903264 L 173.9947385787964 97.35308668645223 L 202.99386167526245 90.05160518496831 L 231.99298477172852 24.338271671613057"
                                                fill="none" fill-opacity="1" stroke="rgba(2,136,209,0.8)"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-line" index="0"
                                                clip-path="url(#gridRectMaskzerw1gu6)"
                                                pathTo="M 0 133.86049419387183 L 28.999123096466064 136.29432136103313 L 57.99824619293213 73.01481501483917 L 86.9973692893982 68.14716068051656 L 115.99649238586426 24.338271671613057 L 144.99561548233032 60.84567917903264 L 173.9947385787964 97.35308668645223 L 202.99386167526245 90.05160518496831 L 231.99298477172852 24.338271671613057"
                                                pathFrom="M -1 146.02963002967834 L -1 146.02963002967834 L 28.999123096466064 146.02963002967834 L 57.99824619293213 146.02963002967834 L 86.9973692893982 146.02963002967834 L 115.99649238586426 146.02963002967834 L 144.99561548233032 146.02963002967834 L 173.9947385787964 146.02963002967834 L 202.99386167526245 146.02963002967834 L 231.99298477172852 146.02963002967834"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1439"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="0">
                                                <g id="SvgjsG1441" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskzerw1gu6)">
                                                    <circle id="SvgjsCircle1442" r="5" cx="0"
                                                        cy="133.86049419387183"
                                                        class="apexcharts-marker no-pointer-events wzqxvmojy"
                                                        stroke="#ffffff" fill="#0288d1" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                        index="0" default-marker-size="5"></circle>
                                                    <circle id="SvgjsCircle1443" r="5" cx="28.999123096466064"
                                                        cy="136.29432136103313"
                                                        class="apexcharts-marker no-pointer-events w5ztk5yot"
                                                        stroke="#ffffff" fill="#0288d1" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1444" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskzerw1gu6)">
                                                    <circle id="SvgjsCircle1445" r="5" cx="57.99824619293213"
                                                        cy="73.01481501483917"
                                                        class="apexcharts-marker no-pointer-events w7gfhwhy1"
                                                        stroke="#ffffff" fill="#0288d1" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1446" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskzerw1gu6)">
                                                    <circle id="SvgjsCircle1447" r="5" cx="86.9973692893982"
                                                        cy="68.14716068051656"
                                                        class="apexcharts-marker no-pointer-events w3gxbo8cx"
                                                        stroke="#ffffff" fill="#0288d1" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1448" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskzerw1gu6)">
                                                    <circle id="SvgjsCircle1449" r="5" cx="115.99649238586426"
                                                        cy="24.338271671613057"
                                                        class="apexcharts-marker no-pointer-events wcqz4dv5l"
                                                        stroke="#ffffff" fill="#0288d1" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1450" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskzerw1gu6)">
                                                    <circle id="SvgjsCircle1451" r="5" cx="144.99561548233032"
                                                        cy="60.84567917903264"
                                                        class="apexcharts-marker no-pointer-events wzpthapb3"
                                                        stroke="#ffffff" fill="#0288d1" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1452" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskzerw1gu6)">
                                                    <circle id="SvgjsCircle1453" r="5" cx="173.9947385787964"
                                                        cy="97.35308668645223"
                                                        class="apexcharts-marker no-pointer-events w24syfb11"
                                                        stroke="#ffffff" fill="#0288d1" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="6" j="6"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1454" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskzerw1gu6)">
                                                    <circle id="SvgjsCircle1455" r="5" cx="202.99386167526245"
                                                        cy="90.05160518496831"
                                                        class="apexcharts-marker no-pointer-events w19sr01i9"
                                                        stroke="#ffffff" fill="#0288d1" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="7" j="7"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1456" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskzerw1gu6)">
                                                    <circle id="SvgjsCircle1457" r="5" cx="231.99298477172852"
                                                        cy="24.338271671613057"
                                                        class="apexcharts-marker no-pointer-events w7z4wx72cg"
                                                        stroke="#ffffff" fill="#0288d1" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="8" j="8"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1440" class="apexcharts-datalabels" data:realIndex="0">
                                        </g>
                                    </g>
                                    <line id="SvgjsLine1481" x1="0" y1="0" x2="231.99298477172852"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1482" x1="0" y1="0" x2="231.99298477172852"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1483" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1484" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText1486"
                                                font-family="inherit" x="0" y="175.02963002967834" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="300"
                                                fill="#37474f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1487">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1489" font-family="inherit" x="28.999123096466064"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1490">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1492" font-family="inherit" x="57.99824619293213"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1493">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1495" font-family="inherit" x="86.9973692893982"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1496">Jul</tspan>
                                                <title>Jul</title>
                                            </text><text id="SvgjsText1498" font-family="inherit" x="115.99649238586426"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1499">Aug</tspan>
                                                <title>Aug</title>
                                            </text><text id="SvgjsText1501" font-family="inherit" x="144.99561548233032"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1502">Sep</tspan>
                                                <title>Sep</title>
                                            </text><text id="SvgjsText1504" font-family="inherit" x="173.9947385787964"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1505">Oct</tspan>
                                                <title>Oct</title>
                                            </text><text id="SvgjsText1507" font-family="inherit" x="202.99386167526245"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1508">Nov</tspan>
                                                <title>Nov</title>
                                            </text><text id="SvgjsText1510" font-family="inherit" x="231.99298477172852"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1511">Dec</tspan>
                                                <title>Dec</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1535" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1536" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1537" class="apexcharts-point-annotations"></g>
                                    <rect id="SvgjsRect1538" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect1539" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-selection-rect"></rect>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(2, 136, 209);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark">
                                <div class="apexcharts-xaxistooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 px-6 pt-0">
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                        Daily Sales</h6>
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                        15% increase in today sales</p>
                </div>
                <div class="p-6 border-t border-blue-gray-50 px-6 py-5">
                    <p
                        class="antialiased font-sans text-sm leading-normal flex items-center font-normal text-blue-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" stroke-width="2" class="h-4 w-4 text-blue-gray-400">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                clip-rule="evenodd"></path>
                        </svg>&nbsp;updated 4 min ago
                    </p>
                </div>
            </div>
            <div
                class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                <div class="relative bg-clip-border mt-4 mx-4 rounded-xl overflow-hidden bg-white text-gray-700">
                    <div type="line" height="220" series="[object Object]" options="[object Object]"
                        width="100%" style="min-height: 235px;">
                        <div id="apexchartsvgphx0v" class="apexcharts-canvas apexchartsvgphx0v apexcharts-theme-light"
                            style="width: 301px; height: 220px;"><svg id="SvgjsSvg1540" width="301"
                                height="220" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)" style="background: transparent;">
                                <foreignObject x="0" y="0" width="301" height="220">
                                    <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                        style="max-height: 110px;"></div>
                                </foreignObject>
                                <rect id="SvgjsRect1545" width="0" height="0" x="0" y="0" rx="0"
                                    ry="0" opacity="1" stroke-width="0" stroke="none"
                                    stroke-dasharray="0" fill="#fefefe"></rect>
                                <g id="SvgjsG1624" class="apexcharts-yaxis" rel="0"
                                    transform="translate(19.007015228271484, 0)">
                                    <g id="SvgjsG1625" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1627"
                                            font-family="inherit" x="20" y="36.6" text-anchor="end"
                                            dominant-baseline="auto" font-size="13px" font-weight="300"
                                            fill="#37474f" class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1628">600</tspan>
                                            <title>600</title>
                                        </text><text id="SvgjsText1630" font-family="inherit" x="20"
                                            y="60.93827167161306" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1631">500</tspan>
                                            <title>500</title>
                                        </text><text id="SvgjsText1633" font-family="inherit" x="20"
                                            y="85.27654334322611" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1634">400</tspan>
                                            <title>400</title>
                                        </text><text id="SvgjsText1636" font-family="inherit" x="20"
                                            y="109.61481501483917" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1637">300</tspan>
                                            <title>300</title>
                                        </text><text id="SvgjsText1639" font-family="inherit" x="20"
                                            y="133.95308668645222" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1640">200</tspan>
                                            <title>200</title>
                                        </text><text id="SvgjsText1642" font-family="inherit" x="20"
                                            y="158.29135835806528" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1643">100</tspan>
                                            <title>100</title>
                                        </text><text id="SvgjsText1645" font-family="inherit" x="20"
                                            y="182.62963002967834" text-anchor="end" dominant-baseline="auto"
                                            font-size="13px" font-weight="300" fill="#37474f"
                                            class="apexcharts-text apexcharts-yaxis-label "
                                            style="font-family: inherit;">
                                            <tspan id="SvgjsTspan1646">0</tspan>
                                            <title>0</title>
                                        </text></g>
                                </g>
                                <g id="SvgjsG1542" class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(49.007015228271484, 35)">
                                    <defs id="SvgjsDefs1541">
                                        <clipPath id="gridRectMaskvgphx0v">
                                            <rect id="SvgjsRect1547" width="240.99298477172852"
                                                height="170.02963002967834" x="-7" y="-12" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                        <clipPath id="forecastMaskvgphx0v"></clipPath>
                                        <clipPath id="nonForecastMaskvgphx0v"></clipPath>
                                        <clipPath id="gridRectMarkerMaskvgphx0v">
                                            <rect id="SvgjsRect1548" width="283.9929847717285"
                                                height="198.02963002967834" x="-26" y="-26" rx="0"
                                                ry="0" opacity="1" stroke-width="0" stroke="none"
                                                stroke-dasharray="0" fill="#fff"></rect>
                                        </clipPath>
                                    </defs>
                                    <line id="SvgjsLine1546" x1="0" y1="0" x2="0"
                                        y2="146.02963002967834" stroke="#b6b6b6" stroke-dasharray="3"
                                        stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                        width="1" height="146.02963002967834" fill="#b1b9c4" filter="none"
                                        fill-opacity="0.9" stroke-width="1"></line>
                                    <g id="SvgjsG1571" class="apexcharts-grid">
                                        <g id="SvgjsG1572" class="apexcharts-gridlines-horizontal">
                                            <line id="SvgjsLine1585" x1="0" y1="24.338271671613057"
                                                x2="231.99298477172852" y2="24.338271671613057" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1586" x1="0" y1="48.676543343226115"
                                                x2="231.99298477172852" y2="48.676543343226115" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1587" x1="0" y1="73.01481501483917"
                                                x2="231.99298477172852" y2="73.01481501483917" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1588" x1="0" y1="97.35308668645223"
                                                x2="231.99298477172852" y2="97.35308668645223" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1589" x1="0" y1="121.69135835806529"
                                                x2="231.99298477172852" y2="121.69135835806529" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG1573" class="apexcharts-gridlines-vertical">
                                            <line id="SvgjsLine1575" x1="0" y1="0" x2="0"
                                                y2="146.02963002967834" stroke="#dddddd" stroke-dasharray="5"
                                                stroke-linecap="butt" class="apexcharts-gridline">
                                            </line>
                                            <line id="SvgjsLine1576" x1="28.999123096466064" y1="0"
                                                x2="28.999123096466064" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1577" x1="57.99824619293213" y1="0"
                                                x2="57.99824619293213" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1578" x1="86.9973692893982" y1="0"
                                                x2="86.9973692893982" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1579" x1="115.99649238586426" y1="0"
                                                x2="115.99649238586426" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1580" x1="144.99561548233032" y1="0"
                                                x2="144.99561548233032" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1581" x1="173.9947385787964" y1="0"
                                                x2="173.9947385787964" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1582" x1="202.99386167526245" y1="0"
                                                x2="202.99386167526245" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine1583" x1="231.99298477172852" y1="0"
                                                x2="231.99298477172852" y2="146.02963002967834" stroke="#dddddd"
                                                stroke-dasharray="5" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <line id="SvgjsLine1592" x1="0" y1="146.02963002967834"
                                            x2="231.99298477172852" y2="146.02963002967834" stroke="transparent"
                                            stroke-dasharray="0" stroke-linecap="butt">
                                        </line>
                                        <line id="SvgjsLine1591" x1="0" y1="1" x2="0"
                                            y2="146.02963002967834" stroke="transparent" stroke-dasharray="0"
                                            stroke-linecap="butt"></line>
                                    </g>
                                    <g id="SvgjsG1574" class="apexcharts-grid-borders">
                                        <line id="SvgjsLine1584" x1="0" y1="0"
                                            x2="231.99298477172852" y2="0" stroke="#dddddd"
                                            stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                        <line id="SvgjsLine1590" x1="0" y1="146.02963002967834"
                                            x2="231.99298477172852" y2="146.02963002967834" stroke="#dddddd"
                                            stroke-dasharray="5" stroke-linecap="butt" class="apexcharts-gridline">
                                        </line>
                                    </g>
                                    <g id="SvgjsG1549" class="apexcharts-line-series apexcharts-plot-series">
                                        <g id="SvgjsG1550" class="apexcharts-series" zIndex="0"
                                            seriesName="Tasks" data:longestSeries="true" rel="1"
                                            data:realIndex="0">
                                            <path id="SvgjsPath1570"
                                                d="M 0 133.86049419387183 L 28.999123096466064 136.29432136103313 L 57.99824619293213 73.01481501483917 L 86.9973692893982 92.48543235212962 L 115.99649238586426 24.338271671613057 L 144.99561548233032 85.1839508506457 L 173.9947385787964 48.676543343226115 L 202.99386167526245 90.05160518496831 L 231.99298477172852 24.338271671613057"
                                                fill="none" fill-opacity="1" stroke="rgba(56,142,60,0.8)"
                                                stroke-opacity="1" stroke-linecap="round" stroke-width="5"
                                                stroke-dasharray="0" class="apexcharts-line" index="0"
                                                clip-path="url(#gridRectMaskvgphx0v)"
                                                pathTo="M 0 133.86049419387183 L 28.999123096466064 136.29432136103313 L 57.99824619293213 73.01481501483917 L 86.9973692893982 92.48543235212962 L 115.99649238586426 24.338271671613057 L 144.99561548233032 85.1839508506457 L 173.9947385787964 48.676543343226115 L 202.99386167526245 90.05160518496831 L 231.99298477172852 24.338271671613057"
                                                pathFrom="M -1 146.02963002967834 L -1 146.02963002967834 L 28.999123096466064 146.02963002967834 L 57.99824619293213 146.02963002967834 L 86.9973692893982 146.02963002967834 L 115.99649238586426 146.02963002967834 L 144.99561548233032 146.02963002967834 L 173.9947385787964 146.02963002967834 L 202.99386167526245 146.02963002967834 L 231.99298477172852 146.02963002967834"
                                                fill-rule="evenodd"></path>
                                            <g id="SvgjsG1551"
                                                class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                data:realIndex="0">
                                                <g id="SvgjsG1553" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskvgphx0v)">
                                                    <circle id="SvgjsCircle1554" r="5" cx="0"
                                                        cy="133.86049419387183"
                                                        class="apexcharts-marker no-pointer-events wmkbb6hdxl"
                                                        stroke="#ffffff" fill="#388e3c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="0" j="0"
                                                        index="0" default-marker-size="5"></circle>
                                                    <circle id="SvgjsCircle1555" r="5" cx="28.999123096466064"
                                                        cy="136.29432136103313"
                                                        class="apexcharts-marker no-pointer-events wklnfv1gi"
                                                        stroke="#ffffff" fill="#388e3c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="1" j="1"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1556" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskvgphx0v)">
                                                    <circle id="SvgjsCircle1557" r="5" cx="57.99824619293213"
                                                        cy="73.01481501483917"
                                                        class="apexcharts-marker no-pointer-events wrztx0gfn"
                                                        stroke="#ffffff" fill="#388e3c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="2" j="2"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1558" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskvgphx0v)">
                                                    <circle id="SvgjsCircle1559" r="5" cx="86.9973692893982"
                                                        cy="92.48543235212962"
                                                        class="apexcharts-marker no-pointer-events wj5lrsp82"
                                                        stroke="#ffffff" fill="#388e3c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="3" j="3"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1560" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskvgphx0v)">
                                                    <circle id="SvgjsCircle1561" r="5" cx="115.99649238586426"
                                                        cy="24.338271671613057"
                                                        class="apexcharts-marker no-pointer-events wz53axgtz"
                                                        stroke="#ffffff" fill="#388e3c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="4" j="4"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1562" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskvgphx0v)">
                                                    <circle id="SvgjsCircle1563" r="5" cx="144.99561548233032"
                                                        cy="85.1839508506457"
                                                        class="apexcharts-marker no-pointer-events w224bwl6v"
                                                        stroke="#ffffff" fill="#388e3c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="5" j="5"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1564" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskvgphx0v)">
                                                    <circle id="SvgjsCircle1565" r="5" cx="173.9947385787964"
                                                        cy="48.676543343226115"
                                                        class="apexcharts-marker no-pointer-events wr9qbj22q"
                                                        stroke="#ffffff" fill="#388e3c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="6" j="6"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1566" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskvgphx0v)">
                                                    <circle id="SvgjsCircle1567" r="5" cx="202.99386167526245"
                                                        cy="90.05160518496831"
                                                        class="apexcharts-marker no-pointer-events whvd17db"
                                                        stroke="#ffffff" fill="#388e3c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="7" j="7"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                                <g id="SvgjsG1568" class="apexcharts-series-markers"
                                                    clip-path="url(#gridRectMarkerMaskvgphx0v)">
                                                    <circle id="SvgjsCircle1569" r="5" cx="231.99298477172852"
                                                        cy="24.338271671613057"
                                                        class="apexcharts-marker no-pointer-events wifxp3b8mg"
                                                        stroke="#ffffff" fill="#388e3c" fill-opacity="1"
                                                        stroke-width="2" stroke-opacity="0.9" rel="8" j="8"
                                                        index="0" default-marker-size="5"></circle>
                                                </g>
                                            </g>
                                        </g>
                                        <g id="SvgjsG1552" class="apexcharts-datalabels" data:realIndex="0">
                                        </g>
                                    </g>
                                    <line id="SvgjsLine1593" x1="0" y1="0" x2="231.99298477172852"
                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1594" x1="0" y1="0" x2="231.99298477172852"
                                        y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1595" class="apexcharts-xaxis" transform="translate(0, 0)">
                                        <g id="SvgjsG1596" class="apexcharts-xaxis-texts-g"
                                            transform="translate(0, -4)"><text id="SvgjsText1598"
                                                font-family="inherit" x="0" y="175.02963002967834" text-anchor="middle"
                                                dominant-baseline="auto" font-size="13px" font-weight="300"
                                                fill="#37474f" class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1599">Apr</tspan>
                                                <title>Apr</title>
                                            </text><text id="SvgjsText1601" font-family="inherit" x="28.999123096466064"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1602">May</tspan>
                                                <title>May</title>
                                            </text><text id="SvgjsText1604" font-family="inherit" x="57.99824619293213"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1605">Jun</tspan>
                                                <title>Jun</title>
                                            </text><text id="SvgjsText1607" font-family="inherit" x="86.9973692893982"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1608">Jul</tspan>
                                                <title>Jul</title>
                                            </text><text id="SvgjsText1610" font-family="inherit" x="115.99649238586426"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1611">Aug</tspan>
                                                <title>Aug</title>
                                            </text><text id="SvgjsText1613" font-family="inherit" x="144.99561548233032"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1614">Sep</tspan>
                                                <title>Sep</title>
                                            </text><text id="SvgjsText1616" font-family="inherit" x="173.9947385787964"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1617">Oct</tspan>
                                                <title>Oct</title>
                                            </text><text id="SvgjsText1619" font-family="inherit" x="202.99386167526245"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1620">Nov</tspan>
                                                <title>Nov</title>
                                            </text><text id="SvgjsText1622" font-family="inherit" x="231.99298477172852"
                                                y="175.02963002967834" text-anchor="middle" dominant-baseline="auto"
                                                font-size="13px" font-weight="300" fill="#37474f"
                                                class="apexcharts-text apexcharts-xaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan1623">Dec</tspan>
                                                <title>Dec</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1647" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1648" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1649" class="apexcharts-point-annotations"></g>
                                    <rect id="SvgjsRect1650" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-zoom-rect"></rect>
                                    <rect id="SvgjsRect1651" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"
                                        class="apexcharts-selection-rect"></rect>
                                </g>
                            </svg>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-title"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                        class="apexcharts-tooltip-marker"
                                        style="background-color: rgb(56, 142, 60);"></span>
                                    <div class="apexcharts-tooltip-text"
                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span
                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                        <div class="apexcharts-tooltip-goals-group"><span
                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span
                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-dark">
                                <div class="apexcharts-xaxistooltip-text"
                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                </div>
                            </div>
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-dark">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 px-6 pt-0">
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900">
                        Completed Tasks</h6>
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-blue-gray-600">
                        Last Campaign Performance</p>
                </div>
                <div class="p-6 border-t border-blue-gray-50 px-6 py-5">
                    <p
                        class="antialiased font-sans text-sm leading-normal flex items-center font-normal text-blue-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            aria-hidden="true" stroke-width="2" class="h-4 w-4 text-blue-gray-400">
                            <path fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 6a.75.75 0 00-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 000-1.5h-3.75V6z"
                                clip-rule="evenodd"></path>
                        </svg>&nbsp;just updated
                    </p>
                </div>
            </div>
        </div>
        <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
            <div
                class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 overflow-hidden xl:col-span-2 border border-blue-gray-100 shadow-sm">
                <div
                    class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                    <div>
                        <h6
                            class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-1">
                            Projects</h6>
                        <p
                            class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" stroke-width="3" class="h-4 w-4 text-blue-gray-200">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                    clip-rule="evenodd"></path>
                            </svg><strong>30 done</strong> this month
                        </p>
                    </div><button aria-expanded="false" aria-haspopup="menu" id=":r1k:"
                        class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-8 max-w-[32px] h-8 max-h-[32px] rounded-lg text-xs text-blue-gray-500 hover:bg-blue-gray-500/10 active:bg-blue-gray-500/30"
                        type="button"><span
                            class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2"><svg
                                xmlns="http://www.w3.org/2000/svg" fill="currenColor" viewBox="0 0 24 24"
                                stroke-width="3" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z">
                                </path>
                            </svg></span></button>
                </div>
                <div class="p-6 overflow-x-scroll px-0 pt-0 pb-2">
                    <table class="w-full min-w-[640px] table-auto">
                        <thead>
                            <tr>
                                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                    <p
                                        class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                        companies</p>
                                </th>
                                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                    <p
                                        class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                        members</p>
                                </th>
                                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                    <p
                                        class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                        budget</p>
                                </th>
                                <th class="border-b border-blue-gray-50 py-3 px-6 text-left">
                                    <p
                                        class="block antialiased font-sans text-[11px] font-medium uppercase text-blue-gray-400">
                                        completion</p>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="flex items-center gap-4"><img
                                            src="/material-tailwind-dashboard-react/img/logo-xd.svg"
                                            alt="Material XD Version"
                                            class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                            Material XD Version</p>
                                    </div>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50"><img
                                        src="/material-tailwind-dashboard-react/img/team-1.jpeg" alt="Romina Hadid"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                                        src="/material-tailwind-dashboard-react/img/team-2.jpeg" alt="Ryan Tompson"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                                        src="/material-tailwind-dashboard-react/img/team-3.jpeg" alt="Jessica Doe"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                                        src="/material-tailwind-dashboard-react/img/team-4.jpeg" alt="Alexander Smith"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                        $14,000</p>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="w-10/12">
                                        <p
                                            class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                            60%</p>
                                        <div
                                            class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                            <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                style="width: 60%;"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="flex items-center gap-4"><img
                                            src="/material-tailwind-dashboard-react/img/logo-atlassian.svg"
                                            alt="Add Progress Track"
                                            class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                            Add Progress Track</p>
                                    </div>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50"><img
                                        src="/material-tailwind-dashboard-react/img/team-2.jpeg" alt="Ryan Tompson"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                                        src="/material-tailwind-dashboard-react/img/team-4.jpeg" alt="Alexander Smith"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                        $3,000</p>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="w-10/12">
                                        <p
                                            class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                            10%</p>
                                        <div
                                            class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                            <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                style="width: 10%;"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="flex items-center gap-4"><img
                                            src="/material-tailwind-dashboard-react/img/logo-slack.svg"
                                            alt="Fix Platform Errors"
                                            class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                            Fix Platform Errors</p>
                                    </div>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50"><img
                                        src="/material-tailwind-dashboard-react/img/team-3.jpeg" alt="Jessica Doe"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                                        src="/material-tailwind-dashboard-react/img/team-1.jpeg" alt="Romina Hadid"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                        Not set</p>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="w-10/12">
                                        <p
                                            class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                            100%</p>
                                        <div
                                            class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                            <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-green-600 to-green-400 text-white"
                                                style="width: 100%;"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="flex items-center gap-4"><img
                                            src="/material-tailwind-dashboard-react/img/logo-spotify.svg"
                                            alt="Launch our Mobile App"
                                            class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                            Launch our Mobile App</p>
                                    </div>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50"><img
                                        src="/material-tailwind-dashboard-react/img/team-4.jpeg" alt="Alexander Smith"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                                        src="/material-tailwind-dashboard-react/img/team-3.jpeg" alt="Jessica Doe"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                                        src="/material-tailwind-dashboard-react/img/team-2.jpeg" alt="Ryan Tompson"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5"><img
                                        src="/material-tailwind-dashboard-react/img/team-1.jpeg" alt="Romina Hadid"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                        $20,500</p>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="w-10/12">
                                        <p
                                            class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                            100%</p>
                                        <div
                                            class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                            <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-green-600 to-green-400 text-white"
                                                style="width: 100%;"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="flex items-center gap-4"><img
                                            src="/material-tailwind-dashboard-react/img/logo-jira.svg"
                                            alt="Add the New Pricing Page"
                                            class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                            Add the New Pricing Page</p>
                                    </div>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50"><img
                                        src="/material-tailwind-dashboard-react/img/team-4.jpeg" alt="Alexander Smith"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white">
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                        $500</p>
                                </td>
                                <td class="py-3 px-5 border-b border-blue-gray-50">
                                    <div class="w-10/12">
                                        <p
                                            class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                            25%</p>
                                        <div
                                            class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                            <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                style="width: 25%;"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-5 ">
                                    <div class="flex items-center gap-4"><img
                                            src="/material-tailwind-dashboard-react/img/logo-invision.svg"
                                            alt="Redesign New Online Shop"
                                            class="inline-block relative object-cover object-center !rounded-full w-9 h-9 rounded-md">
                                        <p
                                            class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-bold">
                                            Redesign New Online Shop</p>
                                    </div>
                                </td>
                                <td class="py-3 px-5 "><img src="/material-tailwind-dashboard-react/img/team-1.jpeg"
                                        alt="Romina Hadid"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white"><img
                                        src="/material-tailwind-dashboard-react/img/team-4.jpeg" alt="Alexander Smith"
                                        class="inline-block relative object-cover object-center !rounded-full w-6 h-6 rounded-md cursor-pointer border-2 border-white -ml-2.5">
                                </td>
                                <td class="py-3 px-5 ">
                                    <p class="block antialiased font-sans text-xs font-medium text-blue-gray-600">
                                        $2,000</p>
                                </td>
                                <td class="py-3 px-5 ">
                                    <div class="w-10/12">
                                        <p
                                            class="antialiased font-sans mb-1 block text-xs font-medium text-blue-gray-600">
                                            40%</p>
                                        <div
                                            class="flex flex-start bg-blue-gray-50 overflow-hidden w-full font-sans rounded-full text-xs font-medium h-1">
                                            <div class="flex justify-center items-center h-full overflow-hidden break-all rounded-full bg-gradient-to-tr from-blue-600 to-blue-400 text-white"
                                                style="width: 40%;"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div
                class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 border border-blue-gray-100 shadow-sm">
                <div
                    class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 p-6">
                    <h6
                        class="block antialiased tracking-normal font-sans text-base font-semibold leading-relaxed text-blue-gray-900 mb-2">
                        Orders Overview</h6>
                    <p
                        class="antialiased font-sans text-sm leading-normal flex items-center gap-1 font-normal text-blue-gray-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                            stroke="currentColor" aria-hidden="true" class="h-3.5 w-3.5 text-green-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 10.5L12 3m0 0l7.5 7.5M12 3v18">
                            </path>
                        </svg><strong>24%</strong> this month
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <div class="flex items-start gap-4 py-3">
                        <div
                            class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                                <path fill-rule="evenodd"
                                    d="M5.25 9a6.75 6.75 0 0113.5 0v.75c0 2.123.8 4.057 2.118 5.52a.75.75 0 01-.297 1.206c-1.544.57-3.16.99-4.831 1.243a3.75 3.75 0 11-7.48 0 24.585 24.585 0 01-4.831-1.244.75.75 0 01-.298-1.205A8.217 8.217 0 005.25 9.75V9zm4.502 8.9a2.25 2.25 0 104.496 0 25.057 25.057 0 01-4.496 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                $2400, Design changes</p><span
                                class="block antialiased font-sans text-xs font-medium text-blue-gray-500">22
                                DEC 7:20 PM</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 py-3">
                        <div
                            class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                                <path fill-rule="evenodd"
                                    d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zM12.75 9a.75.75 0 00-1.5 0v2.25H9a.75.75 0 000 1.5h2.25V15a.75.75 0 001.5 0v-2.25H15a.75.75 0 000-1.5h-2.25V9z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                New order #1832412</p><span
                                class="block antialiased font-sans text-xs font-medium text-blue-gray-500">21
                                DEC 11 PM</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 py-3">
                        <div
                            class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                                <path
                                    d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                Server payments for April</p><span
                                class="block antialiased font-sans text-xs font-medium text-blue-gray-500">21
                                DEC 9:34 PM</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 py-3">
                        <div
                            class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                                <path d="M4.5 3.75a3 3 0 00-3 3v.75h21v-.75a3 3 0 00-3-3h-15z"></path>
                                <path fill-rule="evenodd"
                                    d="M22.5 9.75h-21v7.5a3 3 0 003 3h15a3 3 0 003-3v-7.5zm-18 3.75a.75.75 0 01.75-.75h6a.75.75 0 010 1.5h-6a.75.75 0 01-.75-.75zm.75 2.25a.75.75 0 000 1.5h3a.75.75 0 000-1.5h-3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                New card added for order #4395133</p><span
                                class="block antialiased font-sans text-xs font-medium text-blue-gray-500">20
                                DEC 2:20 AM</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 py-3">
                        <div
                            class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-4/6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                                <path
                                    d="M18 1.5c2.9 0 5.25 2.35 5.25 5.25v3.75a.75.75 0 01-1.5 0V6.75a3.75 3.75 0 10-7.5 0v3a3 3 0 013 3v6.75a3 3 0 01-3 3H3.75a3 3 0 01-3-3v-6.75a3 3 0 013-3h9v-3c0-2.9 2.35-5.25 5.25-5.25z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                Unlock packages for development</p><span
                                class="block antialiased font-sans text-xs font-medium text-blue-gray-500">18
                                DEC 4:54 AM</span>
                        </div>
                    </div>
                    <div class="flex items-start gap-4 py-3">
                        <div
                            class="relative p-1 after:absolute after:-bottom-6 after:left-2/4 after:w-0.5 after:-translate-x-2/4 after:bg-blue-gray-50 after:content-[''] after:h-0">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                aria-hidden="true" class="!w-5 !h-5 text-blue-gray-300">
                                <path d="M12 7.5a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z"></path>
                                <path fill-rule="evenodd"
                                    d="M1.5 4.875C1.5 3.839 2.34 3 3.375 3h17.25c1.035 0 1.875.84 1.875 1.875v9.75c0 1.036-.84 1.875-1.875 1.875H3.375A1.875 1.875 0 011.5 14.625v-9.75zM8.25 9.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM18.75 9a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V9.75a.75.75 0 00-.75-.75h-.008zM4.5 9.75A.75.75 0 015.25 9h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75V9.75z"
                                    clip-rule="evenodd"></path>
                                <path
                                    d="M2.25 18a.75.75 0 000 1.5c5.4 0 10.63.722 15.6 2.075 1.19.324 2.4-.558 2.4-1.82V18.75a.75.75 0 00-.75-.75H2.25z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="antialiased font-sans text-sm leading-normal text-blue-gray-900 block font-medium">
                                New order #9583120</p><span
                                class="block antialiased font-sans text-xs font-medium text-blue-gray-500">17
                                DEC</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-blue-gray-600">
            <footer class="py-2">
                <div class="flex w-full flex-wrap items-center justify-center gap-6 px-2 md:justify-between">
                    <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">©
                        2024, made with <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                            fill="currentColor" aria-hidden="true"
                            class="-mt-0.5 inline-block h-3.5 w-3.5 text-red-600">
                            <path
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z">
                            </path>
                        </svg> by <a href="https://www.creative-tim.com" target="_blank"
                            class="transition-colors hover:text-blue-500 font-bold">Creative Tim</a> for a
                        better web.</p>
                    <ul class="flex items-center gap-4">
                        <li><a href="https://www.creative-tim.com" target="_blank"
                                class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Creative
                                Tim</a></li>
                        <li><a href="https://www.creative-tim.com/presentation" target="_blank"
                                class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">About
                                Us</a></li>
                        <li><a href="https://www.creative-tim.com/blog" target="_blank"
                                class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">Blog</a>
                        </li>
                        <li><a href="https://www.creative-tim.com/license" target="_blank"
                                class="block antialiased font-sans text-sm leading-normal py-0.5 px-1 font-normal text-inherit transition-colors hover:text-blue-500">License</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
@endsection
