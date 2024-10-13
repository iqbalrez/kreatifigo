<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    @yield('meta')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ config('app.name', 'Kreatifigo') }} | @yield('title')
    </title>

    {{-- Icon --}}

    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/inter" rel="stylesheet">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        html {
            overflow-x: hidden;
        }

        .blur-mode {
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .blur-mode.loaded>img {
            opacity: 1;
            transition: opacity 200ms ease-in-out;
        }

        .blur-mode>img {
            opacity: 0;
        }

        .blur-mode::before {
            content: "";
            position: absolute;
            inset: 0;
            animation: pulse 2.5s infinite;
        }


        @keyframes pulse {
            0% {
                background-color: rgba(255, 255, 255, 0)
            }

            50% {
                background-color: rgba(255, 255, 255, 0.1)
            }

            100% {
                background-color: rgba(255, 255, 255, 0)
            }
        }

        .blur-mode.loaded::before {
            content: none;
        }

        #social-media ion-icon {
            font-size: 1.5rem;
            color: #777777;
        }
    </style>

    <!-- Sweet Alert 2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('css-internal')
</head>

<body class="font-sans antialiased bg-gray-50 overflow-x-hidden">
    <div class="bg-white">
        <header class="flex-no-wrap fixed inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Kreatifigo</span>
                        <x-application-logo class="block h-7 w-auto fill-current text-gray-800"></x-application-logo>
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                {{-- <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Product</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Features</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Company</a>
                </div> --}}
            </nav>

            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                                alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Product</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="overflow-y-hidden relative isolate z-40">
            {{ $slot }}
        </div>

        {{-- Footer --}}
        <div
            class="bg-blue w-full border border-blue border-t-white  py-4 grid items-center justify-center flex-row-2 gap-2">
            <div class="flex items-center justify-center">
                <x-application-logo class="fill-current text-white block h-6 w-auto "></x-application-logo>
            </div>
            <p class="text-white text-center text-xs 2xl:text-md">
                Yogyakarta, Indonesia | 2024
            </p>
        </div>

        {{-- <!-- Ion Icons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> --}}

        <!-- AOS -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

        {{-- <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>


    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> --}}

        @stack('js-internal')


        <script>
            const blurModeElements = document.querySelectorAll('.blur-mode');
            blurModeElements.forEach((element) => {
                const img = element.querySelector('img');

                function loaded() {
                    element.classList.add('loaded');
                }

                if (img.complete) {
                    loaded();
                } else {
                    img.addEventListener('load', loaded)
                }
            });
        </script>

</body>

</html>
