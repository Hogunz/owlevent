<x-guest-layout>
    <section class="container mx-auto sm:p-0 lg:p-8">
        <div class="h-auto">
            <div class="container mx-auto" style="">
                <div
                    class="from-50% h-auto rounded-t-lg bg-gradient-to-br from-[#7895B2] to-[#E8DFCA] bg-cover bg-center object-fill py-24 px-10 text-white">
                    <div class="sm:w-full lg:w-1/2">
                        <p class="text-left text-3xl font-bold">"Discover the highlights: A visual
                            journey through our featured
                            page's top features."</p>
                        <p class="mb-10 text-left text-2xl leading-none">Find the perfect solution to
                            your needs with our
                            supplier's wide range of services.</p>
                    </div>
                </div> <!-- container -->
                <br>
            </div>
        </div>
        <div class="">
            <div class="container mx-auto my-5 p-5">
                <div class="no-wrap md:-mx-2 md:flex">
                    <!-- Left Side -->
                    <div class="md:mx-2 md:w-2/6">
                        <!-- Profile Card -->
                        <div
                            class="rounded-lg bg-gradient-to-b from-[#F5EFE6] via-[#E8DFCA] to-transparent p-3 shadow-xl">
                            <div class="flex justify-center p-8" x-data="avatar">
                                <input type="file" accept="image/*" class="hidden" x-ref="avatar"
                                    @change="openCroppie()">
                                <div class="group relative cursor-pointer items-center justify-center rounded-full transition-shadow hover:shadow-xl hover:shadow-black/30"
                                    x-data="{ show: false }" @mouseover="show = true" @mouseover.away="show = false">

                                    <img class="relative top-0 z-auto h-32 w-32 rounded-full object-cover transition-transform duration-500"
                                        src="{{ asset('storage/' . auth()->user()->avatar) ?? 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60' }}"
                                        alt="">

                                    <span class="absolute bottom-0 right-7 flex h-4 w-4">
                                        <span
                                            class="absolute inline-flex h-full w-full animate-ping rounded-full bg-sky-400 opacity-75"></span>
                                        <span class="relative inline-flex h-4 w-4 rounded-full bg-sky-500"></span>
                                    </span>
                                    <div
                                        class="absolute inset-0 rounded-full bg-gradient-to-b from-transparent via-transparent to-transparent group-hover:from-black/80 group-hover:via-black/70 group-hover:to-black/70">
                                        <button class="absolute inset-x-0 bottom-0 mx-auto w-full bg-white text-sm"
                                            @click="$refs.avatar.click()" x-show="show">
                                            Edit Picture
                                        </button>
                                    </div>

                                </div>

                                <div class="fixed inset-0 z-40 flex items-center justify-center bg-gray-500/50"
                                    x-show="showCroppie">
                                    <div class="bg-white p-6">
                                        <img class="display-block" x-ref="croppie">
                                        <div>

                                            <div class="flex items-center justify-between">
                                                <button type="button" @click="clear()"
                                                    class="w-full bg-red-500 p-2 text-sm text-white hover:bg-red-700">Clear</button>
                                                <button class="w-full bg-green-500 p-2 text-sm text-white"
                                                    @click="save()">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h1 class="my-1 text-center text-xl font-bold leading-8 text-gray-900">
                                {{ auth()->user()->business_name }}</h1>
                            <div class="">
                                <div class="flex items-center justify-center">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                        class="w-4 text-yellow-300" role="img" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 576 512">
                                        <path fill="currentColor"
                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                        </path>
                                    </svg>
                                    <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">
                                        {{ auth()->user()->ratings }}</p>
                                    <span class="mx-1.5 h-1 w-1 rounded-full bg-gray-500 dark:bg-gray-400"></span>
                                    <a href="#reviews"
                                        class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">{{ auth()->user()->comments->count() }}
                                        reviews</a>
                                </div>

                                <div class="mt-4 mb-4 grid grid-cols-2 gap-4">
                                    <div>
                                        <a href="" class="href">
                                            <x-button class="w-full">View As</x-button>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="" class="">
                                            <x-button class="w-full">Edit Profile</x-button>
                                        </a>
                                    </div>
                                </div>
                                <div class="... flex justify-between">
                                    <div class="order-last">
                                        <h1 class="mb-4 text-left text-lg font-bold">Portfolio</h1>
                                    </div>

                                </div>
                            </div>
                            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-2">
                                @foreach ($gigs->take(2) as $gig)
                                    <div class="gap-4">
                                        <div>
                                            <img class="h-auto w-full rounded-lg sm:max-w-xs lg:max-w-full"
                                                src="{{ asset('storage/' . $gig->gigUploads->where('type', 'image')->first()->url) }}"
                                                alt="">
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <!-- End of profile card -->
                        <div class="my-4"></div>
                        <!-- Description -->
                        <div
                            class="mb-4 rounded-lg bg-gradient-to-br from-[#F5EFE6] via-[#E8DFCA] to-transparent p-8 shadow-xl">
                            <h1 class="mb-4 text-left text-lg font-bold">Description</h1>
                            <p class="text-justify">{{ auth()->user()->description }}
                            </p>
                        </div>
                        <!-- End of Description-->
                    </div>
                    <!-- Right Side -->
                    <div class="mx-2 w-full md:w-9/12">
                        <!-- Profile tab -->
                        <!-- Grid Section -->
                        <div class="rounded-sm p-3 shadow-sm">
                            <div class="grid gap-4 sm:grid-cols-2 md:grid-cols-3">

                                <!-- CAROUSEL -->
                                @foreach ($gigs as $gig)
                                    <div class="container">
                                        <div class="inset-x-0 top-14 max-h-full">
                                            <div id="owl-carousel" class="owl-carousel owl-theme">
                                                <div class="">
                                                    <a href="{{ route('gigs.show', $gig) }}" class="href">
                                                        <img src="{{ asset('storage/' . $gig->gigUploads->where('type', 'image')->first()->url) }}"
                                                            class="h-52 w-full object-cover" alt="...">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="p-4">
                                                <div class="mb-4 flex flex-row items-center gap-4">
                                                    <div class="">
                                                        <img class="relative top-0 z-auto h-8 w-8 rounded-full object-cover ring-2 ring-white"
                                                            src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60"
                                                            alt="">
                                                    </div>
                                                    <div
                                                        class="cursor-pointer text-sm font-bold uppercase hover:underline">
                                                        <a href="/itsMeCJ" class="href">{{ $gig->title }}</a>
                                                    </div>
                                                </div>
                                                <p class="line-clamp-3 mb-3 text-justify font-normal text-gray-700">
                                                    {{ $gig->description }}</p>
                                                <div class="justify-left mb-0 flex items-center">
                                                    <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                        data-icon="star" class="w-4 text-yellow-300" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                        <path fill="currentColor"
                                                            d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                        </path>
                                                    </svg>
                                                    <p class="ml-2 text-sm font-bold text-gray-900 dark:text-white">
                                                        {{ $gig->ratings }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <a href="{{ route('gigs.create') }}">
                                    <div
                                        class="flex h-52 w-full items-center justify-center rounded border-2 border-dashed p-6 text-xl font-bold uppercase tracking-wide text-gray-500">
                                        Create Gig
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End of grid section -->

            <div class="my-4"></div>

            <!-- Comment Section -->
            <div class="rounded-sm shadow-sm">

                <div class="">
                    <div class="">
                        <section class="container mx-auto max-w-7xl" id="reviews">

                            <hr class="my-8 w-full md:mt-12 md:mb-8 lg:mt-10" />
                            <section class="py-8 lg:py-16">
                                <div class="mx-auto px-4">
                                    <div class="mb-6 flex items-center justify-between">
                                        <h2 class="text-lg font-bold text-gray-900 lg:text-2xl">Reviews (20)
                                        </h2>
                                        <div class="self-center">

                                            <button class="inline-flex items-center text-center" id="dropdownBtn"
                                                data-dropdown-toggle="star">
                                                Filter
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16"
                                                    id="IconChangeColor">
                                                    <path
                                                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
                                                        id="mainIconPathAttribute"></path>
                                                </svg>
                                            </button>
                                            <div id="star"
                                                class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow">
                                                <ul class="p-4 py-2 text-sm text-gray-700"
                                                    aria-labelledby="dropdownDefaultButton">
                                                    <li>
                                                        <a href="#"
                                                            class="block px-4 py-2 hover:bg-gray-100">All
                                                            Star</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">1
                                                            Star</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">2
                                                            Star</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">3
                                                            Star</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">4
                                                            Star
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">5
                                                            Star
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    @foreach (auth()->user()->comments as $comment)
                                        <article class="mb-6 rounded-lg bg-white p-6 text-base">
                                            <footer class="mb-2 flex items-center justify-between">
                                                <div class="flex items-center">
                                                    <p class="mr-3 inline-flex items-center text-sm text-gray-900">
                                                        <img class="mr-2 h-6 w-6 rounded-full"
                                                            src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                            alt="Michael Gough">{{ $comment->commenter->name }}
                                                    </p>
                                                    <p class="text-sm text-gray-600"><time pubdate
                                                            datetime="2022-02-08"
                                                            title="February 8th, 2022">{{ $comment->created_at->diffForHumans() }}</time>
                                                    </p>
                                                </div>
                                                <button id="dropdownComment1Button"
                                                    data-dropdown-toggle="dropdownComment1"
                                                    class="inline-flex items-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50"
                                                    type="button">
                                                    <svg class="h-5 w-5" aria-hidden="true" fill="currentColor"
                                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                        </path>
                                                    </svg>
                                                    <span class="sr-only">Comment settings</span>
                                                </button>
                                                <!-- Dropdown menu -->
                                                <div id="dropdownComment1"
                                                    class="z-10 hidden w-36 divide-y divide-gray-100 rounded bg-white shadow">
                                                    <ul class="py-1 text-sm text-gray-700"
                                                        aria-labelledby="dropdownMenuIconHorizontalButton">
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100">Edit</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100">Remove</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"
                                                                class="block py-2 px-4 hover:bg-gray-100">Report</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </footer>
                                            <div class="flex items-center">
                                                Ratings:
                                                @for ($k = 0; $k < $comment->ratings; $k++)
                                                    <span>
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="star" class="w-4 text-yellow-300"
                                                            role="img" xmlns="http://www.w3.org/2000/svg"
                                                            viewBox="0 0 576 512">
                                                            <path fill="currentColor"
                                                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                            </path>
                                                        </svg>
                                                    </span>
                                                @endfor
                                            </div>
                                            <p class="text-gray-500">{{ $comment->text }}</p>
                                            <div class="mt-4 flex items-center space-x-4">
                                                <button type="button"
                                                    class="flex items-center text-sm text-gray-500 hover:underline">
                                                    <svg aria-hidden="true" class="mr-1 h-4 w-4" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                                        </path>
                                                    </svg>
                                                    Reply
                                                </button>
                                            </div>
                                        </article>
                                        @foreach ($comment->replies as $reply)
                                            <article class="mb-6 ml-6 rounded-lg bg-white p-6 text-base lg:ml-12">

                                                <footer class="mb-2 flex items-center justify-between">
                                                    <div class="flex items-center">
                                                        <p class="mr-3 inline-flex items-center text-sm text-gray-900">
                                                            <img class="mr-2 h-6 w-6 rounded-full"
                                                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                                                alt="Jese Leos">{{ $reply->commenter->name }}
                                                        </p>
                                                        <p class="text-sm text-gray-600"><time pubdate
                                                                datetime="2022-02-12"
                                                                title="February 12th, 2022">{{ $reply->created_at->diffForHumans() }}</time>
                                                        </p>
                                                    </div>
                                                    <button id="dropdownComment2Button"
                                                        data-dropdown-toggle="dropdownComment2"
                                                        class="inline-flex items-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50"
                                                        type="button">
                                                        <svg class="h-5 w-5" aria-hidden="true" fill="currentColor"
                                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                            </path>
                                                        </svg>
                                                        <span class="sr-only">Comment settings</span>
                                                    </button>
                                                    <!-- Dropdown menu -->
                                                    <div id="dropdownComment2"
                                                        class="z-10 hidden w-36 divide-y divide-gray-100 rounded bg-white shadow">
                                                        <ul class="py-1 text-sm text-gray-700"
                                                            aria-labelledby="dropdownMenuIconHorizontalButton">
                                                            <li>
                                                                <a href="#"
                                                                    class="block py-2 px-4 hover:bg-gray-100">Edit</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="block py-2 px-4 hover:bg-gray-100">Remove</a>
                                                            </li>
                                                            <li>
                                                                <a href="#"
                                                                    class="block py-2 px-4 hover:bg-gray-100">Report</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </footer>

                                                <p class="text-gray-500">{{ $reply->text }}
                                                </p>
                                                <div class="mt-4 flex items-center space-x-4">
                                                    <button type="button"
                                                        class="flex items-center text-sm text-gray-500 hover:underline">
                                                        <svg aria-hidden="true" class="mr-1 h-4 w-4" fill="none"
                                                            stroke="currentColor" viewBox="0 0 24 24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                                            </path>
                                                        </svg>
                                                        Reply
                                                    </button>
                                                </div>
                                            </article>
                                        @endforeach
                                    @endforeach
                                </div>
                            </section>
                        </section>
                    </div>
                </div>
            </div>
    </section>

    <section>

        <!-- CALENDAR -->
        {{--
        <div>
            <div class="">
                <div x-data="app()" x-init="[initDate(), getNoOfDays()]" x-cloak>
                    <div class="container mx-auto px-4 py-2 md:py-24">

                        <div class="overflow-hidden rounded-lg bg-white shadow-lg">

                            <div class="flex items-center justify-between py-2 px-6">
                                <div>
                                    <span x-text="MONTH_NAMES[month]" class="text-lg font-bold text-gray-800"></span>
                                    <span x-text="year" class="ml-1 text-lg font-normal text-gray-600"></span>
                                </div>
                                <div class="rounded-lg border px-1" style="padding-top: 2px;">
                                    <button type="button"
                                        class="inline-flex cursor-pointer items-center rounded-lg p-1 leading-none transition duration-100 ease-in-out hover:bg-gray-200"
                                        :class="{ 'cursor-not-allowed opacity-25': month == 0 }"
                                        :disabled="month == 0 ? true : false" @click="month--; getNoOfDays()">
                                        <svg class="inline-flex h-6 w-6 leading-none text-gray-500" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7" />
                                        </svg>
                                    </button>
                                    <div class="inline-flex h-6 border-r"></div>
                                    <button type="button"
                                        class="inline-flex cursor-pointer items-center rounded-lg p-1 leading-none transition duration-100 ease-in-out hover:bg-gray-200"
                                        :class="{ 'cursor-not-allowed opacity-25': month == 11 }"
                                        :disabled="month == 11 ? true : false" @click="month++; getNoOfDays()">
                                        <svg class="inline-flex h-6 w-6 leading-none text-gray-500" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="-mx-1 -mb-1">
                                <div class="flex flex-wrap" style="margin-bottom: -40px;">
                                    <template x-for="(day, index) in DAYS" :key="index">
                                        <div style="width: 14.26%" class="px-2 py-2">
                                            <div x-text="day"
                                                class="text-center text-sm font-bold uppercase tracking-wide text-gray-600">
                                            </div>
                                        </div>
                                    </template>
                                </div>

                                <div class="flex flex-wrap border-t border-l">
                                    <template x-for="blankday in blankdays">
                                        <div style="width: 14.28%; height: 120px"
                                            class="border-r border-b px-4 pt-2 text-center"></div>
                                    </template>
                                    <template x-for="(date, dateIndex) in no_of_days" :key="dateIndex">
                                        <div style="width: 14.28%; height: 120px"
                                            class="relative border-r border-b px-4 pt-2">
                                            <div @click="showEventModal(date)" x-text="date"
                                                class="inline-flex h-6 w-6 cursor-pointer items-center justify-center rounded-full text-center leading-none transition duration-100 ease-in-out"
                                                :class="{
                                                    'bg-blue-500 text-white': isToday(date) ==
                                                        true,
                                                    'text-gray-700 hover:bg-blue-200': isToday(date) == false
                                                }">
                                            </div>
                                            <div style="height: 80px;" class="mt-1 overflow-y-auto">


                                                <template
                                                    x-for="event in events.filter(e => new Date(e.event_date).toDateString() ===  new Date(year, month, date).toDateString() )">
                                                    <div class="mt-1 overflow-hidden rounded-lg border px-2 py-1"
                                                        :class="{
                                                            'border-blue-200 text-blue-800 bg-blue-100': event
                                                                .event_theme ===
                                                                'blue',
                                                            'border-red-200 text-red-800 bg-red-100': event
                                                                .event_theme ===
                                                                'red',
                                                            'border-yellow-200 text-yellow-800 bg-yellow-100': event
                                                                .event_theme === 'yellow',
                                                            'border-green-200 text-green-800 bg-green-100': event
                                                                .event_theme === 'green',
                                                            'border-purple-200 text-purple-800 bg-purple-100': event
                                                                .event_theme === 'purple'
                                                        }">
                                                        <p x-text="event.event_title"
                                                            class="truncate text-sm leading-tight">
                                                        </p>
                                                    </div>
                                                </template>
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div style=" background-color: rgba(0, 0, 0, 0.8)"
                        class="fixed top-0 right-0 left-0 bottom-0 z-40 h-full w-full"
                        x-show.transition.opacity="openEventModal">
                        <div class="relative left-0 right-0 mx-auto mt-24 max-w-xl overflow-hidden p-4">
                            <div class="absolute right-0 top-0 inline-flex h-10 w-10 cursor-pointer items-center justify-center rounded-full bg-white text-gray-500 shadow hover:text-gray-800"
                                x-on:click="openEventModal = !openEventModal">
                                <svg class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M16.192 6.344L11.949 10.586 7.707 6.344 6.293 7.758 10.535 12 6.293 16.242 7.707 17.656 11.949 13.414 16.192 17.656 17.606 16.242 13.364 12 17.606 7.758z" />
                                </svg>
                            </div>

                            <div class="block w-full overflow-hidden rounded-lg bg-white p-8 shadow">

                                <h2 class="mb-6 border-b pb-2 text-2xl font-bold text-gray-800">Add Event Details
                                </h2>

                                <div class="mb-4">
                                    <label class="mb-1 block text-sm font-bold tracking-wide text-gray-800">Event
                                        title</label>
                                    <input
                                        class="w-full appearance-none rounded-lg border-2 border-gray-200 bg-gray-200 py-2 px-4 leading-tight text-gray-700 focus:border-blue-500 focus:bg-white focus:outline-none"
                                        type="text" x-model="event_title">
                                </div>

                                <div class="mb-4">
                                    <label class="mb-1 block text-sm font-bold tracking-wide text-gray-800">Event
                                        date</label>
                                    <input
                                        class="w-full appearance-none rounded-lg border-2 border-gray-200 bg-gray-200 py-2 px-4 leading-tight text-gray-700 focus:border-blue-500 focus:bg-white focus:outline-none"
                                        type="text" x-model="event_date" readonly>
                                </div>

                                <div class="mb-4 inline-block w-64">
                                    <label class="mb-1 block text-sm font-bold tracking-wide text-gray-800">Select
                                        a
                                        theme</label>
                                    <div class="relative">
                                        <select @change="event_theme = $event.target.value;" x-model="event_theme"
                                            class="block w-full appearance-none rounded-lg border-2 border-gray-200 bg-gray-200 px-4 py-2 pr-8 leading-tight text-gray-700 hover:border-gray-500 focus:border-blue-500 focus:bg-white focus:outline-none">
                                            <template x-for="(theme, index) in themes">
                                                <option :value="theme.value" x-text="theme.label"></option>
                                            </template>

                                        </select>
                                        <div
                                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path
                                                    d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-8 text-right">
                                    <button type="button"
                                        class="mr-2 rounded-lg border border-gray-300 bg-white py-2 px-4 font-semibold text-gray-700 shadow-sm hover:bg-gray-100"
                                        @click="openEventModal = !openEventModal">
                                        Cancel
                                    </button>
                                    <button type="button"
                                        class="rounded-lg border border-gray-700 bg-gray-800 py-2 px-4 font-semibold text-white shadow-sm hover:bg-gray-700"
                                        @click="addEvent()">
                                        Save Event
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Modal -->
                </div>
            </div>
    </section> --}}

