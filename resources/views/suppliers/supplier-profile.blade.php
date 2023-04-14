<x-guest-layout>

    <section class="container mx-auto p-8 ">
        <div class=" h-auto ">
            <div class="container mx-auto" style="">
                <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill rounded-t-lg"
                    style="background-image: url(https://plus.unsplash.com/premium_photo-1661311839935-ade135b5aa84?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">
                    <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">w</p>
                        <p class="text-3xl font-bold">w</p>
                        <p class="text-2xl mb-10 leading-none">w</p>
                    </div>
                </div> <!-- container -->
                <br>
            </div>
        </div>


        <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-4">
            <div class="rounded-lg border border-transparent shadow-xl">
                <div
                    class="flex flex-col justify-left gap-4 mb-8 p-8 rounded-lg bg-gradient-to-b from-[#6DCFF6]/50 via-[#6DCFF6]/25 to-transparent ">
                    <div class="flex justify-center ">
                        <div class="relative">
                            <img class="relative z-auto top-0 w-32 h-32  rounded-full  object-cover"
                                src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60"
                                alt="">
                            <span class="absolute flex h-4 w-4 bottom-0 right-7">
                                <span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-4 w-4 bg-sky-500"></span>
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-col ">
                        <div
                            class="flex justify-center inset-x-0 bottom-0 text-left text-lg font-bold hover:underline cursor-pointer mb-4  ">
                            <a href="/itsMeCJ" class="href">ItsMeCJ</a>
                        </div>
                        <div class="">
                            <ul class="flex justify-center mb-0 items-center">
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
                <div x-data="{ images: 5 }" class="p-8 mb-4">
                    <h1 class="mb-4 text-lg font-bold text-left">Portfolio</h1>
                    <div class="columns-2 " id="image-container">
                        <template x-for="i in 10" :key="i">
                            <div class="relative group transition-transform  ">
                                <div
                                    class="absolute inset-0  rounded  bg-gradient-to-b  to-black group-hover:from-transparent group-hover:via-black/40 group-hover:to-black/50">
                                </div>

                                <img class="mb-4 rounded-lg aspect-auto" x-show="i <= images"
                                    :src="'https://source.unsplash.com/random/' + i" />
                                <div
                                    class="absolute bottom-0 left-0 flex translate-y-6 flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0 ">
                                    <p
                                        class="mb-3 text-sm  text-white font-extrabold duration-300 opacity-0 transition-opacity group-hover:opacity-100 ">
                                        test</p>
                                </div>
                            </div>

                        </template>

                    </div>
                    <template x-if="images < 10">
                        <a href="/blog/index/portfolio" id="see-more-btn"
                            class="border border-transparent rounded block mx-auto mt-4 hover:bg-[#F69679]  p-2 mb-4  text-black"
                            @click.prevent="window.location.href = '/blog/index/portfolio'">
                            See More
                        </a>
                    </template>
                </div>

                <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8">
                <div class="p-8 mb-4">
                    <h1 class="mb-4 text-lg font-bold text-left  ">Description</h1>
                    <p class="text-justify">Hi it's me CJ,
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a
                        galley of type and scrambled it to make a type specimen book. It has survived not only
                        five
                        centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged.
                        It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum
                        passages, and more recently with desktop publishing software like Aldus PageMaker
                        including
                        versions of Lorem Ipsum.
                    </p>
                </div>
            </div>


            <div class="">
                <div class=" ">
                    <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-4 ">
                        <!-- CAROUSEL -->
                        @for ($x = 0; $x < 6; $x++)
                            <div class="container">
                                <div class=" inset-x-0 top-14 max-h-full">
                                    <div id="owl-carousel" class="owl-carousel owl-theme">
                                        <div class="">
                                            <a href="/service-profile" class="href">
                                                <img src="https://images.unsplash.com/photo-1539074012390-794e447a2d9e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                                    class="" alt="...">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex flex-row gap-4 items-center mb-4">
                                            <div class="">
                                                <img class="relative z-auto top-0 h-8 w-8 rounded-full ring-2 ring-white object-cover"
                                                    src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60"
                                                    alt="">
                                            </div>
                                            <div class=" text-sm font-bold hover:underline cursor-pointer  ">
                                                <a href="/itsMeCJ" class="href">ItsMeCJ</a>

                                            </div>


                                        </div>
                                        <p class="mb-3 font-normal text-gray-700 text-justify ">Lorem Ipsum is simply
                                            dummy
                                            text of the
                                            printing and typesetting industry.</p>
                                        <div class="">
                                            <ul class="flex justify-left mb-0 items-center">
                                                <li>
                                                    @for ($j = 0; $j < 5; $j++)
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="star" class="w-4 text-yellow-300" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path fill="currentColor"
                                                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                            </path>
                                                        </svg>
                                                </li>
                        @endfor
                        <span>(23)</span>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endfor
        </div>
        </div>

        <section class="container mx-auto max-w-7xl  px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between border p-4 mb-8">
                <div
                    class="order-first text-left  lg:text-2xl text-xl lg:leading-9 leading-7 text-gray-800 font-semibold">
                    Reviews</div>

                <div class="self-center">

                    <button class="text-center inline-flex items-center" id="dropdownBtn" data-dropdown-toggle="star">
                        Filter
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                            class="bi bi-filter" viewBox="0 0 16 16" id="IconChangeColor">
                            <path
                                d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
                                id="mainIconPathAttribute"></path>
                        </svg>
                    </button>
                    <div id="star" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                        <ul class="py-2 p-4 text-sm text-gray-700 dark:text-gray-200"
                            aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">All
                                    Star</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">1
                                    Star</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">2
                                    Star</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">3
                                    Star</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">4
                                    Star
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 ">5
                                    Star
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />
            @for ($i = 0; $i < 4; $i++)
                <div class="flex justify-left gap-4 mb-8">
                    <div class="">
                        <img class="relative z-auto top-0 w-24 h-24  rounded-full ring-2 ring-white object-cover"
                            src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60"
                            alt="">
                    </div>
                    <div class="flex flex-col ">
                        <div
                            class="inset-x-0 bottom-0 text-left text-sm font-bold hover:underline cursor-pointer mb-4">
                            <a href="" class="href">ItsMeCJ</a>
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
            <span class="">(23)</span>



            </ul>
            </div>
            </div>
            </div>
            <div class="container mx-auto mb-8 text-justify">
                Hi it's me CJ, Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                a galley of type and scrambled it to make a type specimen book. It has survived not only five
                centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                Ipsum.
            </div>

            <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />
            @endfor
        </section>
        </div>

        </div>
    </section>
    <section>

        <div class="container mx-auto" id='calendar'></div>
    </section>
</x-guest-layout>
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
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth'
        });
        calendar.render();
    });
</script>
<script>
    $('#calendar').fullCalendar({
        select: function(start, end, jsEvent, view) {
            // Display a confirmation dialog asking the user to select availability
            if (confirm('Is this date available?')) {
                // The date is available
                // Do something to mark the date as available, such as adding a CSS class
                $(this).addClass('available');
            } else {
                // The date is not available
                // Do something to mark the date as not available, such as adding a different CSS class
                $(this).addClass('not-available');
            }
            // Clear the current selection
            $('#calendar').fullCalendar('unselect');
        }
    });
</script>
