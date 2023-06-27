<x-guest-layout>

    <section class="container mx-auto p-8">
        <div class=" h-auto ">
            <div class="container mx-auto" style="">
                <div
                    class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill rounded-t-lg bg-gradient-to-br from-[#7895B2] from-50% to-[#E8DFCA]">
                    <div class="lg:w-1/2 sm:w-full">
                        <p class="text-3xl text-left font-bold">"Discover the highlights: A visual
                            journey through our featured
                            page's top features."</p>
                        <p class="text-2xl text-left mb-10 leading-none">Find the perfect solution to
                            your needs with our
                            supplier's wide range of services.</p>
                    </div>
                </div> <!-- container -->
                <br>
            </div>
        </div>
    </section>
    <section class="container mx-auto p-8">
        <div class="grid lg:grid-cols-4 justify-items-center sm:grid-cols-1 gap-y-2 gap-x-0">
            @for ($i = 0; $i < 4; $i++)
                <div
                    class="flex lg:flex-col sm:flex-row items-center bg-white border border-gray-200 rounded-lg shadow  sm:max-w-xl lg:max-w-xs hover:bg-gray-100">
                    <a href="/service-profile" class="">
                        <img class="object-cover lg:h-full sm:h-auto sm:w-96 lg:w-full sm:rounded-l-lg lg:rounded-t-lg"
                            src="https://plus.unsplash.com/premium_photo-1669638781649-5802d884acd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                            alt="">
                    </a>

                    <div class=" justify-between p-4 leading-normal">
                        <div class="flex flex-row gap-4 items-center mb-4">
                            <img class="h-8 w-8 rounded-full ring-2 ring-white object-cover"
                                src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60"
                                alt="">
                            <a href="/supplier-profile" class="href">
                                <p
                                    class="mb-2 text-sm font-bold tracking-tight text-gray-900 hover:underline cursor-pointer">
                                    ItsMeCJ</p>
                            </a>
                        </div>
                        <p class="mb-3 font-normal text-gray-700">Lorem Ipsum is simply
                            dummy
                            text of the
                            printing and typesetting industry.</p>
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
            <span>(23)</span>
            </ul>
        </div>
        </div>
        </div>
        @endfor
        </div>
    </section>
</x-guest-layout>
