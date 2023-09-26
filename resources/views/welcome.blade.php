<x-guest-layout>
    <section class="w-full  ">
        <div class=" relative z-0">
            <div class="p-8 flex justify-center items-center bg-[#E8DFCA]/75  w-full" style="height:50vh;"></div>
            <div class="p-8 flex justify-center items-center  bg-[#F5EFE6]/50 w-full" style="height:40vh;"></div>
            <div
                class="max-w-md bg-[#E8DFCA] p-8 shadow-md absolute top-1/2 left-1/2 transform lg:translate-x-10 -translate-x-1/2 -translate-y-1/2 z-20 w-full">
                <div class="mr-auto place-self-center xs:col-span-12 sm:p-8 lg:col-span-7 lg:p-0 w-full ">
                    <h1 class="sm:w-full uppercase">
                        <p class="text-[#272c31] tracking-wide text-xl leading-snug font-bold mb-2">
                            Whatever you're
                            planning,
                        </p>
                        <p tabindex="0" class="text-[#7895B2] text-4xl lg:text-[40px] font-black mb-8"
                            style="font-family: 'Spectral', serif; ">make it
                            extraordinary</p>
                        <p class="text-base leading-normal text-[#1F1717] mt-4 sm:mt-5 sm:w-5/1 normal-case mb-4 ">
                            “Making every moment memorable - with our events!”</p>
                    </h1>
                    <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                        <a href="/login"
                            class="rounded bg-[#7895B2] hover:bg-[#7895B2]/75 inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-black/80 focus:ring-4 focus:ring-primary-300 w-full ">
                            Get started
                        </a>
                    </div>
                </div>
            </div>
            <div class="">
                @foreach ($categories->shuffle() as $category)
                    <img src="{{ $category->firstImg() ? asset('storage/' . $category->firstImg()) : 'images/holder.jpg' }}"
                        class="md:block hidden sm:hidden aspect-square max-w-2xl absolute top-1/2 left-1/2 transform -translate-x-3/4 -translate-y-1/2 z-10 w-full object-cover object-center"
                        alt="hero-section" loading="lazy" />
                @endforeach
            </div>
        </div>
    </section>
    <section class=" lg:my-24 w-full">
        <div class=" justify-between text-2xl text-[#7895B2] flex lg:hidden pt-12 px-4 ">
            <div class="uppercase tracking-widest font-extrabold ">
                Featured</div>
            <a href="/featured" class="p-2 text-center text-base text-[#7895B2] uppercase">See All</a>
        </div>
        <div class="relative w-[80%] mx-auto ">
            <div id="owl-carousel1" class="owl-carousel owl-theme p-0 relative">
                @foreach ($categories as $category)
                    <a href="{{ $category->gigs->count() ? route('show.supplier-gig', ['user' => optional($category->firstGig())->user_id, 'gig' => optional($category->firstGig())->id]) : '#' }}"
                        class="href">
                        <div class="flex p-2 flex-col">
                            <img class="aspect-square object-cover bg-no-repeat bg-center h-auto max-w-sm rounded-lg shadow-none transition-shadow duration-300 ease-in-out hover:shadow-lg hover:shadow-black/30 "
                                src="{{ $category->firstImg() ? asset('storage/' . $category->firstImg()) : 'images/holder.jpg' }}"
                                alt="featured" loading="lazy">
                        </div>
                    </a>
                @endforeach
            </div>

            <a
                class="z-40 prev flex items-center justify-center h-10 w-10 bg-[#7895B2] hover:bg-[#324d68] rounded-full opacity-100 shadow-md cursor-pointer absolute left-[8px] top-1/2 transform -translate-y-1/2 -translate-x-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-left">
                    <polyline points="15 18 9 12 15 6"></polyline>
                </svg>
            </a>
            <a
                class="z-40 next flex items-center justify-center h-10 w-10 bg-[#7895B2] hover:bg-[#324d68] rounded-full opacity-100 shadow-md cursor-pointer absolute right-[8px] top-1/2 transform -translate-y-1/2 translate-x-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </a>

        </div>

    </section>

    <section class="lg:bg-[#E8DFCA]  sm:bg-white/75 w-full">

        <h2
            class="mb-4 justify-between lg:pl-8 text-2xl text-[#7895B2] flex uppercase font-extrabold tracking-widest lg:justify-center lg:pt-16 lg:text-4xl px-4">
            Category
        </h2>
        <div class="">
            <div id="owl-carousel2" class="owl-carousel owl-theme lg:container lg:mx-auto p-2">
                @foreach ($categories as $category)
                    <div class="group relative">
                        <a href="{{ route('show.category', $category) }}"
                            class="h-auto max-w-lg cursor-pointer rounded-lg filter transition-all duration-300 hover:opacity-75 ">
                            <img class="mb-4 aspect-square h-full object-cover "
                                src={{ $category->firstImg() ? asset('storage/' . $category->firstImg()) : 'images/holder.jpg' }}
                                alt="category">
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black">
                            </div>
                            <div class="absolute inset-0 bottom-0 flex items-end justify-center">
                                <p class="mb-3 whitespace-pre-line font-bold text-[#FAF4F4] sm:text-3xl lg:text-lg">
                                    {{ $category->name }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

    </section>
    {{-- </div> --}}

    {{-- <section class="lg:p-8">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-2 md:grid-cols-2">
                <div class="flex items-center bg-[#E8DFCA] p-4 md:p-8" data-aos="fade-right" data-aos-duration="2000">
                    <div>
                        <div class="">
                            <h1 class="text-left text-2xl font-bold md:text-3xl mb-8 uppercase tracking-widest">Unique</h1>
                            <h2 class="text-left text-base md:text-lg">Make your next event truly one-of-a-kind and
                                unforgettable by partnering with our event management team, which offers a unique
                                approach
                                that is customized to meet your specific needs and goals.
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="flex cursor-pointer items-center overflow-hidden">
                    <img class="h-auto w-full object-cover transition duration-300 ease-in-out hover:rotate-3 hover:scale-110 md:h-full"
                        src="https://images.unsplash.com/photo-1510924199351-4e9d94df18a6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1474&q=80"
                        alt="">
                </div>

                <div class="flex cursor-pointer items-center overflow-hidden">
                    <img class="h-auto w-full object-cover transition duration-300 ease-in-out hover:rotate-3 hover:scale-110 md:h-full"
                        src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1469&q=80"
                        alt="">
                </div>

                <div class="flex items-center bg-[#7895B2] p-4 md:p-8" data-aos="fade-left" data-aos-duration="2000">
                    <div>
                        <div class="">
                            <h1 class="text-left text-3xl font-bold md:text-4xl mb-8 uppercase tracking-widest">Reliable</h1>
                            <h2 class="text-left text-base md:text-lg">Trust us to deliver reliable events for all your
                                special moments. From weddings to corporate events, we handle every detail to ensure an
                                exceptional experience that exceeds your expectations.</h2>
                        </div>
                    </div>
                </div>

                <div class="flex items-center bg-[#E8DFCA] p-4 md:p-8" data-aos="fade-right"
                    data-aos-duration="2000">

                    <div>
                        <div class="">
                            <h1 class="text-left text-3xl font-bold md:text-4xl mb-8 uppercase tracking-widest">All In One</h1>
                            <h2 class="text-left text-base md:text-lg">Our all-in-one event planning services take care
                                of
                                every detail, making it effortless for you to plan your next event. Let us handle
                                everything
                                from venue selection to entertainment and transportation, while you sit back and enjoy
                                the
                                event.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="flex cursor-pointer items-center overflow-hidden">
                    <img class="w-full object-cover transition duration-300 ease-in-out hover:rotate-3 hover:scale-110 md:h-full"
                        src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="">
                </div>
            </div>
        </section> --}}

    <section class="lg:p-8 w-full">
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="flex items-center p-4 md:p-8 aos-disabled" data-aos="fade-right" data-aos-duration="2000">
                    <div>
                        <div class="">
                            <h1
                                class="text-left text-2xl font-bold md:text-3xl mb-8 uppercase tracking-widest text-[#E8DFCA]">
                                Unique</h1>
                            <h2 class="text-left text-base md:text-lg text-[#8b7949]"
                                style="font-family: 'Montserrat', sans-serif;">Make your next event truly
                                one-of-a-kind and
                                unforgettable by partnering with our event management team, which offers a unique
                                approach
                                that is customized to meet your specific needs and goals.
                            </h2>
                        </div>
                    </div>
                </div>

                <div class="flex cursor-pointer items-center overflow-hidden border-[20px] border-[#E8DFCA]">
                    <img class="h-auto w-full object-cover transition duration-300 ease-in-out hover:rotate-3 hover:scale-110 md:h-full"
                        src="images/pic1.jpg" alt="pic1" loading="lazy">
                </div>
            </div>
            <hr class="my-8 w-full md:mt-12 md:mb-8 lg:mt-10 px-2">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div
                    class="flex cursor-pointer items-center overflow-hidden border-[20px] border-[#7895B2] lg:order-none order-last">
                    <img class="h-auto w-full object-cover transition duration-300 ease-in-out hover:rotate-3 hover:scale-110 md:h-full"
                        src="images/pic2.jpg" alt="pic2" loading="lazy">
                </div>

                <div class="flex items-center p-4 md:p-8 aos-disabled" data-aos="fade-left" data-aos-duration="2000">
                    <div>
                        <div class="">
                            <h1
                                class="text-left text-3xl font-bold md:text-4xl mb-8 uppercase tracking-widest text-[#7895B2]">
                                Reliable</h1>
                            <h2 class="text-left text-base md:text-lg text-[#324d68]"
                                style="font-family: 'Montserrat', sans-serif;">Trust us to deliver reliable
                                events
                                for all your
                                special moments. From weddings to corporate events, we handle every detail to ensure an
                                exceptional experience that exceeds your expectations.</h2>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-8 w-full md:mt-12 md:mb-8 lg:mt-10 px-2">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="flex items-center p-4 md:p-8 aos-disabled" data-aos="fade-right"
                    data-aos-duration="2000">
                    <div>
                        <div class="">
                            <h1
                                class="text-left text-3xl font-bold md:text-4xl mb-8 uppercase tracking-widest text-[#E8DFCA]">
                                All In One</h1>
                            <h2 class="text-left text-base md:text-lg text-[#8b7949]"
                                style="font-family: 'Montserrat', sans-serif;">Our all-in-one event planning
                                services
                                take care
                                of
                                every detail, making it effortless for you to plan your next event. Let us handle
                                everything
                                from venue selection to entertainment and transportation, while you sit back and enjoy
                                the
                                event.
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="flex cursor-pointer items-center overflow-hidden border-[20px] border-[#E8DFCA]">
                    <img class="w-full object-cover transition duration-300 ease-in-out hover:rotate-3 hover:scale-110 md:h-full"
                        src="images/pic3.jpg" alt="pic3" loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <section class="w-full">

        <h2
            class="justify-between lg:pl-8 px-4 text-2xl text-[#7895B2] flex uppercase font-extrabold tracking-widest lg:justify-center lg:pt-24 py-4 lg:text-4xl">
            Top Supplier
        </h2>

        <div id="owl-carousel3" class="owl-carousel owl-theme grid grid-cols-1 p-0">
            @foreach ($suppliers->take(5) as $supplier)
                <a href="{{ route('show.profile', $supplier) }}" class="href">
                    <div class="flex scale-75 flex-col overflow-hidden ">
                        <img class="h-96 w-full object-cover transition duration-300 ease-in-out hover:scale-105"
                            src="{{ asset('storage/' . $supplier->avatar) ?? 'https://images.unsplash.com/photo-1627564174704-4c3765ef733a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80' }}"
                            alt={{ $supplier->business_name }} loading="lazy">
                        <div class="flex justify-between bg-[#E8DFCA] p-8">
                            <div class="text-sm normal-case whitespace-normal font-bold">{{ $supplier->business_name }}
                            </div>

                            <div class="flex items-center justify-center">
                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                    class="w-4 text-yellow-300" role="img" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                    </path>
                                </svg>
                                <p class="ml-2 text-sm font-bold text-gray-900 ">
                                    {{ $supplier->ratings }}</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </section>

    {{-- <section>
            <section class="bg-white ">
                <div class="mx-auto max-w-screen-xl py-8 px-4 lg:py-16 lg:px-6">
                    <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
                        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 ">OwlEvent
                            Premium</h2>
                        <p class="mb-5 font-light text-gray-500  sm:text-xl">By upgrading to our
                            premium
                            subscription, you'll gain access to a wealth of exclusive features and benefits that will
                            enhance your overall experience with our product/service.

                        </p>
                    </div>
                    <div class="space-y-8 sm:gap-6 lg:grid lg:grid-cols-3 lg:space-y-0 xl:gap-10">
                        <!-- Pricing Card -->
                        <div class="mx-auto flex max-w-lg flex-col rounded-lg border-2 border-yellow-900 bg-transparent p-6 text-center text-gray-900 drop-shadow-2xl"
                            data-aos="fade-down-right" data-aos-duration="2000">
                            <h3 class="mb-4 text-2xl font-semibold text-yellow-900">Bronze</h3>
                            <p class="font-light text-gray-500  sm:text-lg">Our Bronze Package offers
                                the
                                perfect balance of affordability and functionality. </p>
                            <div class="my-8 flex items-baseline justify-center">
                                <span class="mr-2 text-5xl font-extrabold text-yellow-900">$29</span>
                                <span class="text-gray-500 ">/month</span>
                            </div>
                            <!-- List -->
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Photos: <span class="font-semibold">5</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Videos: <span class="font-semibold">1</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Show Social Media: <span class="font-semibold">1</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Schedule Meeting to Supplier</span>
                                </li>
                            </ul>
                            <a href="#"
                                class="rounded-lg border bg-yellow-900 px-8 py-2 text-center text-sm font-medium text-white hover:bg-yellow-800 focus:ring-4 focus:ring-[#7895B2]">Get
                                started</a>
                        </div>
                        <!-- Pricing Card -->
                        <div
                            class="mx-auto flex max-w-lg flex-col rounded-lg border-2 border-stone-400 bg-transparent p-6 text-center text-gray-900 drop-shadow-2xl">
                            <h3 class="mb-4 text-2xl font-semibold text-stone-400">Silver</h3>
                            <p class="font-light text-gray-500 sm:text-lg">Our Silver Package is
                                designed for those who want a little bit more. </p>
                            <div class="my-8 flex items-baseline justify-center">
                                <span class="mr-2 text-5xl font-extrabold text-stone-400">$99</span>
                                <span class="text-gray-500 " >/month</span>
                            </div>
                            <!-- List -->
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Photos: <span class="font-semibold">10</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Videos: <span class="font-semibold">5</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Show Social Media: <span class="font-semibold"></span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Schedule Meeting to Supplier</span>
                                </li>

                            </ul>
                            <a href="#"
                                class="rounded-lg border bg-stone-400 px-8 py-2 text-center text-sm font-medium text-white hover:bg-stone-500 focus:ring-4 focus:ring-[#7895B2]">Get
                                started</a>
                        </div>
                        <!-- Pricing Card -->
                        <div class="mx-auto flex max-w-lg flex-col rounded-lg border-2 border-yellow-300 bg-transparent p-6 text-center text-gray-900 drop-shadow-2xl"
                            data-aos="fade-down-left" data-aos-duration="2000">
                            <h3 class="mb-4 text-2xl font-semibold text-yellow-300">Gold</h3>
                            <p class="font-light text-gray-500 sm:text-lg">Our Gold Package is the
                                ultimate premium experience.</p>
                            <div class="my-8 flex items-baseline justify-center">
                                <span class="mr-2 text-5xl font-extrabold text-yellow-300">$499</span>
                                <span class="text-gray-500 ">/month</span>
                            </div>
                            <!-- List -->
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Photos: <span class="font-semibold">Unlimited</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Videos: <span class="font-semibold">Unlimited</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Show Social Media: <span class="font-semibold"></span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 "
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Schedule Meeting to Supplier</span>
                                </li>

                            </ul>
                            <a href="#"
                                class="rounded-lg border bg-yellow-300 px-8 py-2 text-center text-sm font-medium text-white hover:bg-yellow-400 focus:ring-4 focus:ring-[#7895B2]">Get
                                started</a>
                        </div>
                    </div>
                </div>
            </section>
        </section> --}}



    <section class="mb-4">
        <div
            class="py-8 px-4 mx-auto max-w-screen-2xl  sm:py-16 lg:px-6 w-full bg-cover bg-center h-auto text-justify  object-fill lg:rounded-t-lg bg-[#E8DFCA]/75   ">
            <div class="max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-[#291f1f]">Come and Join Us!
                </h2>
                <p class="mb-8 font-light text-gray-500 sm:text-xl">Are you a business owner looking
                    to expand your
                    reach and increase your sales? Look no
                    further than our website! By creating an account and becoming a supplier on our
                    platform,
                    you'll gain access to a vast network of potential customers who are eager to purchase
                    your
                    products or services.</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
                    <a href="#"
                        class="inline-flex items-center justify-center px-4 py-2.5 text-base font-medium text-center text-black/75 rounded-lg  focus:ring-4 focus:ring-primary-300 bg-[#7895B2] hover:bg-[#7895B2]/75">
                        Get started
                    </a>
                </div>
            </div>
        </div>
    </section>




</x-guest-layout>
<script>
    $(document).ready(function() {

        // Initialize first carousel
        var owlCarousel1 = $('#owl-carousel1');
        owlCarousel1.owlCarousel({
            dots: false,
            rtl: false,
            loop: true,
            margin: 30,
            responsive: {
                0: {
                    items: 1,

                },
                640: {
                    items: 1,

                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 4

                }
            }
        });

        // Add next and previous button functionality
        $(".next").click(function() {
            owlCarousel1.trigger('next.owl.carousel');
        });

        $(".prev").click(function() {
            owlCarousel1.trigger('prev.owl.carousel');
        });

        // Initialize second carousel
        $('#owl-carousel2').owlCarousel({
            nav: true,
            loop: true,
            rtl: true,
            margin: 30,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 50
                },
                640: {
                    items: 1,
                    stagePadding: 100
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5,
                    stagePadding: 100
                }
            }
        });

        // Initialize second carousel
        $('#owl-carousel3').owlCarousel({
            loop: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 50
                },
                640: {
                    items: 1,
                    stagePadding: 100
                },
                768: {
                    items: 2
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });

    });
</script>
<script>
    const isMobile = window.matchMedia("(max-width: 768px)").matches;


    if (isMobile) {
        const elementsWithAosDisabled = document.querySelectorAll('.aos-disabled[data-aos]');
        elementsWithAosDisabled.forEach(element => {
            element.removeAttribute('data-aos');
        });
    }
</script>