</x-guest-layout>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.css"
    integrity="sha512-zxBiDORGDEAYDdKLuYU9X/JaJo/DPzE42UubfBw9yg8Qvb2YRRIQ8v4KsGHOx2H1/+sdSXyXxLXv5r7tHc9ygg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.min.js"
    integrity="sha512-Gs+PsXsGkmr+15rqObPJbenQ2wB3qYvTHuJO6YJzPe/dTLvhy0fmae2BcnaozxDo5iaF8emzmCZWbQ1XXiX2Ig=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function avatar() {
        return {
            cropplie: {},
            showCroppie: false,
            init() {
                this.croppie = new Croppie(this.$refs.croppie, {
                    viewport: {
                        width: 300,
                        height: 300,
                        type: "square"
                    }, //circle
                    boundary: {
                        width: 400,
                        height: 400
                    }, //default boundary container
                    showZoomer: true,
                    enableResize: false
                })
            },
            openCroppie() {
                var reader, file = this.$refs.avatar.files[0]
                reader = new FileReader()
                reader.onload = (e) => {
                    this.showCroppie = true;
                    this.bind(e.target.result)
                }

                reader.readAsDataURL(file)
            },
            clear() {
                this.$refs.avatar.value = null
                this.showCroppie = false
            },
            save() {
                this.croppie.result({
                    type: "base64",
                    size: "original",
                    format: "png",
                }).then((croppedImage) => {
                    axios.post('/my-profile/update-avatar', {
                        image: croppedImage
                    }, {
                        onUploadProgress: progressEvent => {
                            this.uploading = true
                            this.progress = Math.round((progressEvent.loaded * 100) / progressEvent
                                .total);
                        }
                    }).then(response => {
                        console.log(response.data)
                        location.reload()
                    }).catch(error => console.log(error.response))
                    //update some kind of array
                });
            },
            bind(src) {
                setTimeout(() => {
                    this.croppie.bind({
                        url: src
                    })
                }, 200);

            },
        }
    }
