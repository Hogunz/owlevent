<nav class="rounded border-b border-gray-200 bg-white px-2 py-2.5 sm:px-4">
    <div class="flex flex-wrap items-center justify-between">
        <div class="flex">
            <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                aria-controls="drawer-navigation"
                class="ml-3 inline-flex items-center rounded-lg p-2 text-sm text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 md:hidden"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <a href="/" class="flex items-center">
                <x-application-logo></x-application-logo>
            </a>
        </div>
        <div class="grow">
            <form action="{{ route('show.filtered') }}" method="get" class="">
                <div class="hidden sm:flex md:flex">

                    <div class="relative w-full">
                        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">

                            <button type="submit">
                                <svg aria-hidden="true" class="h-5 w-5 text-gray-500" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>

                        <input type="text" name="search"
                            class="block w-full border-transparent p-2.5 pl-10 text-sm text-gray-900 focus:border-[#7895B2]/50 focus:ring-[#7895B2]/50"
                            placeholder="Search for Categories . . . " required>
                    </div>
                </div>
            </form>
        </div>

        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="mt-4 flex flex-col items-center rounded-lg border border-gray-100 bg-gray-50 p-4 md:mt-0 md:flex-row md:space-x-8 md:border-0 md:bg-white md:text-sm md:font-medium">

                <li>
                    <a href="/featured"
                        class="block rounded py-2 pl-3 pr-4 text-center transition duration-300 hover:text-[#7895B2] hover:underline hover:underline-offset-8 md:bg-transparent md:p-0"
                        aria-current="page">Featured</a>
                </li>
                <li class="">
                    <a href="/blog"
                        class="block rounded py-2 pl-3 pr-4 text-center transition duration-300 hover:text-[#7895B2] hover:underline hover:underline-offset-8 md:bg-transparent md:p-0">Blog</a>
                </li>

                @if (!optional(auth()->user())->hasRole('Supplier'))
                    <li class="">
                        <a href="/become-a-supplier"
                            class="block rounded py-2 pl-3 pr-4 text-center transition duration-300 hover:text-[#7895B2] hover:underline hover:underline-offset-8 md:bg-transparent md:p-0">Become
                            a Supplier</a>
                    </li>
                @endif
                <li>
                    @if (!auth()->user())
                        <!--LOGIN WITH MODAL -->
                        <button type="button"
                            class="rounded-lg border bg-[#7895B2] px-8 py-2 text-white hover:bg-[#7895B2]/75"
                            data-modal-target="medium-modal" data-modal-toggle="medium-modal">
                            Login
                        </button>
                    @else
                        <!-- Settings Dropdown -->
                        <div class="hidden sm:ml-6 sm:flex sm:items-center">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:border-gray-300 hover:text-gray-700 focus:border-gray-300 focus:text-gray-700 focus:outline-none">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    @if (auth()->user()->hasRole(['Admin', 'Operations']))
                                        <div>
                                            <x-dropdown-link :href="route('dashboard')">Dashboard</x-dropdown-link>
                                        </div>
                                    @endif
                                    @if (!auth()->user()->hasRole(['Admin', 'Operations', 'Writer']))
                                        <div>
                                            <x-dropdown-link :href="route('my-profile')">My Profile</x-dropdown-link>
                                        </div>
                                    @endif
                                    <div>
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-dropdown-link
                                                onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                {{ __('Log Out') }}
                                            </x-dropdown-link>
                                        </form>
                                    </div>

                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endif
                    <!-- Main modal -->
                    <div id="medium-modal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 sm:z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative h-full w-full max-w-md p-4 sm:h-auto">
                            <!-- Modal content -->
                            <div class="relative rounded-lg shadow">
                                <button type="button"
                                    class="absolute top-3 right-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                                    data-modal-toggle="medium-modal">
                                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                @include('layouts.auth.login')
                            </div>
                        </div>
                    </div>
                    <!-- Registration Modal -->
                    <div id="registration-modal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 right-0 left-0 z-50 hidden h-modal w-full items-center justify-center overflow-y-auto overflow-x-hidden sm:inset-0 sm:h-full">
                        <div class="relative h-full w-full max-w-md p-4 sm:h-auto">
                            <!-- Modal content -->
                            <div class="relative rounded-lg shadow">
                                <button type="button"
                                    class="absolute top-3 right-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                                    data-modal-toggle="registration-modal">
                                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                @include('layouts.auth.register')
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


