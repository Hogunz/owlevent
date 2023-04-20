<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded border-b ">
    <div class=" flex flex-wrap items-center justify-between ">
        <div class="flex">
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200   "
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
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
            <form>
                <div class="hidden sm:flex md:flex ">

                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">

                            <button type="submit">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 " fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>

                        </div>
                        <input type="text" id="voice-search"
                            class=" border-transparent text-gray-900 text-sm  focus:ring-[#6DCFF6]/50 focus:border-[#6DCFF6]/50 block w-full pl-10 p-2.5  "
                            placeholder="Search for Categories . . . " required>
                    </div>
                </div>
            </form>
        </div>

        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="items-center flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white ">

                <li>
                    <a href="/featured"
                        class="block py-2 pl-3 pr-4 text-center hover:text-[#6DCFF6] hover:underline hover:underline-offset-8 transition duration-300 rounded md:bg-transparent md:p-0"
                        aria-current="page">Featured</a>
                </li>
                <li class="">
                    <a href="/blog"
                        class="block py-2 pl-3 pr-4 text-center hover:text-[#6DCFF6] hover:underline hover:underline-offset-8 transition duration-300 rounded md:bg-transparent md:p-0">Blog</a>
                </li>
                <li class="">
                    <a href="/supplier-registration"
                        class="block py-2 pl-3 pr-4 text-center hover:text-[#6DCFF6] hover:underline hover:underline-offset-8 transition duration-300 rounded md:bg-transparent md:p-0">Become
                        a Supplier</a>
                </li>
                <li>
                    @if (!auth()->user())
                        <!--LOGIN WITH MODAL -->
                        <button type="button"
                            class="border rounded-full px-8 py-2 text-white bg-[#6DCFF6] hover:bg-[#ABE7FF]"
                            data-modal-target="medium-modal" data-modal-toggle="medium-modal">
                            Login
                        </button>
                    @else
                        <!-- Settings Dropdown -->
                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button
                                        class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                    @endif
                    <!-- Main modal -->
                    <div id="medium-modal" tabindex="-1" aria-hidden="true"
                        class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative    p-4 w-full max-w-md h-full md:h-auto ">
                            <!-- Modal content -->
                            <div class="relative   rounded-lg shadow ">
                                <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                    data-modal-toggle="medium-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="border rounded-lg bg-white py-6 px-6 lg:px-8"
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
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                                placeholder="Email Address" required autofocus />
                                        </div>
                                        <!--EMAIL-->
                                        <!--PASSWORD-->
                                        <div>
                                            <x-label for="password" :value="__('Password')" />
                                            <x-input type="password" name="password" id="password"
                                                placeholder="Password"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                                required autocomplete="current-password" />
                                        </div>
                                        <!--PASSWORD-->
                                        <!--REMEMBER ME-->
                                        <div class="flex justify-between">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">

                                                    <input id="remember_me" name="remember" type="checkbox"
                                                        value=""
                                                        class="w-4 h-4 bg-gray-50 rounded border border-gray-300 focus:ring-3 focus:ring-blue-300  ">
                                                </div>
                                                <label for="remember"
                                                    class="ml-2 text-sm font-medium text-gray-900 ">Remember
                                                    me</label>
                                            </div>
                                            <!--REMEMBER ME-->
                                            <!--Forgot PassWord-->

                                            <a href="" class="text-sm text-blue-700 hover:underline ">Forgot
                                                Password?</a>


                                        </div>
                                        <!--Forgot PassWord-->
                                        <button type="submit"
                                            class="w-full text-white bg-[#82CA9C]/75 hover:bg-[#82CA9C]/50  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center ">Continue</button>
                                        <div class="relative flex py-5 items-center">
                                            <div class="flex-grow border-t border-gray-400"></div>
                                            <span class="flex-shrink mx-4 text-gray-400">OR</span>
                                            <div class="flex-grow border-t border-gray-400"></div>
                                        </div>
                                        <a href="/auth/facebook"
                                            class="  px-7 py-3 rounded-full text-white font-medium text-sm leading-snug uppercase  shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center mb-3"
                                            style="background-color: #3b5998" href="!#" role="button"
                                            data-mdb-ripple="true" data-mdb-ripple-color="light">
                                            <!-- Facebook -->
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                class="w-3.5 h-3.5 mr-2 rounded-full">
                                                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path fill="currentColor"
                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                            </svg>Continue with Facebook
                                        </a>
                                        <a class="px-7 py-3 text-white font-medium text-sm leading-snug uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center"
                                            style="background-color: #55acee" href="!#" role="button"
                                            data-mdb-ripple="true" data-mdb-ripple-color="light">
                                            <!-- Twitter -->
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                class="w-3.5 h-3.5 mr-2">
                                                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path fill="currentColor"
                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                            </svg>Continue with Twitter
                                        </a>
                                        <div class="text-sm font-medium text-gray-500 ">
                                            Not registered? <button type="button"
                                                class="text-blue-700 hover:underline"
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
                        class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto ">
                            <!-- Modal content -->
                            <div class="relative rounded-lg shadow ">
                                <button type="button"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                                    data-modal-toggle="registration-modal">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="border rounded-lg bg-white py-6 px-6 lg:px-8"
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
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                                placeholder="Full Name" required autofocus />
                                        </div>

                                        <!--EMAIL-->
                                        <div>
                                            <x-label for="email" :value="__('Email')" />
                                            <x-input for="email" :value="__('Email')" type="email" name="email"
                                                :value="old('email')" id="email"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                                placeholder="Email Address" required autofocus />
                                        </div>
                                        <!--EMAIL-->
                                        <!--PASSWORD-->
                                        <div>
                                            <x-label for="password" :value="__('Password')" />
                                            <x-input type="password" name="password" id="password"
                                                placeholder="Password"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                                required autocomplete="current-password" />
                                        </div>
                                        <!--PASSWORD-->

                                        <!--CONFIRMED PASSWORD-->
                                        <div>
                                            <x-label for="password" :value="__('Confirm Password')" />
                                            <x-input type="password" name="password_confirmation" id="password"
                                                placeholder="Password"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                                                required autocomplete="current-password" />
                                        </div>
                                        <!--CONFIRMED PASSWORD-->

                                        <!--Forgot PassWord-->
                                        <button type="submit"
                                            class="w-full text-white bg-[#82CA9C]/75 hover:bg-[#82CA9C]/50  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center ">Sign
                                            Up</button>
                                        <div class="relative flex py-5 items-center">
                                            <div class="flex-grow border-t border-gray-400"></div>
                                            <span class="flex-shrink mx-4 text-gray-400">OR</span>
                                            <div class="flex-grow border-t border-gray-400"></div>
                                        </div>
                                        <a class="  px-7 py-3 rounded-full text-white font-medium text-sm leading-snug uppercase  shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center mb-3"
                                            style="background-color: #3b5998" href="!#" role="button"
                                            data-mdb-ripple="true" data-mdb-ripple-color="light">
                                            <!-- Facebook -->
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                class="w-3.5 h-3.5 mr-2 rounded-full">
                                                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path fill="currentColor"
                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                            </svg>Continue with Facebook
                                        </a>
                                        <a class="px-7 py-3 text-white font-medium text-sm leading-snug uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center"
                                            style="background-color: #55acee" href="!#" role="button"
                                            data-mdb-ripple="true" data-mdb-ripple-color="light">
                                            <!-- Twitter -->
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                                class="w-3.5 h-3.5 mr-2">
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
                </li>
            </ul>
        </div>
    </div>
</nav>
