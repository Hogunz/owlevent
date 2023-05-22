<x-guest-layout>



    <section class="container mx-auto p-8">
        <div class="flex flex-col">
            <div class="text-4xl mb-2 font-bold">All Posts</div>
            <div class="text-base text-black/50 font-bold">This feature is especially useful for blogs that feature <br>
                long-form content, as it allows readers to focus on the sections that are most relevant to them.
            </div>
        </div>
    </section>
    <section class="container mx-auto lg:p-24 sm:p-8">
        <div class="grid lg:grid-cols-3 sm:grid-cols-1 lg:gap-y-12 sm:gap-y-2">
            @foreach ($blogs as $blog)
                <div
                    class=" flex lg:flex-col overflow-hidden sm:flex-row items-center bg-white border border-gray-200 rounded-lg shadow  sm:max-w-xl lg:max-w-sm hover:bg-gray-100">
                    <div class="">
                        <a href="{{ route('blogs.show', $blog->id) }}">
                            <img class="object-cover lg:max-w-sm sm:max-w-xs sm:rounded-l-lg lg:rounded-t-lg hover:scale-105 transition ease-in-out duration-300"
                                src="{{ asset('storage/' . $blog->image) }}" alt="">
                    </div>
                    <div class=" justify-between p-4 leading-normal ">
                        <p class="mb-3 font-bold text-lg text-gray-700">{{ $blog->name }}</p>

                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
</x-guest-layout>
