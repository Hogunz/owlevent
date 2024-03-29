<div class="border rounded-lg bg-white py-6 px-6 lg:px-8 bg-gradient-to-b from-[#F5EFE6] via-[#E8DFCA] to-transparent">
    <div>
        <x-application-logo width="350px" height="70px"></x-application-logo>
    </div>

    <!--LOGIN FORM-->
    <form class="space-y-6" method="POST" action="{{ route('register') }}">
        @csrf
        <!--Full NAME-->
        <div>
            <x-label for="name" :value="__('Full Name')" />
            <x-input for="name" type="name" name="name" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                placeholder="Full Name" required autofocus />
        </div>

        <!--EMAIL-->
        <div>
            <x-label for="email" :value="__('Email')" />
            <x-input for="email" :value="__('Email')" type="email" name="email" :value="old('email')" id="email"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                placeholder="Email Address" required autofocus />
        </div>
        <!--EMAIL-->
        <!--PASSWORD-->
        <div>
            <x-label for="password" :value="__('Password')" />
            <x-input type="password" name="password" id="password" placeholder="Password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                required autocomplete="current-password" />
        </div>
        <!--PASSWORD-->

        <!--PASSWORD-->
        <div>
            <x-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-input type="password" name="password_confirmation" id="password_confirmation"
                placeholder="Confirm Password"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                required autocomplete="current-password" />
        </div>
        <!--PASSWORD-->

        <!--Forgot PassWord-->
        <button type="submit"
            class="w-full text-white bg-[#7895B2] hover:bg-[#7895B2]/75  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center ">Sign
            Up</button>
        <div class="relative flex py-5 items-center">
            <div class="flex-grow border-t border-gray-400"></div>
            <span class="flex-shrink mx-4 text-gray-400">OR</span>
            <div class="flex-grow border-t border-gray-400"></div>
        </div>
        <a class="  px-7 py-3 rounded-full text-white font-medium text-sm leading-snug uppercase  shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center mb-3"
            style="background-color: #3b5998" href="!#" role="button" data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            <!-- Facebook -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="w-3.5 h-3.5 mr-2 rounded-full">
                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path fill="currentColor"
                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
            </svg>Continue with Facebook
        </a>
        <a class="px-7 py-3 text-white font-medium text-sm leading-snug uppercase rounded-full shadow-md hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full flex justify-center items-center"
            style="background-color: #55acee" href="!#" role="button" data-mdb-ripple="true"
            data-mdb-ripple-color="light">
            <!-- Twitter -->
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-3.5 h-3.5 mr-2">
                <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                <path fill="currentColor"
                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
            </svg>Continue with Twitter
        </a>
    </form>
</div>