</script>

<script>
    //Owl-Carousel
    $('.owl-carousel').owlCarousel({
        items: 5,
        loop: true,
        margin: 20,
        responsive: {
            0: {
                items: 1
            },
            640: {
                items: 1
            },
            768: {
                items: 1
            },
            992: {
                items: 1
            },
            1200: {
                items: 1
            }
        }
    });
</script>
<script>
    // //calendar
    // const MONTH_NAMES = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
    //     'October', 'November', 'December'
    // ];
    // const DAYS = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

    // function app() {
    //     return {
    //         month: '',
    //         year: '',
    //         no_of_days: [],
    //         blankdays: [],
    //         days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],

    //         events: [{
    //                 event_date: new Date(2020, 3, 1),
    //                 event_title: "April Fool's Day",
    //                 event_theme: 'blue'
    //             },

    //             {
    //                 event_date: new Date(2020, 3, 10),
    //                 event_title: "Birthday",
    //                 event_theme: 'red'
    //             },

    //             {
    //                 event_date: new Date(2020, 3, 16),
    //                 event_title: "Upcoming Event",
    //                 event_theme: 'green'
    //             }
    //         ],
    //         event_title: '',
    //         event_date: '',
    //         event_theme: 'blue',

    //         themes: [{
    //                 value: "blue",
    //                 label: "Blue Theme"
    //             },
    //             {
    //                 value: "red",
    //                 label: "Red Theme"
    //             },
    //             {
    //                 value: "yellow",
    //                 label: "Yellow Theme"
    //             },
    //             {
    //                 value: "green",
    //                 label: "Green Theme"
    //             },
    //             {
    //                 value: "purple",
    //                 label: "Purple Theme"
    //             }
    //         ],

    //         openEventModal: false,

    //         initDate() {
    //             let today = new Date();
    //             this.month = today.getMonth();
    //             this.year = today.getFullYear();
    //             this.datepickerValue = new Date(this.year, this.month, today.getDate()).toDateString();
    //         },

    //         isToday(date) {
    //             const today = new Date();
    //             const d = new Date(this.year, this.month, date);

    //             return today.toDateString() === d.toDateString() ? true : false;
    //         },

    //         showEventModal(date) {
    //             // open the modal
    //             this.openEventModal = true;
    //             this.event_date = new Date(this.year, this.month, date).toDateString();
    //         },

    //         addEvent() {
    //             if (this.event_title == '') {
    //                 return;
    //             }

    //             this.events.push({
    //                 event_date: this.event_date,
    //                 event_title: this.event_title,
    //                 event_theme: this.event_theme
    //             });

    //             console.log(this.events);

    //             // clear the form data
    //             this.event_title = '';
    //             this.event_date = '';
    //             this.event_theme = 'blue';

    //             //close the modal
    //             this.openEventModal = false;
    //         },

    //         getNoOfDays() {
    //             let daysInMonth = new Date(this.year, this.month + 1, 0).getDate();

    //             // find where to start calendar day of week
    //             let dayOfWeek = new Date(this.year, this.month).getDay();
    //             let blankdaysArray = [];
    //             for (var i = 1; i <= dayOfWeek; i++) {
    //                 blankdaysArray.push(i);
    //             }
    //             let daysArray = [];
    //             for (var i = 1; i <= daysInMonth; i++) {
    //                 daysArray.push(i);
    //             }
    //             this.blankdays = blankdaysArray;
    //             this.no_of_days = daysArray;
    //         }
    //     }
    // }
</script>