<!-- drawer component -->
<div id="drawer-navigation"
    class="fixed top-0 left-0 z-40 h-screen w-96 -translate-x-full overflow-y-auto bg-white p-4 transition-transform"
    tabindex="-1" aria-labelledby="drawer-navigation-label">
    <h5 id="drawer-navigation-label" class="text-base font-semibold uppercase text-gray-500">Menu
    </h5>
    <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
        class="absolute top-2.5 right-2.5 inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white">
        <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
        </svg>
        <span class="sr-only">Close menu</span>
    </button>
    <div class="overflow-y-auto py-4">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="#" class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100">
                    <svg aria-hidden="true"
                        class="h-6 w-6 text-gray-500 transition duration-75 group-hover:text-gray-900"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="/featured" class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100">
                    <svg aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z">
                        </path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Featured</span>

                </a>
            </li>
            <li>
                <a href="/blog" class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100">
                    <svg aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                        </path>
                        <path
                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                        </path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Blog</span>

                </a>
            </li>
            <li>
                <a href="/become-a-supplier" class="flex items-center rounded-lg p-2 text-gray-900 hover:bg-gray-100">
                    <svg aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-3 flex-1 whitespace-nowrap">Become a Supplier</span>
                </a>
            </li>
            <li>

                <button type="button"
                    class="group flex w-full items-center rounded-lg p-2 text-gray-900 transition duration-75 hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                    <svg aria-hidden="true"
                        class="h-6 w-6 flex-shrink-0 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                            clip-rule="evenodd"></path>
                    </svg>
                    @if (!auth()->user())
                        <span
                            class="ml-3 flex-1 whitespace-nowrap text-left text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:border-gray-300 hover:text-gray-700 focus:border-gray-300 focus:text-gray-700 focus:outline-none"
                            data-modal-target="medium-modal" data-modal-toggle="medium-modal">Sign In</span>
                    @else
                        <span
                            class="ml-3 flex-1 whitespace-nowrap text-left text-sm font-medium text-gray-500 transition duration-150 ease-in-out hover:border-gray-300 hover:text-gray-700 focus:border-gray-300 focus:text-gray-700 focus:outline-none">{{ Auth::user()->name }}</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    @endif
                </button>
                <ul id="dropdown-example" class="hidden space-y-2 py-2">
                    <li>
                        <div>
                            <x-dropdown-link :href="route('my-profile')">My Profile</x-dropdown-link>
                        </div>
                    </li>

                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </li>
                </ul>

                <!-- Main modal -->
                <div id="medium-modal" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 right-0 left-0 z-50 hidden h-modal w-full items-center justify-center overflow-y-auto overflow-x-hidden sm:inset-0 sm:h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow">
                            <button type="button"
                                class="absolute top-3 right-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                                data-modal-toggle="medium-modal">
                                <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="rounded-lg border bg-white py-6 px-6 lg:px-8"
                                style="background-image: linear-gradient(to bottom, rgba(109, 207, 246, 0.75), transparent);
                            ">

                                <div>
                                    <x-application-logo width="350px" height="70px"></x-application-logo>
                                </div>
                                </h3>
                                <!--LOGIN FORM-->
                                <form class="space-y-6" method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <!--EMAIL-->
                                    <div>
                                        <x-label for="email" :value="__('Email')" />
                                        <x-input for="email" :value="__('Email')" type="email" name="email"
                                            :value="old('email')" id="email"
                                            class="block w-full rounded-full border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                            placeholder="Email Address" required autofocus />
                                    </div>
                                    <!--EMAIL-->
                                    <!--PASSWORD-->
                                    <div>
                                        <x-label for="password" :value="__('Password')" />
                                        <x-input type="password" name="password" id="password"
                                            placeholder="Password"
                                            class="block w-full rounded-full border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                            required autocomplete="current-password" />
                                    </div>
                                    <!--PASSWORD-->
                                    <!--REMEMBER ME-->
                                    <div class="flex justify-between">
                                        <div class="flex items-start">
                                            <div class="flex h-5 items-center">

                                                <input id="remember_me" name="remember" type="checkbox"
                                                    value=""
                                                    class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-blue-300">
                                            </div>
                                            <label for="remember"
                                                class="ml-2 text-sm font-medium text-gray-900">Remember
                                                me</label>
                                        </div>
                                        <!--REMEMBER ME-->
                                        <!--Forgot PassWord-->

                                        <a href="" class="text-sm text-blue-700 hover:underline">Forgot
                                            Password?</a>


                                    </div>
                                    <!--Forgot PassWord-->
                                    <button type="submit"
                                        class="w-full rounded-full bg-[#82CA9C]/75 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#82CA9C]/50 focus:outline-none focus:ring-4 focus:ring-blue-300">Continue</button>
                                    <div class="relative flex items-center py-5">
                                        <div class="flex-grow border-t border-gray-400"></div>
                                        <span class="mx-4 flex-shrink text-gray-400">OR</span>
                                        <div class="flex-grow border-t border-gray-400"></div>
                                    </div>
                                    <a href="/auth/facebook"
                                        class="mb-3 flex w-full items-center justify-center rounded-full px-7 py-3 text-sm font-medium uppercase leading-snug text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                                        style="background-color: #3b5998" href="!#" role="button"
                                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                                        <!-- Facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                            class="mr-2 h-3.5 w-3.5 rounded-full">
                                            <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path fill="currentColor"
                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                        </svg>Continue with Facebook
                                    </a>
                                    <a class="flex w-full items-center justify-center rounded-full px-7 py-3 text-sm font-medium uppercase leading-snug text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                                        style="background-color: #55acee" href="!#" role="button"
                                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                                        <!-- Twitter -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="mr-2 h-3.5 w-3.5">
                                            <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path fill="currentColor"
                                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                        </svg>Continue with Twitter
                                    </a>
                                    <div class="text-sm font-medium text-gray-500">
                                        Not registered? <button type="button" class="text-blue-700 hover:underline"
                                            data-modal-target="registration-modal"
                                            data-modal-toggle="registration-modal">Register
                                            Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Registration Modal -->
                <div id="registration-modal" tabindex="-1" aria-hidden="true"
                    class="fixed top-0 right-0 left-0 z-50 hidden h-modal w-full items-center justify-center overflow-y-auto overflow-x-hidden sm:inset-0 sm:h-full">
                    <div class="relative h-full w-full max-w-md p-4 sm:h-auto">
                        <!-- Modal content -->
                        <div class="relative rounded-lg shadow">
                            <button type="button"
                                class="absolute top-3 right-2.5 ml-auto inline-flex items-center rounded-lg bg-transparent p-1.5 text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900"
                                data-modal-toggle="registration-modal">
                                <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="rounded-lg border bg-white py-6 px-6 lg:px-8"
                                style="background-image: linear-gradient(to bottom, rgba(109, 207, 246, 0.75), transparent);
                          ">

                                <div>
                                    <x-application-logo width="350px" height="70px"></x-application-logo>
                                </div>
                                </h3>
                                <!--LOGIN FORM-->
                                <form class="space-y-6" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!--Full NAME-->
                                    <div>
                                        <x-label for="name" />
                                        <x-input for="name" type="name" name="name" id="name"
                                            class="block w-full rounded-full border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                            placeholder="Full Name" required autofocus />
                                    </div>

                                    <!--EMAIL-->
                                    <div>
                                        <x-label for="email" :value="__('Email')" />
                                        <x-input for="email" :value="__('Email')" type="email" name="email"
                                            :value="old('email')" id="email"
                                            class="block w-full rounded-full border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                            placeholder="Email Address" required autofocus />
                                    </div>
                                    <!--EMAIL-->
                                    <!--PASSWORD-->
                                    <div>
                                        <x-label for="password" :value="__('Password')" />
                                        <x-input type="password" name="password" id="password"
                                            placeholder="Password"
                                            class="block w-full rounded-full border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                            required autocomplete="current-password" />
                                    </div>
                                    <!--PASSWORD-->

                                    <!--CONFIRMED PASSWORD-->
                                    <div>
                                        <x-label for="password" :value="__('Confirm Password')" />
                                        <x-input type="password" name="password_confirmation" id="password"
                                            placeholder="Password"
                                            class="block w-full rounded-full border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500"
                                            required autocomplete="current-password" />
                                    </div>
                                    <!--CONFIRMED PASSWORD-->

                                    <!--Forgot PassWord-->
                                    <button type="submit"
                                        class="w-full rounded-full bg-[#82CA9C]/75 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-[#82CA9C]/50 focus:outline-none focus:ring-4 focus:ring-blue-300">Sign
                                        Up</button>
                                    <div class="relative flex items-center py-5">
                                        <div class="flex-grow border-t border-gray-400"></div>
                                        <span class="mx-4 flex-shrink text-gray-400">OR</span>
                                        <div class="flex-grow border-t border-gray-400"></div>
                                    </div>
                                    <a class="mb-3 flex w-full items-center justify-center rounded-full px-7 py-3 text-sm font-medium uppercase leading-snug text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                                        style="background-color: #3b5998" href="!#" role="button"
                                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                                        <!-- Facebook -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                            class="mr-2 h-3.5 w-3.5 rounded-full">
                                            <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path fill="currentColor"
                                                d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                        </svg>Continue with Facebook
                                    </a>
                                    <a class="flex w-full items-center justify-center rounded-full px-7 py-3 text-sm font-medium uppercase leading-snug text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg"
                                        style="background-color: #55acee" href="!#" role="button"
                                        data-mdb-ripple="true" data-mdb-ripple-color="light">
                                        <!-- Twitter -->
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                            class="mr-2 h-3.5 w-3.5">
                                            <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path fill="currentColor"
                                                d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                        </svg>Continue with Twitter
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            </li>
        </ul>
    </div>
</div>
