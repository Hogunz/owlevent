<x-guest-layout>

    <div class="lg:container lg:mx-auto flex justify-between">
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
            <div class="lg:container max-w-max lg:mx-auto lg:p-8 ">
                <div class="max-w-screen-xl px-4 mx-auto">
                    <div class="mr-auto place-self-center lg:col-span-7">
                        <h1
                            class="max-w-2xl mb-12 font-extrabold tracking-tight leading-none text-lg md:text-xl lg:text-5xl text-justify ">
                            {{ $blog->name }}</h1>
                        <div class=" lg:mt-0 lg:col-span-5 lg:flex ">
                            <img class="mb-4 rounded-3xl" src="{{ asset('storage/' . $blog->image) }}"
                                alt="{{ $blog->name }}">
                        </div>

                        <div class="text-justify">
                            <p class="text-xs p-2">By:<span class="underline text-black">{{ Auth::user()->name }}</span>
                                {{ $blog->created_at }}</p>
                            <div
                                class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 xl:grid-cols-1  gap-4 mb-6">
                                <div class="">
                                    <p class="max-w-2xl mb-6 font-base text-gray-500 lg:mb-8 md:text-sm lg:text-base">
                                        {!! $blog->description !!}
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- 3 -->
        <div class="sticky top-0">
            <aside class="hidden lg:block lg:w-80 sticky inset-x-0 top-14 max-h-full" aria-labelledby="sidebar-label">
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

                </div>
            </aside>
        </div>

    </div>
</x-guest-layout>
