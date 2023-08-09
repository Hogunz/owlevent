<x-guest-layout>

    <section class="sm:container mx-auto sm:p-8 p-2 flex">

                <div
                    class="w-full bg-cover bg-center h-auto text-white py-24 px-10 object-fill rounded-t-lg bg-gradient-to-br from-[#7895B2] from-50% to-[#E8DFCA]">
                
                        <p class="text-3xl text-left font-bold mb-4">"Discover the highlights: A visual
                            journey through our featured
                            page's top features."</p>
                        <p class="text-2xl text-left mb-10 leading-none">Find the perfect solution to
                            your needs with our
                            supplier's wide range of services.</p>
                  
                </div> <!-- container -->
                <br>
           

    </section>
    {{-- <section class="container mx-auto p-8">
        <div class="grid lg:grid-cols-4 justify-items-center sm:grid-cols-1 gap-y-2 gap-x-0">
            @foreach ($gigs->shuffle()->take(8) as $gig)
                <div
                    class="flex items-center rounded-lg border border-gray-200 bg-white shadow hover:bg-gray-100 sm:max-w-xl sm:flex-row lg:max-w-xs lg:flex-col">
                    <div>
                        <div class="">
                            <a href="{{ route('show.supplier-gig', ['user' => $gig->user, 'gig' => $gig]) }}">
                                <img src="{{ asset('storage/' . $gig->gigUploads->where('type', 'image')->first()->url) }}"
                                    class="object-cover sm:h-auto sm:w-96 sm:rounded-l-lg lg:h-full lg:w-full lg:rounded-t-lg"
                                    alt="...">
                            </a>
                        </div>
                    </div>

                    <div class="justify-between p-4 leading-normal">
                        <div class="mb-4 flex flex-row items-center gap-4">
                            <img class="h-8 w-8 rounded-full object-cover ring-2 ring-white"
                                src="{{ asset('storage/' . $gig->user->avatar) ?? 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60' }}"
                                alt="">
                            <a href="{{ route('show.profile', $gig->user) }}" class="">
                                <p
                                    class="mb-2 cursor-pointer text-sm font-bold tracking-tight text-gray-900 hover:underline">
                                    {{ $gig->user->name }}</p>
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

    <section class="lg:container lg:mx-auto w-full">
        <div class="grid md:grid-cols-4 justify-items-center grid-cols-2 gap-4 p-2 ">
            @foreach ($gigs->shuffle()->take(8) as $gig)
                <div class="w-full max-w-sm bg-white flex flex-col">
                    <!-- Added flex flex-col -->
                    <a href="{{ route('show.supplier-gig', ['user' => $gig->user, 'gig' => $gig]) }}">
                        <img class="rounded-lg flex-grow-0 flex-shrink-0"
                            src="{{ asset('storage/' . $gig->gigUploads->where('type', 'image')->first()->url) }}"
                            alt="product image" />
                    </a>

                    <div class="py-2 px-0 flex-grow flex flex-col justify-between">
                        <!-- Added flex-grow -->
                        <div class="mb-4 flex flex-row items-center gap-4">
                            <img class="h-8 w-8 rounded-full object-cover ring-2 ring-white"
                                src="{{ asset('storage/' . $gig->user->avatar) ?? 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60' }}"
                                alt="">
                            <a href="{{ route('show.profile', $gig->user) }}" class="">
                                <p
                                    class="mb-2 cursor-pointer text-sm font-bold tracking-tight text-gray-900 hover:underline">
                                    {{ $gig->user->name }}</p>
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

</x-guest-layout>
