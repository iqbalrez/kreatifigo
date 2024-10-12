<x-guest-layout>
    @section('title', 'Beranda')

    {{-- Hero --}}
    <div class="flex items-center min-h-screen">
        {{-- BG --}}
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

        {{-- Content --}}
        <div class="mx-auto max-w-2xl">
            <div class="mb-4 sm:mb-8 flex justify-center">
                <div
                    class="relative text-center w-fit rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    {{ $company->name }} 📺
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-balance text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                    {{ $company->description }}</h1>

                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#portfolio"
                        class="rounded-md bg-blue px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Check
                        our work</a>
                    <a href="https://l.instagram.com/?u=https%3A%2F%2Fwa.me%2Fmessage%2FW56Z3ZD3ZRP4H1%3Ffbclid%3DPAZXh0bgNhZW0CMTEAAaaTAGSv9A-oWZK_zoxSwfEZGMh5q0tnxNMtgtC6xWVpxiFUwm_Oyjt-jcA_aem_cPu4h7StYvfIqXSpSfVKPA&e=AT0petVRgIw3Zbci94l_oOGglQdpPdlGXlpSu-qb-mgGKPL-_WkgsoZrfl2yCN_CgczCLrKzHdI7m7j4hprhiZbsDvtxPauihzk7girvoStc6aREXLzSHA"
                        class="text-sm font-semibold leading-6 text-gray-900">Contact us <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>

        {{-- BG --}}
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>

    {{-- Insight --}}
    <div class="bg-blue pt-0 pb-8 sm:py-16">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <dl
                class="grid grid-cols-1 divide-x-0 divide-y lg:divide-y-0 lg:divide-x gap-x-8 gap-y-8 text-center lg:grid-cols-3">
                <div class="mx-auto pt-8 lg:pt-0 flex w-full flex-col gap-y-4">
                    <dt class="text-base leading-7 text-gray-400">Clients helped</dt>
                    <dd class="order-first text-4xl font-semibold tracking-tight text-white sm:text-5xl">24+
                    </dd>
                </div>
                <div class="mx-auto pt-8 lg:pt-0 flex w-full flex-col gap-y-4 text-center">
                    <dt class="text-base leading-7 text-gray-400">Works done</dt>
                    <dd class="order-first text-4xl font-semibold tracking-tight text-white sm:text-5xl">120+</dd>
                </div>
                <div class="mx-auto pt-8 lg:pt-0 flex w-full flex-col gap-y-4 text-center">
                    <dt class="text-base leading-7 text-gray-400">Dedication</dt>
                    <dd class="order-first text-4xl font-semibold tracking-tight text-white sm:text-5xl">12 months
                    </dd>
                </div>
            </dl>
        </div>
    </div>

    {{-- Profile --}}
    <div class="pt-8 sm:pt-16 mx-8 md:mx-12 xl:mx-64 ">
        <div class="grid md:grid-cols-12 gap-8 md:gap-12">
            <img class="rounded-xl row-span-1 col-span-1 md:col-span-6"
                src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">

            <div class="md:col-span-6">
                <h2 class="text-balance text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl"> About us </h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                    aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                    inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur
                    neque. Morem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit
                    interdum, ac
                    aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                    inceptos himenaeos. Curabitur tempus urna at turpis condimentum lobortis. Ut commodo efficitur
                    neque.</p>
            </div>
        </div>
    </div>

    {{-- Service --}}
    <div class="pt-8 sm:pt-16 mx-8 md:mx-12 xl:mx-64">
        <h2 class="text-balance text-center text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl"> What we can
            help you?
        </h2>
        <div class="py-8 grid md:grid-cols-12 gap-4 md:gap-6">
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Photoshoot</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                    aliquet odio mattis. </p>
            </div>
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Video Shoot & Editing</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                    aliquet odio mattis. </p>
            </div>
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Graphic Design</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                    aliquet odio mattis. </p>
            </div>
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Motion Graphic</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                    aliquet odio mattis. </p>
            </div>
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Social Media Handling</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                    aliquet odio mattis. </p>
            </div>
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Others</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    Torem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac
                    aliquet odio mattis. </p>
            </div>
        </div>
    </div>

    {{-- Portfolio --}}
    <div class="py-8 sm:py-16 mx-8 md:mx-12 xl:mx-64 flex items-center snap-center" id="portfolio">
        <section class="w-full">
            <h2 class="text-balance text-center text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl"> Our work
            </h2>
            <div class="py-8 max-w-screen-xl">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
                    <div class="col-span-2 sm:col-span-1 md:col-span-2  h-auto md:h-full flex flex-col">
                        <a href=""
                            class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                            <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                                alt=""
                                class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                            <h3
                                class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">
                                Photoshoot</h3>
                        </a>
                    </div>
                    <div class="col-span-2 sm:col-span-1 md:col-span-2 ">
                        <a href=""
                            class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
                            <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                                alt=""
                                class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                            <h3
                                class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">
                                Video</h3>
                        </a>
                        <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                            <a href=""
                                class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                                    alt=""
                                    class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                <h3
                                    class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">
                                    Motion</h3>
                            </a>
                            <a href=""
                                class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                                    alt=""
                                    class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                                <h3
                                    class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">
                                    Design</h3>
                            </a>
                        </div>
                    </div>
                    <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
                        <a href=""
                            class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                            <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                                alt=""
                                class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                            <h3
                                class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">
                                Others</h3>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Contact --}}
    <div class="py-8 sm:py-16 px-8 md:px-12 xl:px-64     bg-slate-100" id="contact">
        <div class="grid max-w-7xl gap-x-8 gap-y-20 grid-cols-2 w-full">
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Stay connected!</h2>
                <ul class="grid-flow-row gap-8 pt-4">
                    <li class="py-2">+62 819 9080 3545</li>
                    <li class="py-2">@kreatifigo</li>
                    <li class="py-2">kreatifigo.production@gmail.com</li>
                </ul>
            </div>
            <div class="w-full">
                <img class="rounded-xl"
                    src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png">
            </div>
        </div>
    </div>
</x-guest-layout>
