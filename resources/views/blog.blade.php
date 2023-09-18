<x-guest-layout>
    <div class="bg-white">
        <div class="lg:container lg:mx-auto flex justify-between">
            <!-- 1 -->
            <div class="">
                <aside class="sticky inset-x-0 top-14 hidden max-h-full lg:block lg:w-80">
                    <div class="sticky top-36">
                        <h3 class="sr-only">Sidebar</h3>
                        <div
                            class="mt-6 mb-6 rounded-lg border border-gray-200 bg-gradient-to-r from-[#F5EFE6] to-[#E8DFCA] p-6 pb-4 font-medium text-gray-500">
                            <h4 class="mb-4 font-bold uppercase text-gray-900">Become an Author</h4>
                            <ul class="space-y-4 text-gray-500">
                                <li>
                                    <a class="flex items-start" href="">
                                        <div class="mr-3"><span class="text-sm"> Would you like to make a contribution
                                                to
                                                this blog by writing guest posts?<br>To proceed, please get in touch
                                                with us
                                                and provide a resume of your previous writing articles.</span></div>
                                    </a>
                                </li>
                                <a class="block w-full rounded-lg bg-[#7895B2] px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#7895B2]/75 focus:outline-none focus:ring-4 focus:ring-[#7895B2]/50"
                                    href="{{ route('blogs.create') }}">Post</a>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- 2 -->

            <div>
                <div class="lg:container lg:mx-auto max-w-max lg:p-8 p-2">
                    <div class="w-full max-w-2xl mx-auto">
                        <div class="max-w-full">
                            @foreach ($blogs->shuffle()->take(1) as $blog)
                                <div class="mr-auto place-self-center">
                                    <div class=" lg:mt-0 lg:flex">
                                        <img class="mb-4" src="{{ asset('storage/' . $blog->image) }}"
                                            alt="{{ $blog->name }}">
                                    </div>
                                    <div class="text-justify">
                                        <a href="{{ route('blogs.show', $blog->id) }}" class="href">
                                            <h1
                                                class="font-base mb-4 max-w-2xl text-lg leading-none tracking-tight sm:text-2xl xl:text-4xl">
                                                {{ $blog->name }}</h1>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <section class="sm:bg-white">
                            <div class="container mx-auto mb-4 flex justify-between pl-4 pt-12 text-2xl text-black">
                                <div>Blogs</div>
                                @isset($blog)
                                    <a href="{{ route('blogs.showM', $blog->id) }}"
                                        class="p-2 text-center text-base text-[#7895B2]">See All</a>
                                @else
                                    <p>No blog posts found.</p>
                                @endisset
                            </div>
                        </section>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach ($blogs as $blog)
                                <div>
                                    <div class="mr-auto place-self-center lg:col-span-7">
                                        <div class="overflow-hidden lg:col-span-5 lg:mt-0 lg:flex">
                                            <img class="mb-4 transition duration-300 ease-in-out hover:scale-110"
                                                src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->name }}">
                                        </div>
                                        <div class="text-justify">
                                            <a href="{{ route('blogs.show', $blog->id) }}" class="href">
                                                <div class="flex flex-col">
                                                    <div class="underline italic text-sm">
                                                        {{ $blog->created_at }}
                                                    </div>
                                                    <div class="font-bold">
                                                        {{ $blog->name }}
                                                    </div>
                                                </div>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 -->
            <div class="sticky top-0">
                <aside class="sticky inset-x-0 top-14 mb-6 hidden max-h-full lg:block lg:w-80"
                    aria-labelledby="sidebar-label">
                    <div class="">
                        <h3 id="sidebar-label" class="sr-only">Sidebar</h3>
                        <div
                            class="mt-6 mb-6 rounded-lg border border-gray-200 bg-gradient-to-r from-[#F5EFE6] to-[#E8DFCA] p-6 pb-4 font-medium text-gray-500">
                            <h4 class="mb-4 font-bold uppercase text-gray-900">Recommended topics</h4>
                            <div class="flex flex-wrap">
                                @foreach ($categories as $category)
                                    <a class="mr-2 mb-2 rounded bg-[#7895B2] px-2.5 py-0.5 text-sm font-medium text-white hover:bg-[#7895B2]/75"
                                        href="{{ route('blogs.categorized', ['category_id' => $category->id]) }}">{{ $category->name }}</a>
                                @endforeach
                            </div>

                        </div>
                        <div
                            class="mt-6 mb-6 rounded-lg border border-gray-200 bg-gradient-to-r from-[#F5EFE6] to-[#E8DFCA] p-6 pb-4 font-medium text-gray-500">
                            <ul class="space-y-4 divide-y divide-[#AEBDCA] text-gray-500">
                                @foreach ($blogs->shuffle()->take(5) as $blog)
                                    <li class="pt-2">
                                        <a class="flex items-start rounded-lg border border-[#AEBDCA] p-2 drop-shadow-2xl"
                                            href="{{ route('blogs.show', $blog->id) }}">
                                            <div class="mr-3 shrink-0"><img
                                                    class="h-24 w-full object-cover object-center"
                                                    src="{{ asset('storage/' . $blog->image) }}"
                                                    alt="{{ $blog->name }}"></div>

                                            <div class="flex flex-col space-y-4">

                                                <div class="mr-3"><span
                                                        class="line-clamp-2 text-sm">{{ $blog->name }}</span>
                                                </div>
                                                <div
                                                    class="-mr-2 inline-flex items-center justify-center text-center text-sm font-light text-[#7895B2] hover:text-[#F69679] hover:underline hover:underline-offset-2">
                                                    Read More
                                                    <svg class="ml-2 h-3 w-3" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</x-guest-layout>
