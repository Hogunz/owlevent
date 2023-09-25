<x-guest-layout>



    <section class="lg:container lg:mx-auto lg:p-8 p-2">
        <div class="flex flex-col">
            <div class="mb-2 text-4xl font-bold">{{ $category->name }}</div>
            <div class="text-base font-bold text-black/50">Understanding the client's needs and objectives for the event
                and
                developing
                <br>
                a detailed plan and timeline for its execution.
            </div>
        </div>
    </section>
    {{-- <section class="container mx-auto p-8">
        <div class="grid justify-items-center gap-y-2 gap-x-0 sm:grid-cols-1 lg:grid-cols-4">
            @foreach ($category->gigs as $gig)
                <div class="flex items-center bg-white sm:max-w-xl sm:flex-row lg:max-w-xs lg:flex-col">
                    <div>
                        <div class="">
                            <a href="{{ route('show.supplier-gig', ['user' => $gig->user, 'gig' => $gig]) }}">
                                <img src="{{ asset('storage/' . $gig->gigUploads->where('type', 'image')->first()->url) }}"
                                    class="object-cover sm:h-auto sm:w-96 rounded-lg lg:h-full lg:w-full "
                                    alt="...">
                            </a>

                        </div>
                    </div>

                    <div class="justify-between py-4 px-0 leading-normal">
                        <div class="mb-4 flex flex-row items-center gap-4">
                            <img class="h-8 w-8 rounded-full object-cover ring-2 ring-white"
                                src="{{ asset('storage/' . $gig->user->avatar) ?? 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60' }}"
                                alt="">
                            <a href="{{ route('my-profile') }}" class="href">
                                <p
                                    class="mb-2 cursor-pointer text-sm font-bold tracking-tight text-gray-900 hover:underline">
                                    {{ $gig->title }}</p>
                            </a>
                        </div>
                        <p class="line-clamp-3 mb-3 font-normal text-gray-700">{{ $gig->description }}</p>
                        <div class="">
                            <div class="justify-left mb-0 flex items-center">
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
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section> --}}


    <section class="lg:container lg:mx-auto lg:p-8 p-2">
        <div class="grid md:grid-cols-4 justify-items-center grid-cols-2 gap-4 p-2 ">
            @foreach ($category->gigs as $gig)
                <div class="w-full max-w-sm flex flex-col">
                    <!-- Added flex flex-col -->

                    <a href="{{ route('show.supplier-gig', ['user' => $gig->user, 'gig' => $gig]) }}">
                        <img src="{{ asset('storage/' . $gig->gigUploads->where('type', 'image')->first()->url) }}"
                            class="object-cover object-center sm:h-auto sm:w-96 rounded-lg lg:h-full lg:w-full "
                            alt="{{ $gig->title }}">
                    </a>

                    <div class="py-2 px-0 flex-grow flex flex-col justify-between">
                        <!-- Added flex-grow -->
                        <div class="mt-6 mb-4 flex flex-row items-center gap-4">
                            <img class="h-8 w-8 rounded-full object-cover ring-2 ring-white"
                                src="{{ asset('storage/' . $gig->user->avatar) ?? 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60' }}"
                                alt="">
                            <a href="{{ route('my-profile') }}" class="">
                                <p
                                    class="mb-2 cursor-pointer text-sm font-bold tracking-tight text-gray-900 hover:underline">
                                    {{ $gig->title }}</p>
                            </a>
                        </div>
                        <div class="flex items-center">
                            <p class="line-clamp-3 mb-3 font-normal text-gray-700">{{ $gig->description }}</p>
                        </div>
                        <div class="flex items-center mt-2.5 mb-5">
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
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{--
    <section class="border sm:bg-white lg:bg-[#E8DFCA]">

        <div class="py-12 px-4 lg:container md:py-12 md:px-6 lg:mx-auto lg:py-16">
            <h1 class="text-center text-3xl font-semibold leading-7 text-gray-800 lg:text-4xl lg:leading-9">
                FAQ's</h1>

            <div class="mx-auto mt-8 w-full bg-[#F5EFE6] py-6 px-4 md:mt-10 md:p-6 lg:mt-12 lg:w-8/12 lg:py-7 lg:px-6">
                <div class="flex flex-col justify-between md:flex-row">
                    <div class="mb-8 text-center md:mb-0 md:text-left">
                        <h2 class="mb-4 text-xl font-medium leading-5 text-gray-800 lg:mb-2">
                            Questions
                        </h2>
                        <p class="mx-auto w-11/12 text-sm font-normal leading-5 text-gray-600 md:ml-0 md:w-8/12">
                            If you don’t find your answer, Please contact us or Leave a Message, we’ll be more than
                            happy to assist you.</p>
                    </div>

                    <div class="flex items-center justify-center">
                        <div
                            class="flex w-full items-center justify-between bg-white px-4 py-3 focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2 md:justify-center">
                            <input class="bg-white focus:outline-none" type="text" placeholder="Search" />
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg1.svg" alt="search">
                        </div>
                    </div>

                </div>
            </div>
            <div class="mx-auto w-full lg:w-8/12">
                @for ($i = 0; $i < 4; $i++)
                    <!-- Question 1 -->
                    <hr class="my-8 w-full md:mt-12 md:mb-8 lg:mt-10" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex w-full items-center justify-between">
                            <div class="">
                                <p
                                    class="flex items-center justify-center text-base font-medium leading-6 text-gray-800 md:leading-4">
                                    <span
                                        class="mr-4 text-lg font-semibold leading-6 text-gray-800 md:text-xl md:leading-5 lg:mr-6 lg:text-2xl lg:leading-4">Q1.</span>
                                    asdkhasdjkhasdkjh
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2"
                                data-menu>
                                <img class="transform"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="hidden transform"
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="mt-6 hidden w-full">
                            <p class="text-base font-normal leading-6 text-gray-600">
                                awdjhajwlkdhajkwdhakjwdhjkawhd</p>
                        </div>
                    </div>
                @endfor
            </div>


        </div>




    </section> --}}


</x-guest-layout>
{{--
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
</script> --}}
