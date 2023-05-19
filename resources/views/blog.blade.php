<x-guest-layout>
    <div class="bg-white">
        <div class="flex justify-between container mx-auto ">
            <!-- 1 -->
            <div class="">
                <aside class="hidden lg:block lg:w-80 sticky inset-x-0 top-14 max-h-full">
                    <div class="sticky top-36">
                        <h3 class="sr-only">Sidebar</h3>
                        <div
                            class="p-6 pb-4 mt-6 mb-6 font-medium text-gray-500 bg-gradient-to-r from-[#F5EFE6] to-[#E8DFCA] border border-gray-200 rounded-lg  ">
                            <h4 class="mb-4 font-bold text-gray-900 uppercase ">Become an Author</h4>
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
                                <a class="text-white block text-center bg-[#7895B2] hover:bg-[#7895B2]/75 focus:ring-4 focus:ring-[#7895B2]/50 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none w-full"
                                    href="{{ route('blogs.create') }}">Post</a>
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            <!-- 2 -->

            <div>
                <div class="container max-w-max mx-auto p-8 ">
                    <div class="max-w-screen-xl px-4 mx-auto">
                        <div class="grid grid-cols-1 gap-4 divide-y">
                            @foreach ($blogs->shuffle()->take(1) as $blog)
                                <div class="mr-auto place-self-center lg:col-span-7">
                                    <div class=" lg:mt-0 lg:col-span-5 lg:flex ">
                                        <img class="mb-4" src="{{ asset('storage/' . $blog->image) }}" alt="">
                                    </div>
                                    <div class="text-justify ">
                                        <a href="{{ route('blogs.show', $blog->id) }}" class="href">
                                            <h1
                                                class="max-w-2xl mb-4  font-base tracking-tight leading-none text-lg sm:text-2xl xl:text-4xl ">
                                                {{ $blog->name }}</h1>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <section class=" sm:bg-white">
                            <div class="container mx-auto text-black text-2xl mb-4 pl-4 pt-12  justify-between flex">
                                <div>Blogs</div>
                                @isset($blog)
                                    <a href="{{ route('blogs.showM', $blog->id) }}"
                                        class="p-2 text-base text-center text-[#7895B2]">See All</a>
                                @else
                                    <p>No blog posts found.</p>
                                @endisset
                            </div>
                        </section>
                        <div class="grid grid-cols-2 gap-4">
                            @foreach ($blogs as $blog)
                                <div>
                                    <div class="mr-auto place-self-center lg:col-span-7">
                                        <div class=" lg:mt-0 lg:col-span-5 lg:flex overflow-hidden">
                                            <img class="mb-4 transition duration-300 ease-in-out hover:scale-110"
                                                src="{{ asset('storage/' . $blog->image) }}" alt="">
                                        </div>
                                        <div class="text-justify ">
                                            <a href="{{ route('blogs.show', $blog->id) }}" class="href">
                                                <div class="flex flex-col">
                                                    <div>
                                                        {{ $blog->created_at }}
                                                    </div>
                                                    <div>
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
                <aside class="hidden lg:block lg:w-80 sticky inset-x-0 top-14 mb-6 max-h-full"
                    aria-labelledby="sidebar-label">
                    <div class=" ">
                        <h3 id="sidebar-label" class="sr-only">Sidebar</h3>
                        <div
                            class="p-6 pb-4 mt-6 mb-6 font-medium text-gray-500 bg-gradient-to-r from-[#F5EFE6] to-[#E8DFCA] border border-gray-200 rounded-lg  ">
                            <h4 class="mb-4 font-bold text-gray-900 uppercase">Recommended topics</h4>
                            <div class="flex flex-wrap">
                                @foreach ($categories as $category)
                                    <a class="bg-[#7895B2] hover:bg-[#7895B2]/75 text-white text-sm font-medium mr-2 px-2.5 py-0.5 rounded mb-2"
                                        href="">{{ $category->name }}</a>
                                @endforeach
                            </div>

                        </div>
                        <div
                            class="p-6 pb-4 mt-6 mb-6 font-medium text-gray-500 bg-gradient-to-r from-[#F5EFE6] to-[#E8DFCA] border border-gray-200 rounded-lg   ">
                            <ul class="space-y-4 divide-y divide-[#AEBDCA] text-gray-500">
                                @foreach ($blogs->shuffle()->take(5) as $blog)
                                    <li class="pt-2">
                                        <a class="flex items-start border rounded-lg border-[#AEBDCA] drop-shadow-2xl p-2"
                                            href="{{ route('blogs.show', $blog->id) }}">
                                            <div class="mr-3 shrink-0"><img class="object-cover h-24 w-full "
                                                    src="{{ asset('storage/' . $blog->image) }}" alt=""></div>

                                            <div class="flex flex-col space-y-4 truncate">
                                                <div class="mr-3 ">
                                                    <span
                                                        class="block text-sm text-gray-900">{{ $blog->created_at }}</span>
                                                </div>
                                                <div class="mr-3 "><span class="text-sm ">{{ $blog->name }}</span>
                                                </div>
                                                <div
                                                    class="-mr-1 inline-flex items-center justify-center  text-sm font-light text-center text-[#7895B2] hover:underline hover:underline-offset-2 hover:text-[#F69679]">
                                                    Read More
                                                    <svg class="w-3 h-3 ml-2 " fill="currentColor" viewBox="0 0 20 20"
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
