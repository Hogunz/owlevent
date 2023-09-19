<x-guest-layout>


    <section>
        <div class="container mx-auto grid gap-4 p-8 sm:grid-cols-1 lg:grid-cols-2">
            <!--1st DIV -->
            <div class="">
                <div class="mb-12">
                    <div class="mb-2 text-2xl font-bold">
                        About Their Services
                    </div>
                    <div class="text-xl font-semibold">
                        {{ $gig->title }}
                    </div>
                    <div>
                        <p>{{ $gig->description }}</p>
                    </div>
                </div>
                <!-- CAROUSEL -->
                <div class="container">
                    <div class="inset-x-0 top-14 max-h-full">
                        <div id="owl-carousel" class="owl-carousel owl-theme">
                            <!-- Item 1 -->

                            @foreach ($gig->gigUploads as $upload)
                                <div class="item relative h-56 overflow-hidden rounded-lg md:h-96"
                                    data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal">
                                    @if (pathinfo($upload->url, PATHINFO_EXTENSION) === 'mp4')
                                        <video
                                            class="absolute top-1/2 left-1/2 block w-full -translate-x-1/2 -translate-y-1/2 cursor-pointer transition duration-300 ease-out"
                                            controls>
                                            <source src="{{ asset('storage/' . $upload->url) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        <img src="{{ asset('storage/' . $upload->url) }}"
                                            class="absolute top-1/2 left-1/2 block w-full -translate-x-1/2 -translate-y-1/2 cursor-pointer transition duration-300 ease-out hover:scale-110 hover:overflow-hidden"
                                            alt="{{ $gig->title }}">
                                    @endif
                                </div>
                            @endforeach


                            {{--
                            @foreach ($gig->gigUploads as $upload)
                                <div class="item relative h-56 overflow-hidden rounded-lg md:h-96"
                                    data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal">
                                    <img src="{{ asset('storage/' . $upload->url) }}"
                                        class="absolute top-1/2 left-1/2 block w-full -translate-x-1/2 -translate-y-1/2 cursor-pointer transition duration-300 ease-out hover:scale-110 hover:overflow-hidden"
                                        alt="...">
                                </div>
                            @endforeach --}}
                        </div>
                    </div>
                </div>
                <div id="extralarge-modal" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
                    <div class="relative h-full w-full max-w-7xl md:h-auto">
                        <!-- Modal content -->
                        <div id="owl-carousel2"
                            class="owl-carousel owl-theme relative rounded-lg bg-transparent shadow p-48">
                            @foreach ($gig->gigUploads as $upload)
                                <div class="relative" data-modal-target="extralarge-modal"
                                    data-modal-toggle="extralarge-modal">
                                    @if (pathinfo($upload->url, PATHINFO_EXTENSION) === 'mp4')
                                        <video class="relative rounded-lg transition duration-300 ease-in-out" controls>
                                            <source src="{{ asset('storage/' . $upload->url) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        <img src="{{ asset('storage/' . $upload->url) }}"
                                            class="relative rounded-lg transition duration-300 ease-in-out"
                                            alt="{{ $gig->title }}">
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="mb-2 text-2xl font-bold">
                    About This Supplier
                </div>
                <div class="justify-left mb-8 flex gap-4">
                    <div class="">
                        <img class="relative top-0 z-auto h-32 w-32 rounded-full object-cover ring-2 ring-white"
                            src="{{ asset('storage/' . auth()->user()->avatar) ?? 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60' }}"
                            alt="{{ $gig->user->business_name }}">
                    </div>
                    <div class="flex flex-col">
                        <div class="inset-x-0 bottom-0 mb-4 cursor-pointer text-left text-sm font-bold hover:underline">
                            <a href="/supplier-profile" class="href">{{ $gig->user->business_name }}</a>
                        </div>
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
                                    {{ $gig->ratings }}
                                </p>
                                <span class="mx-1.5 h-1 w-1 rounded-full bg-gray-500 dark:bg-gray-400"></span>
                                <a href="#reviews"
                                    class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">{{ $gig->comments->count() }}
                                    reviews</a>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="border p-8">
                    <p>{{ $gig->user->description }}
                    </p>
                </div>

                <div class="p-8">
                    <h1 class="text-left text-xl font-semibold leading-7 text-gray-800 lg:text-2xl lg:leading-9">
                        FAQ's</h1>
                    <div class="mx-auto w-full">
                        <!-- Question 1 -->
                        <hr class="my-8 w-full md:mt-12 md:mb-8 lg:mt-10" />
                        @foreach ($gig->faqs as $faq)
                            <div class="w-full md:px-6">
                                <div id="mainHeading" class="flex w-full items-center justify-between">
                                    <div class="">
                                        <p
                                            class="flex items-center justify-center text-base font-medium leading-6 text-gray-800 dark:text-white md:leading-4">
                                            <span
                                                class="mr-4 text-lg font-semibold leading-6 text-gray-800 dark:text-white md:text-xl md:leading-5 lg:mr-6 lg:text-2xl lg:leading-4">Q{{ $loop->iteration }}.</span>
                                            {{ $faq->question }}
                                        </p>
                                    </div>
                                    <button aria-label="toggler"
                                        class="focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2"
                                        data-menu>
                                        <img class="transform dark:hidden"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg"
                                            alt="toggler">
                                        <img class="hidden transform dark:block"
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                            alt="toggler">
                                    </button>
                                </div>
                                <div id="menu" class="mt-6 hidden w-full">
                                    <p class="text-base font-normal leading-6 text-gray-600 dark:text-gray-300">
                                        {{ $faq->answer }}</p>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                        <hr class="my-8 w-full lg:mt-10" />

                        <a href="{{ route('gigs.edit', $gig) }}">
                            <x-button class="w-full">
                                Edit Services
                            </x-button>
                        </a>

                    </div>
                </div>

                <hr class="my-8 w-full md:mt-12 md:mb-8 lg:mt-10" />
                <section class="bg-white py-8 lg:py-16">
                    <div class="mx-auto max-w-2xl px-4">
                        <div class="mb-8 flex justify-between border p-4">
                            <div
                                class="order-first text-left text-xl font-semibold leading-7 text-gray-800 lg:text-2xl lg:leading-9">
                                Reviews</div>

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
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100">All
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

                        @foreach ($gig->comments as $comment)
                            <article class="mb-6 rounded-lg bg-white p-6 text-base">
                                <footer class="mb-2 flex items-center justify-between">
                                    <div class="flex items-center">
                                        <p class="mr-3 inline-flex items-center text-sm text-gray-900">
                                            <img class="mr-2 h-6 w-6 rounded-full"
                                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                alt="user comment">{{ $comment->commenter->name }}
                                        </p>
                                        <p class="text-sm text-gray-600"><time pubdate datetime="2022-02-08"
                                                title="February 8th, 2022">{{ $comment->created_at->diffForHumans() }}</time>
                                        </p>
                                    </div>
                                    <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
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
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100">Remove</a>
                                            </li>
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100">Report</a>
                                            </li>
                                        </ul>
                                    </div>
                                </footer>
                                <div class="flex items-center">
                                    Ratings:
                                    @for ($k = 0; $k < $comment->ratings; $k++)
                                        <span>
                                            <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                data-icon="star" class="w-4 text-yellow-300" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
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
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
                                                    alt="user reply">{{ $reply->commenter->name }}
                                            </p>
                                            <p class="text-sm text-gray-600"><time pubdate datetime="2022-02-12"
                                                    title="February 12th, 2022">{{ $reply->created_at->diffForHumans() }}</time>
                                            </p>
                                        </div>
                                        <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
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
                                    <p class="text-gray-500">{{ $reply->text }}</p>
                                    <div class="mt-4 flex items-center space-x-4">
                                        <button type="button"
                                            class="flex items-center text-sm text-gray-500 hover:underline">
                                            <svg aria-hidden="true" class="mr-1 h-4 w-4" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
            </div>
            <!-- 2 -->
            <div class="container">
                <div class="sticky inset-x-0 top-14 max-h-full">
                    @foreach ($gig->gigPackages as $package)
                        <div
                            class="mx-auto mb-5 flex max-w-lg flex-col rounded-lg border border-gray-300 bg-white bg-opacity-25 p-6 text-center text-gray-900 shadow-md drop-shadow-2xl backdrop-blur-md backdrop-filter">
                            <h3 class="mb-4 text-2xl font-semibold">Package ({{ $package->package }})</h3>

                            <div class="my-8 flex items-baseline justify-center">
                                <span class="mr-2 text-5xl font-extrabold">₱
                                    {{ number_format($package->price, 2, '.', ',') }}</span>
                            </div>
                            <p class="font-light text-gray-800 sm:text-sm">{!! $package->description !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div id="extralarge-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
                <div class="relative h-full w-full max-w-7xl md:h-auto">
                    <!-- Modal content -->
                    <div class="relative rounded-lg bg-white shadow">
                        <div class="relative">
                            <img src="https://images.unsplash.com/photo-1539074012390-794e447a2d9e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                class="relative rounded-lg transition duration-300 ease-in-out"
                                alt="{{ $package->description }}">
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>



</x-guest-layout>


<script>
    //FAQ
    let elements = document.querySelectorAll("[data-menu]");
    for (let i = 0; i < elements.length; i++) {
        let main = elements[i];

        main.addEventListener("click", function() {
            let element = main.parentElement.parentElement;
            let indicators = main.querySelectorAll("img");
            let child = element.querySelector("#menu");
            let h = element.querySelector("#mainHeading>div>p");

            h.classList.toggle("font-semibold");
            child.classList.toggle("hidden");
            // console.log(indicators[0]);
            indicators[0].classList.toggle("rotate-180");
        });
    }
</script>

<script>
    //Owl-Carousel
    $('.owl-carousel').owlCarousel({
        items: 5,
        loop: true,
        margin: 20,
        video: true,
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
    //Owl-Carousel
    $('#owl-carousel2').owlCarousel({
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
