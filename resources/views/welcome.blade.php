<x-guest-layout>
    <section class="bg-[#F5EFE6]/75" data-aos="zoom-in" data-aos-duration="1500">
        <div class="mx-auto grid max-w-screen-xl px-4 xs:grid xs:place-content-center lg:grid-cols-12 lg:gap-8 xl:gap-0">
            <div class="flex-col xs:col-span-12 sm:flex md:flex-row lg:col-span-5 lg:mt-0">
                <div id="carouselSlide" class="relative sm:hidden lg:flex" data-te-carousel-init data-te-carousel-slide>
                    <div class="relative overflow-hidden pt-36 after:clear-both after:block after:content-['']">
                        <div class="relative float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item data-te-carousel-active>
                            <img class="hidden object-cover sm:hidden md:block"
                                style="height:600px; width:500px; top:-59px; left:87px;"
                                src="{{ url('storage/2/photographer.png') }}" />
                        </div>
                        <div class="relative float-left -mr-[100%] hidden max-w-lg transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item>
                            <img class="hidden object-cover sm:hidden md:block"
                                style="height:600px; width:500px; top:-59px; left:87px;"
                                src="{{ url('storage/2/photographer.png') }}" />
                        </div>
                        <div class="relative float-left -mr-[100%] hidden w-full max-w-lg transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                            data-te-carousel-item>
                            <img class="hidden object-cover sm:hidden md:block"
                                style="height:600px; width:500px; top:-59px; left:87px;"
                                src="{{ url('storage/2/wedding.png') }}" />
                        </div>
                    </div>
                </div>
            </div>


            <div class="mr-auto place-self-center xs:col-span-12 sm:p-8 lg:col-span-7 lg:p-0">

                {{-- <h1 class=" font-bold tracking-wider uppercase text-gray-800 sm:w-full leading-8 "
                    style="font-family: 'Rubik One';">
                    <span class="font-extrabold py-2 text-4xl sm:text-5xl lg:text-6xl"> Whatever you’re<br> <span
                            class="text-[#7895b2]">
                            planning,</span>
                    </span><span
                        class="font-extrabold tracking-wider text-gray-800 py-2 text-4xl sm:text-5xl lg:text-6xl">
                        make
                        it
                        <br><span class="text-[#7895b2]">extraordinary</span></span>
                </h1> --}}
                <h1 class="sm:w-full uppercase leading-8">
                    <p class="text-black/75 tracking-wider font-bold text-5xl"
                        style="font-family: 'Rubik Mono One', sans-serif; ">
                        Whatever you're
                        planning,
                    </p>
                    <p class="text-[#7895B2] font-extrabold tracking-widest text-3xl">make it extraordinary</p>
                    <p class="text-base leading-normal text-gray-800 mt-4 sm:mt-5 sm:w-5/1 normal-case ">
                        “Making every moment memorable - with our events!”</p>
                </h1>

            </div>
        </div>

    </section>
    <div class="sm:static lg:relative" data-aos="fade-up" data-aos-duration="1500">
        <div class="container inset-x-0 -top-14 mx-auto max-w-7xl rounded-lg sm:static lg:absolute">
            <section
                class="sm:rounded-0 container mx-auto w-full bg-[#F5EFE6] py-4 sm:max-w-screen-sm lg:max-w-screen-xl lg:rounded-2xl lg:p-8">
                <div class="grid items-end gap-6 px-2.5 md:grid-cols-4">
                    <div class="relative z-0">
                        <select type="" id="default_standard"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-black focus:border-gray-300 focus:outline-none focus:ring-0"
                            placeholder=" ">
                            <option class="text-black" value="">Type of Event</option>
                            <option class="text-black" value="">Wedding</option>
                            <option class="text-black" value="">Debut</option>
                            <option class="text-black" value="">Birthday</option>
                        </select>
                        <label for="default_standard"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-base text-black duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75">
                            Event</label>
                    </div>
                    <div class="relative z-0">
                        <input type="text" id="default_standard"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-gray-900 focus:border-gray-300 focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label for="default_standard"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-base text-black duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-black">
                            Location / Venues</label>
                    </div>
                    <div class="relative z-0">
                        <input type="date" id="default_standard"
                            class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-black focus:border-gray-300 focus:outline-none focus:ring-0"
                            placeholder=" " />
                        <label for="default_standard"
                            class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-base text-black duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-black">
                            Date</label>
                    </div>
                    <div class="relative z-0">
                        <button
                            class="rounded-lg border border-[#7895B2] bg-[#7895B2] p-4 text-sm font-medium text-white shadow-2xl hover:bg-[#AEBDCA] hover:text-black focus:z-10 focus:outline-none focus:ring-4 focus:ring-[#AEBDCA] sm:w-full md:px-10 lg:px-24">
                            Search
                        </button>


                    </div>
                </div>
        </div>
        </section>
        <section class="sm:bg-white sm:pt-12 lg:pt-28 lg:bg-[#E8DFCA] ">
            <div class="container mx-auto mb-4 justify-between pl-4 text-2xl text-black sm:flex lg:hidden">
                <div class="uppercase tracking-widest mb-4 pl-4 font-extrabold">
                    Featured</div>
                <a href="/featured" class="p-2 text-center text-base text-[#7895B2] uppercase">See All</a>
            </div>
            <div id="owl-carousel1" class="owl-carousel owl-theme p-0">
                @foreach ($categories as $category)
                    <a href="{{ $category->gigs->count() ? route('show.supplier-gig', ['user' => optional($category->firstGig())->user_id, 'gig' => optional($category->firstGig())->id]) : '#' }}"
                        class="href">
                        <div class="flex scale-75 flex-col">
                            <img class="h-96 w-full rounded-3xl object-cover object-center"
                                src="{{ $category->firstImg() ? asset('storage/' . $category->firstImg()) : 'https://images.unsplash.com/photo-1682232860597-9e16a4972602?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80' }}"
                                alt="">
                        </div>
                    </a>
                @endforeach
            </div>
        </section>

        <section class="">
            <h2
                class="container uppercase  mx-auto mb-4 pl-4 font-extrabold tracking-widest text-gray-900 sm:flex sm:justify-between sm:pt-12 sm:text-2xl lg:flex lg:justify-center lg:pt-36 lg:text-4xl">
                Category
            </h2>

            <div class="">
                <div id="owl-carousel2" class="owl-carousel owl-theme container mx-auto sm:p-8 lg:p-2">
                    @foreach ($categories as $category)
                        <div class="group relative">
                            <a href="{{ route('show.category', $category) }}"
                                class="h-auto max-w-lg cursor-pointer rounded-lg filter transition-all duration-300 hover:opacity-75">
                                <img class="mb-4 aspect-square h-full rounded-lg object-cover"
                                    src={{ $category->firstImg() ? asset('storage/' . $category->firstImg()) : 'https://images.unsplash.com/photo-1682232860597-9e16a4972602?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80' }}>
                                <div
                                    class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black">
                                </div>
                                <div class="absolute inset-0 bottom-0 flex items-end justify-center">
                                    <p class="mb-3 whitespace-pre-line font-bold text-white sm:text-3xl lg:text-lg">
                                        {{ $category->name }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        {{-- </div> --}}

        <section class="p-8">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-2 md:grid-cols-2">
                <div class="flex items-center bg-[#E8DFCA] p-4 md:p-8" data-aos="fade-right" data-aos-duration="2000">
                    <div>
                        <div class="">
                            <h1 class="text-left text-2xl font-bold md:text-3xl">Unique</h1>
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
                            <h1 class="text-left text-3xl font-bold md:text-4xl">Reliable</h1>
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
                            <h1 class="text-left text-3xl font-bold md:text-4xl">All In One</h1>
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
        </section>


        <section>

            <h2
                class="container mx-auto mb-4 pl-4 font-extrabold tracking-tight text-gray-900 sm:flex sm:justify-between sm:pt-12 sm:text-2xl lg:flex lg:justify-center lg:pt-36 lg:text-4xl">
                Top Supplier
            </h2>
            <div id="owl-carousel3" class="owl-carousel owl-theme grid grid-cols-1 bg-[#E8DFCA] p-8">
                @foreach ($suppliers->take(5) as $supplier)
                    <a href="{{ route('show.profile', $supplier) }}" class="href">
                        <div class="flex scale-75 flex-col duration-300 ease-in-out hover:scale-100">
                            <img class="h-96 w-full rounded-t-3xl object-cover"
                                src="{{ asset('storage/' . $supplier->avatar) ?? 'https://images.unsplash.com/photo-1627564174704-4c3765ef733a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80' }}"
                                alt="">
                            <div class="flex justify-between rounded-b-3xl bg-white p-4">
                                <div class="text-base font-bold">{{ $supplier->business_name }}</div>

                                <div class="flex items-center justify-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-300" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                    <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">
                                        {{ $supplier->ratings }}</p>
                                </div>

                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

        </section>

        <section>
            <section class="bg-white dark:bg-gray-900">
                <div class="mx-auto max-w-screen-xl py-8 px-4 lg:py-16 lg:px-6">
                    <div class="mx-auto mb-8 max-w-screen-md text-center lg:mb-12">
                        <h2 class="mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white">OwlEvent
                            Premium</h2>
                        <p class="mb-5 font-light text-gray-500 dark:text-gray-400 sm:text-xl">By upgrading to our
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
                            <p class="font-light text-gray-500 dark:text-gray-400 sm:text-lg">Our Bronze Package offers
                                the
                                perfect balance of affordability and functionality. </p>
                            <div class="my-8 flex items-baseline justify-center">
                                <span class="mr-2 text-5xl font-extrabold text-yellow-900">$29</span>
                                <span class="text-gray-500 dark:text-gray-400">/month</span>
                            </div>
                            <!-- List -->
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Photos: <span class="font-semibold">5</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Videos: <span class="font-semibold">1</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Show Social Media: <span class="font-semibold">1</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
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
                            <p class="font-light text-gray-500 dark:text-gray-400 sm:text-lg">Our Silver Package is
                                designed for those who want a little bit more. </p>
                            <div class="my-8 flex items-baseline justify-center">
                                <span class="mr-2 text-5xl font-extrabold text-stone-400">$99</span>
                                <span class="text-gray-500 dark:text-gray-400" dark:text-gray-400>/month</span>
                            </div>
                            <!-- List -->
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Photos: <span class="font-semibold">10</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Videos: <span class="font-semibold">5</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Show Social Media: <span class="font-semibold"></span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
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
                            <p class="font-light text-gray-500 dark:text-gray-400 sm:text-lg">Our Gold Package is the
                                ultimate premium experience.</p>
                            <div class="my-8 flex items-baseline justify-center">
                                <span class="mr-2 text-5xl font-extrabold text-yellow-300">$499</span>
                                <span class="text-gray-500 dark:text-gray-400">/month</span>
                            </div>
                            <!-- List -->
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Photos: <span class="font-semibold">Unlimited</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Upload Videos: <span class="font-semibold">Unlimited</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Show Social Media: <span class="font-semibold"></span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="h-5 w-5 flex-shrink-0 text-green-500 dark:text-green-400"
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
        </section>
        <section class="sm:hidden lg:flex">
            <div class="px-4 py-9 2xl:container md:px-20 md:py-12 2xl:mx-auto">
                <div class="relative rounded-md bg-gradient-to-r from-[#AEBDCA] to-[#F5EFE6]">

                    <div
                        class="relative top-0 z-20 flex h-full w-full flex-col justify-between rounded-md p-6 text-xl md:p-16">
                        <div>
                            <h1
                                class="w-64 text-3xl font-bold leading-9 text-black sm:w-auto md:text-5xl md:leading-10">
                                Come and Join us!</h1>
                            <p class="mt-4 text-lg leading-6 text-black/75 md:w-10/12 lg:w-8/12 xl:w-5/12 2xl:pr-12">
                                Are you a business owner looking to expand your reach and increase your sales? Look no
                                further than our website! By creating an account and becoming a supplier on our
                                platform,
                                you'll gain access to a vast network of potential customers who are eager to purchase
                                your
                                products or services.</p>
                        </div>
                        <div class="mt-20 md:mt-12">
                            <a href="{{ route('login') }}"
                                class="w-full rounded bg-[#E8DFCA] p-4 text-base font-medium leading-4 text-white hover:bg-[#E8DFCA]/75 sm:w-auto">Get
                                Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</x-guest-layout>
<script>
    $(document).ready(function() {

        // Initialize first carousel
        $('#owl-carousel1').owlCarousel({
            rtl: true,
            loop: true,
            responsive: {
                0: {
                    items: 1
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
        $('#owl-carousel2').owlCarousel({
            nav: true,
            loop: true,
            rtl: true,
            margin: 30,
            responsive: {
                0: {
                    items: 1
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
                    items: 4,
                    stagePadding: 150,

                }
            }
        });

        // Initialize second carousel
        $('#owl-carousel3').owlCarousel({
            loop: true,
            margin: 30,
            responsive: {
                0: {
                    items: 1
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
