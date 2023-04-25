<x-guest-layout>


    <section>
        <div class="container mx-auto grid lg:grid-cols-2 sm:grid-cols-1 gap-4 p-8">
            <!--1st DIV -->
            <div class="">
                <div class="mb-12">
                    <div class="text-2xl mb-2 font-bold">
                        About Their Services
                    </div>
                    <div>
                        <p class="text-xl">I will help you ensure that all aspects of the <br>event run smoothly
                            and
                            meet the expectations of the client.</p>
                    </div>
                </div>
                <!-- CAROUSEL -->
                <div class="container">
                    <div class=" inset-x-0 top-14 max-h-full">
                        <div id="owl-carousel" class="owl-carousel owl-theme">
                            <!-- Item 1 -->
                            @for ($i = 0; $i < 4; $i++)
                                <div class="item relative h-56 overflow-hidden rounded-lg md:h-96"
                                    data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal">
                                    <img src="https://images.unsplash.com/photo-1539074012390-794e447a2d9e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 hover:overflow-hidden hover:scale-110 ease-out duration-300 transition cursor-pointer"
                                        alt="...">
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div id="extralarge-modal" tabindex="-1"
                    class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                    <div class="relative w-full h-full max-w-7xl md:h-auto">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow ">
                            <div class="relative ">
                                <img src="https://images.unsplash.com/photo-1539074012390-794e447a2d9e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    class=" relative rounded-lg transition duration-300 ease-in-out" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-2xl mb-2 font-bold">
                    About This Supplier
                </div>
                <div class="flex justify-left gap-4 mb-8">
                    <div class="">
                        <img class="relative z-auto top-0 w-32 h-32  rounded-full ring-2 ring-white object-cover"
                            src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                    <div class="flex flex-col ">
                        <div
                            class="inset-x-0 bottom-0 text-left text-sm font-bold hover:underline cursor-pointer mb-4 ">
                            <a href="/supplier-profile" class="href">ItsMeCJ</a>
                        </div>
                        <div class="">
                            <ul class="flex justify-left mb-0 items-center">
                                <li>
                                    @for ($j = 0; $j < 5; $j++)
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-4 text-yellow-300" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                            </path>
                                        </svg>
                                </li>
                                @endfor
                                <span>(52)</span>
                            </ul>

                        </div>
                    </div>

                </div>
                <div class="p-8 border">
                    <p>Hi it's me CJ,
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                        passages, and more recently with desktop publishing software like Aldus PageMaker including
                        versions of Lorem Ipsum.

                    </p>
                </div>
                <div class="p-8">
                    <h1 class="text-left  lg:text-2xl text-xl lg:leading-9 leading-7 text-gray-800 font-semibold">
                        FAQ's</h1>
                    <div class="">
                        @for ($i = 0; $i < 4; $i++)
                            <!-- Question 1 -->
                            <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />

                            <div class="w-full md:px-6">
                                <div id="mainHeading" class="flex justify-between items-center w-full">
                                    <div class="">
                                        <p
                                            class="flex justify-center items-center  font-medium text-base leading-6 md:leading-4 text-gray-800">
                                            <span
                                                class="lg:mr-6 mr-4  lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q1.</span>
                                            asdkhasdjkhasdkjh
                                        </p>
                                    </div>
                                    <button aria-label="toggler"
                                        class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                                        data-menu>
                                        <img class="transform "
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg"
                                            alt="toggler">
                                        <img class="transform hidden "
                                            src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                            alt="toggler">
                                    </button>
                                </div>
                                <div id="menu" class="hidden mt-6 w-full">
                                    <p class="text-base leading-6 text-gray-600 font-normal">
                                        awdjhajwlkdhajkwdhakjwdhjkawhd</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="flex justify-between border p-4 mb-8">
                    <div
                        class="order-first text-left  lg:text-2xl text-xl lg:leading-9 leading-7 text-gray-800 font-semibold">
                        Reviews</div>

                    <div class="self-center">

                        <button class="text-center inline-flex items-center" id="dropdownBtn"
                            data-dropdown-toggle="star">
                            Filter
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-filter" viewBox="0 0 16 16" id="IconChangeColor">
                                <path
                                    d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
                                    id="mainIconPathAttribute"></path>
                            </svg>
                        </button>
                        <div id="star"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                            <ul class="py-2 p-4 text-sm text-gray-700 " aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100  ">All
                                        Star</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100  ">1
                                        Star</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100  ">2
                                        Star</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100  ">3
                                        Star</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100  ">4
                                        Star
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100  ">5
                                        Star
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />
                <section class="bg-white  py-8 lg:py-16">
                    <div class="max-w-2xl mx-auto px-4">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 ">Discussion (20)
                            </h2>
                        </div>
                        <form class="mb-6">
                            <div class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200  ">
                                <label for="comment" class="sr-only">Your comment</label>
                                <textarea id="comment" rows="6"
                                    class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 focus:outline-none  "
                                    placeholder="Write a comment..." required></textarea>
                            </div>
                            <x-button>Post Comment</x-button>
                        </form>
                        @for ($i = 0; $i < 4; $i++)
                            <article class="p-6 mb-6 text-base bg-white rounded-lg ">
                                <footer class="flex justify-between items-center mb-2">
                                    <div class="flex items-center">
                                        <p class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                                            <img class="mr-2 w-6 h-6 rounded-full"
                                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                                alt="Michael Gough">Michael Gough
                                        </p>
                                        <p class="text-sm text-gray-600 "><time pubdate datetime="2022-02-08"
                                                title="February 8th, 2022">Feb. 8, 2022</time>
                                        </p>
                                    </div>
                                    <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50  "
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Comment settings</span>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownComment1"
                                        class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow ">
                                        <ul class="py-1 text-sm text-gray-700 "
                                            aria-labelledby="dropdownMenuIconHorizontalButton">
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100  ">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100  ">Remove</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100  ">Report</a>
                                            </li>
                                        </ul>
                                    </div>
                                </footer>
                                <p class="text-gray-500 ">Very straight-to-point article. Really
                                    worth
                                    time reading. Thank you! But tools are just the
                                    instruments for the UX designers. The knowledge of the design tools are as important
                                    as
                                    the
                                    creation of the design strategy.</p>
                                <div class="flex items-center mt-4 space-x-4">
                                    <button type="button"
                                        class="flex items-center text-sm text-gray-500 hover:underline ">
                                        <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none"
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
                            <article class="p-6 mb-6 ml-6 lg:ml-12 text-base bg-white rounded-lg ">
                                <footer class="flex justify-between items-center mb-2">
                                    <div class="flex items-center">
                                        <p class="inline-flex items-center mr-3 text-sm text-gray-900 ">
                                            <img class="mr-2 w-6 h-6 rounded-full"
                                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                                alt="Jese Leos">Jese Leos
                                        </p>
                                        <p class="text-sm text-gray-600 "><time pubdate datetime="2022-02-12"
                                                title="February 12th, 2022">Feb. 12, 2022</time>
                                        </p>
                                    </div>
                                    <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                                        class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50  "
                                        type="button">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Comment settings</span>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdownComment2"
                                        class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow  ">
                                        <ul class="py-1 text-sm text-gray-700 "
                                            aria-labelledby="dropdownMenuIconHorizontalButton">
                                            <li>
                                                <a href="#" class="block py-2 px-4 hover:bg-gray-100  ">Edit</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100  ">Remove</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block py-2 px-4 hover:bg-gray-100  ">Report</a>
                                            </li>
                                        </ul>
                                    </div>
                                </footer>
                                <p class="text-gray-500 ">Much appreciated! Glad you liked it ☺️</p>
                                <div class="flex items-center mt-4 space-x-4">
                                    <button type="button"
                                        class="flex items-center text-sm text-gray-500 hover:underline ">
                                        <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none"
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
                        @endfor
                    </div>
                </section>
            </div>
            <!-- 2 -->
            <div class="container  ">
                <div class="sticky inset-x-0 top-14 max-h-full ">

                    <div
                        class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900  rounded-lg border border-gray-100 shadow bg-gradient-to-br from-[#CD7F32]  via-[#B08D57] to-[#B08D57]/75">
                        <h3 class="mb-4 text-2xl font-semibold">Bronze</h3>
                        <p class="font-light text-gray-800 sm:text-lg ">Best option for personal use
                            & for
                            your next project.</p>
                        <div class="flex justify-center items-baseline my-8">
                            <span class="mr-2 text-5xl font-extrabold">$29</span>
                            <span class="text-gray-800 ">/month</span>
                        </div>
                        <!-- List -->
                        <ul role="list" class="mb-8 space-y-4 text-left">
                            <li class="flex items-center space-x-3">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Individual configuration</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>No setup, or hidden fees</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Team size: <span class="font-semibold">1 developer</span></span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Premium support: <span class="font-semibold">6 months</span></span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <!-- Icon -->
                                <svg class="flex-shrink-0 w-5 h-5 text-green-500 " fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span>Free updates: <span class="font-semibold">6 months</span></span>
                            </li>
                        </ul>
                        <a href="#"
                            class="  focus:ring-4 focus:ring-[#7895B2] font-medium text-sm text-center border rounded-lg px-8 py-2 text-white bg-[#7895B2] hover:bg-[#7895B2]/75">Get
                            started</a>
                    </div>


                </div>
            </div>

            <div id="extralarge-modal" tabindex="-1"
                class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
                <div class="relative w-full h-full max-w-7xl md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow ">
                        <div class="relative ">
                            <img src="https://images.unsplash.com/photo-1539074012390-794e447a2d9e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                class=" relative rounded-lg transition duration-300 ease-in-out" alt="...">
                        </div>
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
