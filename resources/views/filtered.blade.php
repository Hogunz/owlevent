<x-guest-layout>


    <section class="container mx-auto p-8">

        <h1 class="">Search Results for "{{ $query }}"</h1>
        @if ($gigs->isEmpty())
            <p class="text-5xl">No results found.</p>
        @else
            <section class="container mx-auto p-8">
                <div class="grid justify-items-center gap-y-2 gap-x-0 sm:grid-cols-1 lg:grid-cols-4">
                    @foreach ($gigs as $gig)
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
                                    <a href="{{ route('my-profile') }}" class="href">
                                        <p
                                            class="mb-2 cursor-pointer text-sm font-bold tracking-tight text-gray-900 hover:underline">
                                            {{ $gig->title }}</p>
                                    </a>
                                </div>
                                <p class="line-clamp-3 mb-3 font-normal text-gray-700">Category:
                                    {{ $gig->category->name }}</p>
                                <p class="line-clamp-3 mb-3 font-normal text-gray-700">{{ $gig->description }}
                                </p>
                                <div class="">
                                    <div class="justify-left mb-0 flex items-center">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-4 text-yellow-300" role="img"
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
                </div>
            </section>


        @endif
    </section>
</x-guest-layout>
