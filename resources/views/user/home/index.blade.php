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
        <div class="pt-32 md:pt-20 mx-auto max-w-2xl">
            <div class="mb-4 sm:mb-8 flex justify-center">
                <div
                    class="relative text-center w-fit rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    {{ $company->name }} 📺
                </div>
            </div>
            <div class="mb-32 sm:mb-20 text-center">
                <h1 class="text-balance text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                    {{ $company->description }}</h1>

                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="#portfolio"
                        class="transition-colors rounded-md bg-blue px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Check
                        our work</a>
                    <a href="https://l.instagram.com/?u=https%3A%2F%2Fwa.me%2Fmessage%2FW56Z3ZD3ZRP4H1%3Ffbclid%3DPAZXh0bgNhZW0CMTEAAaaTAGSv9A-oWZK_zoxSwfEZGMh5q0tnxNMtgtC6xWVpxiFUwm_Oyjt-jcA_aem_cPu4h7StYvfIqXSpSfVKPA&e=AT0petVRgIw3Zbci94l_oOGglQdpPdlGXlpSu-qb-mgGKPL-_WkgsoZrfl2yCN_CgczCLrKzHdI7m7j4hprhiZbsDvtxPauihzk7girvoStc6aREXLzSHA"
                        class="transition-colors hover:text-blue text-sm font-semibold leading-6 text-gray-900">Contact
                        us <span aria-hidden="true">→</span></a>
                </div>
            </div>

            <a href="#insight">
                <button
                    class="transition-colors flex justify-center w-fit mx-auto rounded-full p-3 text-sm font-medium animate-bounce hover:bg-blue border-blue border active:border-blue active:border text-blue hover:text-white ">
                    <!-- Arrow down icon (Font Awesome or any other icon set) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </a>
        </div>

        {{-- BG --}}
        <div class="absolute inset-x-0 top-[calc(100%-96rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-96rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>

    {{-- Insight --}}
    <div id="insight" class="bg-blue pt-0 pb-8 sm:py-16 snap-start">
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
        <div class="grid md:grid-cols-12 gap-6 md:gap-12">
            <div class="rounded-xl row-span-1 col-span-1 md:col-span-6 w-full h-72 overflow-hidden">
                <div class="bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                <img class="w-full h-full object-cover rounded-xl hover:scale-105 transition-transform duration-500 ease-in-out"
                    src="https://drive.google.com/thumbnail?id=1WOYjHWFd4B4g4NMSqX19S3xlNt1rBhwJ&sz=w1000">
            </div>
            <div class="md:col-span-6 h-fit">
                <h2 class="text-balance text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl"> About us </h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    Kreatifigo is a creative agency based in Yogyakarta, driven by the passion to create distinctive
                    visual works. We believe that every brand has a unique story, and our mission is to express that
                    story through various creative media. With a team experienced in diverse fields, including
                    photography, videography, graphic design, and social media management, Kreatifigo is ready to help
                    you engage your audience in an engaging way.</p>
            </div>
        </div>
    </div>

    {{-- Service --}}
    <div class="pt-8 sm:pt-16 mx-8 md:mx-12 xl:mx-64">
        <h2 class="text-balance md:text-center text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl"> What we can
            help you?
        </h2>
        <div class="py-4 grid md:grid-cols-12 gap-4 md:gap-6">
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Photoshoot</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    Kreatifigo offers professional photoshoot sessions tailored for various purposes, including
                    <span class="italic">graduation, fashion, event documentation, and corporate branding</span>. We
                    ensure that each image tells a story and
                    conveys the right message.
                </p>
            </div>
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Video Shoot & Editing</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    We offer videography services including <span class="italic">company profile, event recap, personal
                        branding, etc</span>. Our services encompass everything from concept
                    development and filming to editing, delivering cinematic and high-quality results. </p>
            </div>
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Graphic Design</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    We offer creative and innovative graphic design services, including <span class="italic"> printing,
                        apparels, branding,
                        logo creation, and social media content</span>. Each design we create is tailored to reflect the
                    unique
                    character and identity of your brand. </p>
            </div>
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Motion Graphic</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    Our motion graphics services include the creation of eye-catching animations designed to enhance
                    interaction and engagement. </p>
            </div>
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Social Media Handling</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    In today's digital era, having a strong presence on social media is essential. We will assist you in
                    managing your content and social media strategies to ensure that your brand is recognized and loved
                    by the right audience.
                </p>
            </div>
            <div
                class="p-4 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 col-span-4 rounded-sm">
                <h2 class="font-bold">
                    Other creative services</h2>
                <p class="py-4 text-sm text-pretty leading-6 text-gray-600">
                    In addition to our main offerings, Kreatifigo provides content creation, website development,
                    workshops, or any other creative solutions to enhance your brand. </p>
            </div>
        </div>
    </div>

    {{-- Portfolio --}}
    <div class="py-8 sm:py-16 mx-8 md:mx-12 xl:mx-64 flex items-center snap-center" id="portfolio">
        <section class="w-full">
            <h2 class="text-balance text-center text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl"> A glimpse
                of our works
            </h2>
            <div class="py-8 max-w-screen-xl">
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 h-full">
                    <div class="col-span-2 sm:col-span-1 md:col-span-2 h-full flex flex-col">
                        <div id="imgContainer"
                            class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow aspect-video">
                            <div id="sliderWrapper" class="flex transition-transform dration-1000 ease-in-out w-full">
                                <!-- Add images to the slider -->
                                <img id="photos1"
                                    src="https://drive.google.com/thumbnail?id=1EQxygybqU4pGFHbqru6PRzZOk4HKkII-&sz=w1000"
                                    alt="Image 1"
                                    class="translate-x-0 z-0 object-top translate-y-0 absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                <img id="photos2"
                                    src="https://drive.google.com/thumbnail?id=1n2hJTGut0LKvTkW4WdgVUMgRkxryJKAo&sz=w1000"
                                    alt="Image 2"
                                    class="translate-x-full object-top absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                <img id="photos3"
                                    src="https://drive.google.com/thumbnail?id=1QSZ_HrRRB3xtobVAeyZ2btTpE_Vepw70&sz=w1000"
                                    alt="Image 3"
                                    class="translate-x-full object-center absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                <img id="photos4"
                                    src="https://drive.google.com/thumbnail?id=1Z2PlhZZIy40LmWPxKE3MxIHVImmF-gEc&sz=w1000"
                                    alt="Image 4"
                                    class="translate-x-full object-center absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                <img id="photos5"
                                    src="https://drive.google.com/thumbnail?id=1xh5sN4LOZg6SZCENz5CNpQJlGoIaBzx5&sz=w1000"
                                    alt="Image 5"
                                    class="translate-x-full object-center absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                <img id="photos6"
                                    src="https://drive.google.com/thumbnail?id=1yJZnB2dTMwy7nRdwVC_Xq8qB9G6J1l7k&sz=w1000"
                                    alt="Image 6"
                                    class="translate-x-full object-top absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                            <h3
                                class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">
                                Photoshoot</h3>
                        </div>
                    </div>
                    <div class="col-span-2 sm:col-span-1 md:col-span-2">
                        <div
                            class="group relative flex flex-col overflow-hidden aspect-video rounded-lg px-4 pb-4 pt-40 mb-4 ">
                            <div id="videoContainer"
                                class="absolute inset-0 aspect-video object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                <iframe id="videoIframe1" width="100%" height="100%"
                                    class="translate-x-0 duration-1000 transition-transform ease-in-out"
                                    style="position: absolute; left: 0px; top: 0px;" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen>
                                </iframe>

                                <iframe id="videoIframe2" width="100%" height="100%"
                                    class="translate-x-full duration-1000 transition-transform ease-in-out"
                                    style="position: absolute; left: 0px; top: 0px;" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen>
                                </iframe>

                                <iframe id="videoIframe3" width="100%" height="100%"
                                    class="translate-x-full duration-1000 transition-transform ease-in-out"
                                    style="position: absolute; left: 0px; top: 0px;" frameborder="0"
                                    allow="autoplay; encrypted-media" allowfullscreen>
                                </iframe>
                            </div>
                            <h3
                                class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">
                                Video</h3>
                        </div>
                        <div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
                            <div class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                <video autoplay loop muted
                                    class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                    <source src={{ asset('assets/motion-1.mp4') }}>
                                </video>
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5">
                                </div>
                                <h3
                                    class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">
                                    Motion</h3>
                            </div>
                            <a href=""
                                class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
                                <div id="sliderWrapper2"
                                    class="flex transition-transform dration-1000 ease-in-out w-full">
                                    <!-- Add images to the slider -->
                                    <img id="design1"
                                        src="https://drive.google.com/thumbnail?id=1gYmchR7Nqf05lAK30QPGgm8V3JvIckUd&sz=w1000"
                                        alt="Image 1"
                                        class="translate-x-0 z-0 object-center translate-y-0 absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                    <img id="design2"
                                        src="https://drive.google.com/thumbnail?id=1OkcSU7kD3Bg_4l3qzZu5mVxea9Ntr_0V&sz=w1000"
                                        alt="Image 2"
                                        class="translate-x-full object-center absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                    <img id="design3"
                                        src="https://drive.google.com/thumbnail?id=176dCoOWO7J2gD_k8o8C-W2UGeGXf8Yg3&sz=w1000"
                                        alt="Image 3"
                                        class="translate-x-full object-center absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                    <img id="design4"
                                        src="https://drive.google.com/thumbnail?id=1Xx4V0L70XE76DMwOoeUqIeopzm2V2dXa&sz=w1000"
                                        alt="Image 4"
                                        class="translate-x-full object-center absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                    <img id="design5"
                                        src="https://drive.google.com/thumbnail?id=1YFfnRO_Sp1YpgRCO3VDwDA9BteFznby6&sz=w1000"
                                        alt="Image 5"
                                        class="translate-x-full object-center absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                                </div>
                                <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5">
                                </div>
                                <h3
                                    class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">
                                    Design</h3>
                            </a>
                        </div>
                    </div>
                    {{-- <div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
                        <div class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
                            <img src="https://developers.elementor.com/docs/assets/img/elementor-placeholder-image.png"
                                alt=""
                                class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
                            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
                            <h3
                                class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">
                                Others</h3>
                        </div>
                    </div> --}}
                </div>

            </div>
            <div class="flex w-full justify-center">
                <a href="https://drive.google.com/file/d/11oBrpwdnGeqLxQytkLpmvHUU2-jnNiM1/view?usp=sharing"
                    class=" transition-colors rounded-full bg-blue px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 animate-pulse">
                    Access portfolio →
                </a>
            </div>
        </section>
    </div>

    {{-- Contact --}}
    <div class="py-8 sm:py-0 sm:pt-16 px-8 md:px-12 xl:px-64 bg-blue" id="contact">
        <div class="grid max-w-7xl gap-x-12 md:gap-y-20 md:grid-cols-2 w-full">

            <div class="w-full flex justify-end">
                <img class="hidden md:flex rounded-xl h-2/3 justify-end"
                    src="{{ asset('assets/stay_connected.png') }}">
            </div>

            <div>
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Stay connected!</h2>
                <ul class="grid-flow-row gap-8 pt-4 text-white">
                    <a href="https://wa.me/message/W56Z3ZD3ZRP4H1?fbclid=PAZXh0bgNhZW0CMTEAAaaTAGSv9A-oWZK_zoxSwfEZGMh5q0tnxNMtgtC6xWVpxiFUwm_Oyjt-jcA_aem_cPu4h7StYvfIqXSpSfVKPA"
                        class="py-2 flex items-center hover:scale-105 transition-color transition-transfrom ease-in-out duration-500">
                        <div class="w-6 h-6 mr-2 "><svg fill="currentColor" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <path
                                        d="M11.42 9.49c-.19-.09-1.1-.54-1.27-.61s-.29-.09-.42.1-.48.6-.59.73-.21.14-.4 0a5.13 5.13 0 0 1-1.49-.92 5.25 5.25 0 0 1-1-1.29c-.11-.18 0-.28.08-.38s.18-.21.28-.32a1.39 1.39 0 0 0 .18-.31.38.38 0 0 0 0-.33c0-.09-.42-1-.58-1.37s-.3-.32-.41-.32h-.4a.72.72 0 0 0-.5.23 2.1 2.1 0 0 0-.65 1.55A3.59 3.59 0 0 0 5 8.2 8.32 8.32 0 0 0 8.19 11c.44.19.78.3 1.05.39a2.53 2.53 0 0 0 1.17.07 1.93 1.93 0 0 0 1.26-.88 1.67 1.67 0 0 0 .11-.88c-.05-.07-.17-.12-.36-.21z">
                                    </path>
                                    <path
                                        d="M13.29 2.68A7.36 7.36 0 0 0 8 .5a7.44 7.44 0 0 0-6.41 11.15l-1 3.85 3.94-1a7.4 7.4 0 0 0 3.55.9H8a7.44 7.44 0 0 0 5.29-12.72zM8 14.12a6.12 6.12 0 0 1-3.15-.87l-.22-.13-2.34.61.62-2.28-.14-.23a6.18 6.18 0 0 1 9.6-7.65 6.12 6.12 0 0 1 1.81 4.37A6.19 6.19 0 0 1 8 14.12z">
                                    </path>
                                </g>
                            </svg></div>
                        <p>+62 819 9080 3545</p>
                    </a>
                    <a href="https://instagram.com/kreatifigo"
                        class="py-2 flex items-center  hover:scale-105 transition-color transition-transfrom ease-in-out duration-500">
                        <div class="w-6 h-6 mr-2 "><svg viewBox="0 0 20 20" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview"
                                            transform="translate(-340.000000, -7439.000000)" fill="currentColor">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792"
                                                    id="instagram-[#167]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg> </div>
                        <p>@kreatifigo</p>
                    </a>
                    <li href=""
                        class="py-2 flex items-center  hover:scale-105 transition-color transition-transfrom ease-in-out duration-500">
                        <div class="w-6 h-6 mr-2 "><svg viewBox="0 -2.5 20 20" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                fill="#000000">
                                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                <g id="SVGRepo_iconCarrier">
                                    <title>email [#1573]</title>
                                    <desc>Created with Sketch.</desc>
                                    <defs> </defs>
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Dribbble-Light-Preview" transform="translate(-300.000000, -922.000000)"
                                            fill="currentColor">
                                            <g id="icons" transform="translate(56.000000, 160.000000)">
                                                <path
                                                    d="M262,764.291 L254,771.318 L246,764.281 L246,764 L262,764 L262,764.291 Z M246,775 L246,766.945 L254,773.98 L262,766.953 L262,775 L246,775 Z M244,777 L264,777 L264,762 L244,762 L244,777 Z"
                                                    id="email-[#1573]"> </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg></div>
                        <p>kreatifigo.production@gmail.com</p>
                    </li>
                </ul>
            </div>


        </div>
    </div>

    <script>
        // Array of Google Drive embed video URLs
        const videoUrls = [
            "https://drive.google.com/file/d/1wvBG14VjFZkxaQbg7ZXAXNURSWu5F7_Q/preview",
            "https://drive.google.com/file/d/1vBX0YchqFYTz3WEaJvkxvU7fXT01ppoF/preview",
            "https://drive.google.com/file/d/1xz9Ciq0Em4tqt_ovboQxq04R5VI_czoi/preview"
        ];

        let currentImgIndex = 0;
        const totalSlides = document.querySelectorAll('#sliderWrapper img').length;

        const photos = [
            document.getElementById('photos1'),
            document.getElementById('photos2'),
            document.getElementById('photos3'),
            document.getElementById('photos4'),
            document.getElementById('photos5'),
            document.getElementById('photos6')
        ];

        function cyclePhotos() {
            setInterval(() => {
                // Determine the previous and next index
                const previousImgIndex = currentImgIndex;
                currentImgIndex = (currentImgIndex + 1) % totalSlides;
                const nextImgIndex = (currentImgIndex + 1) % totalSlides;

                // Slide out the previous iframe
                photos[previousImgIndex].classList.remove('translate-x-0', 'z-0');
                photos[previousImgIndex].classList.add('-translate-x-full', '-z-10');

                // Slide in the current iframe
                photos[currentImgIndex].classList.remove('translate-x-full', '-z-10');
                photos[currentImgIndex].classList.add('translate-x-0', 'z-0');

                // Prepare the next iframe to the right for the next cycle
                photos[nextImgIndex].classList.remove('-translate-x-full', '-z-10');
                photos[nextImgIndex].classList.add('translate-x-full', '-z-10');
            }, 3000);
        }

        let currentIndex = 0;
        let sliderInterval;
        let sliderPaused = false;

        const iframes = [
            document.getElementById('videoIframe1'),
            document.getElementById('videoIframe2'),
            document.getElementById('videoIframe3')
        ];

        // Function to load the video in the iframe
        function loadVideo(index, url) {
            iframes[index].src = url;
        }

        let currentDesignIndex = 0;
        const totalDesignSlides = document.querySelectorAll('#sliderWrapper2 img').length;

        const design = [
            document.getElementById('design1'),
            document.getElementById('design2'),
            document.getElementById('design3'),
            document.getElementById('design4'),
            document.getElementById('design5'),
        ];

        function cycleDesign() {
            setInterval(() => {
                // Determine the previous and next index
                const previousDesignIndex = currentDesignIndex;
                currentDesignIndex = (currentDesignIndex + 1) % totalDesignSlides;
                const nextDesignIndex = (currentDesignIndex + 1) % totalDesignSlides;

                // Slide out the previous iframe
                design[previousDesignIndex].classList.remove('translate-x-0', 'z-0');
                design[previousDesignIndex].classList.add('-translate-x-full', '-z-10');

                // Slide in the current iframe
                design[currentDesignIndex].classList.remove('translate-x-full', '-z-10');
                design[currentDesignIndex].classList.add('translate-x-0', 'z-0');

                // Prepare the next iframe to the right for the next cycle
                design[nextDesignIndex].classList.remove('-translate-x-full', '-z-10');
                design[nextDesignIndex].classList.add('translate-x-full', '-z-10');
            }, 4000);
        }

        // Initialize the slider
        function initializeSlider() {
            // Load the first video in the first iframe
            loadVideo(0, videoUrls[0]);
            // Preload the second and third videos in their respective iframes
            loadVideo(1, videoUrls[1]);
            loadVideo(2, videoUrls[2]);

            // Start the automatic sliding after the initial load
            cyclePhotos();
            cycleDesign();
            cycleVideos();
        }

        // Function to cycle through the videos
        function cycleVideos() {
            sliderInterval = setInterval(() => {
                // Determine the previous and next index
                const previousIndex = currentIndex;
                currentIndex = (currentIndex + 1) % videoUrls.length;
                const nextIndex = (currentIndex + 1) % videoUrls.length;

                // Slide out the previous iframe
                iframes[previousIndex].classList.remove('translate-x-0');
                iframes[previousIndex].classList.add('-translate-x-full');

                // Slide in the current iframe
                iframes[currentIndex].classList.remove('translate-x-full');
                iframes[currentIndex].classList.add('translate-x-0');

                // Prepare the next iframe to the right for the next cycle
                iframes[nextIndex].classList.remove('-translate-x-full');
                iframes[nextIndex].classList.add('translate-x-full');
            }, 5000);
        }

        function stopSlider() {
            clearInterval(sliderInterval);
        }

        function toggleSlider() {
            if (sliderPaused) {
                cycleVideos();
                sliderPaused = false;
            } else {
                stopSlider();
                sliderPaused = true;
            }
        }

        // Run the slider
        initializeSlider();
    </script>
</x-guest-layout>
