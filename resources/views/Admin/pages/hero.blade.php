@extends('Admin.layouts')
@section('title', 'Hero Section')



@section('dashboard')
    @push('style')
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @endpush



    <div class="w-full flex justify-end mt-10">
        <button data-dialog-target="hero-section-modal"
            class="rounded-md bg-orange-500 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-orange-700 focus:shadow-none active:bg-orange-700 hover:bg-orange-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none ml-2"
            type="button">
            Edit Hero Section
        </button>
    </div>

    <div data-dialog-backdrop="hero-section-modal" data-dialog-backdrop-close="true"
        data-popover-transition="transition-all duration-300"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="hero-section-modal" data-dialog-mount="opacity-100 translate-y-0 scale-100"
            data-dialog-unmount="opacity-0 -translate-y-28 scale-90 pointer-events-none"
            data-dialog-transition="transition-all duration-300"
            class="relative mx-auto w-full max-w-screen-sm rounded-lg overflow-hidden shadow-sm">
            <div class="relative flex flex-col bg-white">
                <div class="relative m-2.5 items-center flex justify-center text-white h-24 rounded-md bg-slate-800">
                    <h3 class="text-2xl text-white">
                        Edit Hero Section
                    </h3>
                </div>
                <form class="w-full" action="/dashboard/herosection" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex w-full flex-col gap-4 p-4">
                        <div class="flex w-full flex-col  gap-4 ">
                            <div class="w-full ">
                                <label class="block mb-2 text-sm text-slate-600">
                                    Heading
                                </label>
                                <input type="text" name="title"
                                    class="w-full bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                    placeholder="Heading" />
                            </div>
                            <div class="w-full ">
                                <div class="flex flex-col items-end gap-6 w-full">
                                    <div class="relative w-full min-w-full">
                                        <textarea
                                            class="peer h-full min-h-[100px] w-full resize-none rounded-md border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-3 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                                            placeholder=" " name="subtitle"></textarea>
                                        <label
                                            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[4.1] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                            Subtitle
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="p-4 w-full">
                            <label class="block mt-4 text-sm">
                                <span class="text-slate-600 ">Hero Image</span>
                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file"
                                        class="flex flex-col relative py-4 items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50  dark:bg-gray-200 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <img id="img-preview" class="w-full h-full hidden object-contain">
                                        <div class="flex flex-col file items-center justify-center pt-5 pb-6">
                                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                    stroke-width="2"
                                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click
                                                    to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX.
                                                800x400px)
                                            </p>
                                        </div>
                                        <input id="dropzone-file" name="hero_image" onchange="previewImage()"
                                            id="image imgInp" value="{{ old('hero_image') }}" type="file"
                                            class="hidden image " />
                                    </label>
                                </div>

                            </label>
                        </div>
                    </div>
                    <div class="p-6 pt-0">
                        <button
                            class="w-full rounded-md bg-slate-800 py-2 px-4 border border-transparent text-center text-sm text-white transition-all shadow-md hover:shadow-lg focus:bg-slate-700 focus:shadow-none active:bg-slate-700 hover:bg-slate-700 active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            type="submit">
                            Add Data
                        </button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="global-container mt-10">
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


    </div>


    @push('script')
        <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
    @endpush

    @push('custom_script')
        <script>
            function previewImage() {
                const image = document.querySelector(".image");
                const file = document.querySelector(".file");
                const imgPreview = document.querySelector("#img-preview");

                // Menampilkan preview hanya jika file telah dipilih
                if (image.files && image.files[0]) {
                    imgPreview.style.display = "block";
                    file.style.display = "none";

                    const oFReader = new FileReader();
                    oFReader.readAsDataURL(image.files[0]);

                    oFReader.onload = function(oFREvent) {
                        imgPreview.src = oFREvent.target.result;
                    };
                }
            }
        </script>
    @endpush
@endsection
