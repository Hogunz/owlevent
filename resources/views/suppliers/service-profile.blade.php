<x-guest-layout>
    <div class="w-full">
        <section>
            <div class="lg:container lg:mx-auto grid gap-4 lg:p-8 p-4 sm:grid-cols-1 lg:grid-cols-2 w-full">
                <!--1st DIV -->

                <div class="w-full">
                    <div class="flex flex-col">
                        <div class="mb-12 lg:order-first order-last">
                            <div class="mb-8 text-3xl font-bold text-[#7895B2]">
                                About Their Services
                            </div>
                            <div class="text-xl font-semibold mb-4 " style="font-family: 'Montserrat', sans-serif;">
                                {{ $gig->title }}
                            </div>
                            <div class="text-lg" style="font-family: 'Montserrat', sans-serif;">
                                <p>{{ $gig->description }}</p>
                            </div>
                        </div>
                        <!-- CAROUSEL -->
                        <div class="container lg:mx-auto mb-8 min-w-full w-full lg:order-last order-first ">
                            <div class="inset-x-0 top-14 max-h-full">
                                <div id="owl-carousel" class="owl-carousel owl-theme ">
                                    <!-- Item 1 -->
                                    @foreach ($gig->gigUploads as $upload)
                                        <div class="item relative h-56 overflow-hidden transition duration-300 ease-in-out scale-100 rounded-lg md:h-96 "
                                            data-modal-target="extralarge-modal" data-modal-toggle="extralarge-modal">
                                            @if (pathinfo($upload->url, PATHINFO_EXTENSION) === 'mp4')
                                                <video class="relative rounded-lg transition duration-300 ease-in-out"
                                                    controls>
                                                    <source src="{{ asset('storage/' . $upload->url) }}"
                                                        type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @else
                                                <img src="{{ asset('storage/' . $upload->url) }}"
                                                    class="relative cursor-pointer rounded-lg transition duration-300 ease-in-out scale-100 hover:scale-105 bg-center bg-cover"
                                                    alt=" {{ $gig->title }}">
                                            @endif
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>

                        {{-- 
                    <div id="extralarge-modal" tabindex="-1"
                        class="fixed inset-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden p-4 md:inset-0 md:h-full">
                        <div class="relative  w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div id="owl-carousel2"
                                class="owl-carousel owl-theme relative rounded-lg bg-transparent shadow w-full ">
                                @foreach ($gig->gigUploads as $upload)
                                    <div class="relative" data-modal-target="extralarge-modal"
                                        data-modal-toggle="extralarge-modal">
                                        @if (pathinfo($upload->url, PATHINFO_EXTENSION) === 'mp4')
                                            <video class="relative rounded-lg transition duration-300 ease-in-out"
                                                controls>
                                                <source src="{{ asset('storage/' . $upload->url) }}" type="video/mp4">
                                                Your browser does not support the video tag.
                                            </video>
                                        @else
                                            <img src="{{ asset('storage/' . $upload->url) }}"
                                                class="relative rounded-lg transition duration-300 ease-in-out object-cover object-center "
                                                alt="{{ $gig->title }}" style="width=200px;height=800;">
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div> --}}

                        <div id="extralarge-modal" tabindex="-1"
                            class="fixed inset-0 z-50 hidden h-[calc(100%-1rem)] w-full overflow-y-auto overflow-x-hidden  md:inset-0 md:h-full ">
                            <div class="relative">
                                <!-- Modal content -->
                                <div class="container lg:mx-auto w-[1011px]">
                                    <div class="inset-x-0">
                                        <div id="owl-carousel2"
                                            class="owl-carousel owl-theme lg:bg-[#F5EFE6] lg:p-8 p-0">
                                            <!-- Item 1 -->
                                            @foreach ($gig->gigUploads as $upload)
                                                <div class="relative rounded-lg " data-modal-target="extralarge-modal"
                                                    data-modal-toggle="extralarge-modal">
                                                    @if (pathinfo($upload->url, PATHINFO_EXTENSION) === 'mp4')
                                                        <video
                                                            class=" cursor-pointer rounded-xl transition duration-300 ease-in-out lg:h-[674px] max-h-full object-scale-down object-center bg-center"
                                                            controls>
                                                            <source src="{{ asset('storage/' . $upload->url) }}"
                                                                type="video/mp4">
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    @else
                                                        <img src="{{ asset('storage/' . $upload->url) }}"
                                                            class=" cursor-pointer rounded-xl transition duration-300 ease-in-out lg:h-[674px] max-h-full object-scale-down object-center bg-center"
                                                            alt=" {{ $gig->title }}">
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                        <a
                                            class="z-40 prev lg:flex hidden items-center justify-center h-10 w-10 bg-[#7895B2] hover:bg-[#324d68] rounded-full opacity-100 shadow-md cursor-pointer absolute left-[1px] top-1/2 transform -translate-y-1/2 -translate-x-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-chevron-left">
                                                <polyline points="15 18 9 12 15 6" style="color:#FAF4F4;"></polyline>
                                            </svg>
                                        </a>
                                        <a
                                            class="z-40 next lg:flex hidden items-center justify-center h-10 w-10 bg-[#7895B2] hover:bg-[#324d68] rounded-full opacity-100 shadow-md cursor-pointer absolute right-[1px] top-1/2 transform -translate-y-1/2 translate-x-1/2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-chevron-right">
                                                <polyline points="9 18 15 12 9 6" style="color:#FAF4F4;"></polyline>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-2 text-2xl font-bold text-[#7895B2]">
                        About This Supplier
                    </div>
                    <div class="justify-left mb-8 flex gap-4 w-full">
                        <div class="">
                            <img class="relative top-0 z-auto h-32 w-32 rounded-full object-cover ring-2 ring-white"
                                src="{{ asset('storage/' . $user->avatar) ?? 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60' }}"
                                alt="">
                        </div>
                        <div class="flex flex-col items-center lg:self-start self-center">
                            <div
                                class="inset-x-0 bottom-0 mb-4 cursor-pointer text-left text-sm font-bold hover:underline">
                                <a href="#" class="href">{{ $gig->user->business_name }}</a>
                            </div>
                            <div class="">
                                <div class="flex items-center justify-center">
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
                                    <span class="mx-1.5 h-1 w-1 rounded-full bg-gray-500 dark:bg-gray-400"></span>
                                    <a href="#reviews"
                                        class="text-sm font-medium text-gray-900 underline hover:no-underline dark:text-white">{{ $gig->comments->count() }}
                                        reviews</a>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="border p-8">
                        <p>{{ $gig->user->description }}
                        </p>
                    </div>

                    <div class="lg:p-8 w-full">
                        <h1
                            class="text-left text-xl pt-8 font-semibold leading-7 lg:text-2xl lg:leading-9 text-[#7895B2]">
                            FAQ's</h1>


                        <div class="mx-auto w-full px-2">
                            <!-- Question 1 -->
                            <hr class="my-8 w-full md:mt-12 md:mb-8 lg:mt-10" />


                            @foreach ($gig->faqs as $faq)
                                <div class="w-full border hover:bg-gray-100 md:px-6">
                                    <div id="mainHeading" class="flex w-full items-center justify-between">
                                        <div class="">
                                            <p
                                                class="flex w-full items-center justify-between p-5 text-left font-medium text-gray-500 focus:ring-4 focus:ring-gray-200">
                                                <span
                                                    class="mr-4 text-lg font-semibold leading-6 text-gray-800 md:text-xl md:leading-5 lg:mr-6 lg:text-2xl lg:leading-4">Q{{ $loop->iteration }}.</span>
                                                {{ $faq->question }}
                                            </p>
                                        </div>
                                        <button aria-label="toggler"
                                            class="focus:outline-none focus:ring-2 focus:ring-gray-800 focus:ring-offset-2"
                                            data-menu>
                                            <img class="transform dark:hidden"
                                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg"
                                                alt="toggler">
                                            <img class="hidden transform dark:block"
                                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                                alt="toggler">
                                        </button>
                                    </div>
                                    <div id="menu" class="mt-6 hidden w-full px-6">
                                        <p
                                            class="mb-2 text-base font-normal leading-6 text-gray-600 dark:text-gray-300">
                                            {{ $faq->answer }}</p>
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-8 flex w-full justify-between p-4 px-2" id="review">
                        <div
                            class="order-first text-left text-xl font-semibold leading-7 lg:text-2xl lg:leading-9 text-[#7895B2]">
                            Reviews</div>

                        <div class="self-center">

                            <button class="inline-flex items-center text-center" id="dropdownBtn"
                                data-dropdown-toggle="star">
                                Filter
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                    fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16"
                                    id="IconChangeColor">
                                    <path
                                        d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"
                                        id="mainIconPathAttribute"></path>
                                </svg>
                            </button>
                            <div id="star"
                                class="z-10 hidden w-44 divide-y divide-gray-100 rounded-lg bg-white shadow">

                                <ul class="p-4 py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                                    <li>
                                        <a href="{{ URL::current() }}" class="block px-4 py-2 hover:bg-gray-100">All
                                            Star</a>
                                    </li>
                                    @for ($i = 1; $i <= 5; $i++)
                                        <li>
                                            <a href="{{ URL::current() }}?rating={{ $i }}"
                                                class="block px-4 py-2 hover:bg-gray-100">{{ $i }}
                                                Star</a>
                                        </li>
                                    @endfor

                                </ul>


                            </div>
                        </div>
                    </div>


                    <hr class="my-8 w-full md:mt-12 md:mb-8 lg:mt-10 px-2" />
                    <section class="py-8 lg:py-16 px-2 w-full ">
                        <div class="lg:mx-auto lg:max-w-2xl lg:px-4 w-full ">
                            <div class="mb-6 flex items-center justify-between w-full ">
                                <h2 class="text-lg font-bold  lg:text-2xl text-[#7895B2]">Reviews
                                    {{ $gig->comments->count() }}
                                </h2>
                            </div>
                            @auth
                                <form action="{{ route('gig.comment', $gig) }}" method="post" class="mb-6 w-full">
                                    @csrf
                                    <div
                                        class="mb-4 rounded-lg rounded-t-lg border border-gray-200 bg-white py-2 px-4 w-full">
                                        <label for="review" class="sr-only">Your review</label>
                                        <textarea id="review" rows="6" name="review"
                                            class="w-full border-0 px-0 text-sm text-gray-900 focus:outline-none focus:ring-0" placeholder="Write a review..."
                                            required></textarea>
                                    </div>
                                    <div class="flex lg:space-x-2 w-full">
                                        @for ($i = 1; $i < 6; $i++)
                                            <div class="flex w-full ">
                                                <input type="radio" id="{{ $i }}" name="ratings" required
                                                    value="{{ $i }}">
                                                <label for="{{ $i }}" class="ml-2">
                                                    <div class="flex w-full ">
                                                        @for ($j = 0; $j < $i; $j++)
                                                            <span>
                                                                <svg aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="star"
                                                                    class="w-4 text-yellow-300" role="img"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 576 512">
                                                                    <path fill="currentColor"
                                                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        @endfor
                                                    </div>
                                                </label>
                                            </div>
                                        @endfor
                                    </div>
                                    <x-button class="mt-2">Post Review</x-button>
                                </form>
                            @endauth
                            @foreach ($gig->comments->reverse() as $comment)
                                <article class="mb-6 rounded-lg bg-white p-6 text-base">
                                    <footer class="mb-2 flex items-center justify-between">
                                        <div class="flex items-center">
                                            <p class="mr-3 inline-flex items-center text-sm text-gray-900">
                                                <img class="mr-2 h-6 w-6 rounded-full"
                                                    src="{{ asset('storage/' . $comment->commenter->avatar) ?? 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60' }}"
                                                    alt="Michael Gough">{{ $comment->commenter->name }}
                                            </p>
                                            <p class="text-sm text-gray-600"><time pubdate datetime="2022-02-08"
                                                    title="February 8th, 2022">{{ $comment->updated_at->diffForHumans() }}</time>
                                            </p>
                                        </div>
                                        <button id="dropdownComment1{{ $comment->id }}Button"
                                            data-dropdown-toggle="dropdownComment1{{ $comment->id }}"
                                            class="inline-flex items-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50"
                                            type="button">
                                            <svg class="h-5 w-5" aria-hidden="true" fill="currentColor"
                                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                </path>
                                            </svg>
                                            <span class="sr-only">Comment settings</span>
                                        </button>
                                        <!-- Dropdown menu -->
                                        @if ($comment->commenter_id == auth()->id())
                                            <div id="dropdownComment1{{ $comment->id }}"
                                                class="z-10 hidden w-36 divide-y divide-gray-100 rounded bg-white shadow">
                                                <ul class="py-1 text-sm text-gray-700"
                                                    aria-labelledby="dropdownMenuIconHorizontalButton">
                                                    <li>
                                                        <!-- Edit Button -->
                                                        <button onclick="showEditForm({{ $comment->id }})"
                                                            class="block w-full px-2 py-2 hover:bg-gray-100">Edit</button>
                                                        {{-- <a href="#" class="block py-2 px-4 hover:bg-gray-100">Edit</a> --}}
                                                    </li>
                                                    <li>
                                                        <!-- Delete Form -->
                                                        <form action="{{ route('gig.comment.destroy', $comment) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="block w-full px-2 py-2 hover:bg-gray-100">Remove</button>
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <a href="#"
                                                            class="block py-2 px-4 hover:bg-gray-100">Report</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        @endif
                                    </footer>
                                    <div class="flex items-center">
                                        Ratings:
                                        @for ($k = 0; $k < $comment->ratings; $k++)
                                            <span>
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                    data-icon="star" class="w-4 text-yellow-300" role="img"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                    <path fill="currentColor"
                                                        d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                                    </path>
                                                </svg>
                                            </span>
                                        @endfor
                                    </div>
                                    <p class="reply-text text-gray-500" id="replyText{{ $comment->id }}">
                                        {{ $comment->text }}</p>
                                    <!-- Edit Form -->
                                    <form class="hidden" id="editReplyForm{{ $comment->id }}"
                                        action="{{ route('gig.comment.update', $comment) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <textarea class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                                            name="review" required>{{ $comment->text }}</textarea>
                                        <x-button type="submit" class="bg-red-600">
                                            Update</x-button>
                                    </form>
                                    {{-- <p class="text-gray-500">{{ $comment->text }}</p> --}}
                                    <div class="mt-4 space-x-4">

                                        @if (Auth::check())
                                            <form method="POST"
                                                action="{{ route('gig.comment.reply', ['comment' => $comment->id]) }}">
                                                @csrf
                                                <div
                                                    class="mb-4 rounded-lg rounded-t-lg border border-gray-200 bg-white py-2 px-4">
                                                    <label for="review" class="sr-only">Your review</label>
                                                    <textarea id="review" rows="1" name="review"
                                                        class="w-full border-0 px-0 text-sm text-gray-900 focus:outline-none focus:ring-0"
                                                        placeholder="Reply to review . . ." required></textarea>
                                                </div>

                                                <!-- Add any additional fields as needed -->
                                                <x-button type="submit"
                                                    class="flex items-center text-sm text-gray-500 hover:underline">
                                                    Reply
                                                </x-button>
                                            </form>
                                        @else
                                            <p class="font-bold text-red-600">Please <a
                                                    href="{{ route('login') }}">login</a> to
                                                reply to the comment.
                                            </p>
                                        @endif
                                    </div>
                                </article>
                                @foreach ($comment->replies->reverse() as $reply)
                                    <article class="mb-6 ml-6 rounded-lg bg-white p-6 text-base lg:ml-12">
                                        <footer class="mb-2 flex items-center justify-between">
                                            <div class="flex items-center">
                                                <p class="mr-3 inline-flex items-center text-sm text-gray-900">
                                                    <img class="mr-2 h-6 w-6 rounded-full"
                                                        src="{{ asset('storage/' . $reply->commenter->avatar) ?? 'https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&auto=format&fit=crop&w=500&q=60' }}"
                                                        alt="">{{ $reply->commenter->name }}
                                                </p>
                                                <p class="text-sm text-gray-600"><time pubdate datetime="2022-02-12"
                                                        title="February 12th, 2022">{{ $reply->updated_at->diffForHumans() }}</time>
                                                </p>
                                            </div>
                                            <button id="dropdownReply{{ $reply->id }}Button"
                                                data-dropdown-toggle="dropdownReply{{ $reply->id }}"
                                                class="inline-flex items-center rounded-lg bg-white p-2 text-center text-sm font-medium text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-50"
                                                type="button">
                                                <svg class="h-5 w-5" aria-hidden="true" fill="currentColor"
                                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                                    </path>

                                                </svg>
                                                <span class="sr-only">Comment settings</span>
                                            </button>
                                            <!-- Dropdown menu -->
                                            @if ($reply->commenter_id == auth()->id())
                                                <div id="dropdownReply{{ $reply->id }}"
                                                    class="z-10 hidden w-36 divide-y divide-gray-100 rounded bg-white shadow">
                                                    <ul class="py-1 text-sm text-gray-700"
                                                        aria-labelledby="dropdownMenuIconHorizontalButton">

                                                        <li>
                                                            <!-- Edit Button -->
                                                            <button onclick="showEditForm({{ $reply->id }})"
                                                                class="block w-full px-2 py-2 hover:bg-gray-100">Edit</button>
                                                        </li>
                                                        <li>
                                                            <!-- Delete Form -->
                                                            <form
                                                                action="{{ route('gig.comment.reply.destroy', $reply) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit"
                                                                    class="block w-full px-2 py-2 hover:bg-gray-100">Remove</button>
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </div>
                                            @endif
                                        </footer>
                                        <p class="reply-text text-gray-500" id="replyText{{ $reply->id }}">
                                            {{ $reply->text }}</p>
                                        <!-- Edit Form -->
                                        <form class="hidden" id="editReplyForm{{ $reply->id }}"
                                            action="{{ route('gig.comment.reply.update', $reply) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <textarea class="w-full rounded-lg border-gray-300 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"
                                                name="review" required>{{ $reply->text }}</textarea>
                                            <x-button type="submit" class="bg-red-600">
                                                Update</x-button>
                                        </form>
                                    </article>
                                @endforeach
                            @endforeach
                        </div>
                    </section>
                </div>
                <!-- 2 -->
                <div class="lg:container ">
                    <div class="sticky inset-x-0 top-14 max-h-full lg:p-0 px-2">
                        @foreach ($gig->gigPackages as $package)
                            <div
                                class="mx-auto mb-5 flex max-w-sm flex-col rounded-lg border border-gray-300  p-6 text-center text-gray-900 shadow-2xl drop-shadow-2xl backdrop-blur-md backdrop-filter">
                                <h1 class="mb-4 font-medium ">Package ({{ $package->package }})</h1>
                                <div class="my-8 flex items-baseline justify-center text-[#7895B2]">
                                    <span class="mr-2 text-4xl font-extrabold">₱
                                        {{ number_format($package->price, 2, '.', ',') }}</span>
                                </div>
                                <p class="font-light text-gray-800 justify-center sm:text-sm">
                                    {!! $package->description !!}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>


            </div>

        </section>
    </div>


</x-guest-layout>

<script>
    function showEditForm(replyId) {
        const replyText = document.getElementById(`replyText${replyId}`);
        const editForm = document.getElementById(`editReplyForm${replyId}`);

        replyText.classList.add('hidden');
        editForm.classList.remove('hidden');
    }
</script>


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

<script>
    // Initialize first carousel
    var owlCarousel2 = $('#owl-carousel2');
    owlCarousel2.owlCarousel({
        dots: false,
        rtl: false,
        loop: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,

            },
            640: {
                items: 1,

            },
            768: {
                items: 3
            },
            992: {
                items: 4
            },
            1200: {
                items: 4

            }
        }
    });

    // Add next and previous button functionality
    $(".next").click(function() {
        owlCarousel2.trigger('next.owl.carousel');
    });

    $(".prev").click(function() {
        owlCarousel2.trigger('prev.owl.carousel');
    });
</script>
<script>
    // Check if the device is a mobile device (you can use a library for better device detection)
    const isMobile = window.matchMedia("(max-width: 768px)").matches;

    // Find all elements with data-modal-target and data-modal-toggle attributes
    const modalElements = document.querySelectorAll('[data-modal-target][data-modal-toggle]');

    // Function to prevent the default modal behavior
    function disableModal(event) {
        if (isMobile) {
            event.preventDefault();
        }
    }

    // Attach an event listener to each modal element to prevent it from opening on mobile
    modalElements.forEach(element => {
        element.addEventListener('click', disableModal);
    });
</script>
