<x-guest-layout>
    <x-guest-layout>


        <div class="bg-white">
            <div class="container mx-auto ">

                <ul data-te-stepper-init
                    class="relative m-0 flex list-none justify-between overflow-hidden p-0 transition-[height] duration-200 ease-in-out">
                    <li data-te-stepper-step-ref data-te-stepper-step-active class="w-[4.5rem] flex-auto">
                        <div data-te-stepper-head-ref
                            class="flex cursor-pointer items-center pl-2 leading-[1.3rem] no-underline after:ml-2 after:h-px after:w-full after:flex-1 after:bg-[#e0e0e0] after:content-[''] hover:bg-[#f9f9f9]   focus:outline-none ">
                            <span data-te-stepper-head-icon-ref
                                class="my-6 mr-2 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-[#40464f]">
                                1
                            </span>
                            <span data-te-stepper-head-text-ref
                                class="font-medium text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content] ">
                                Overview
                            </span>
                        </div>
                        <div data-te-stepper-content-ref
                            class="absolute w-full p-16 transition-all duration-500 ease-in-out">
                            <!--1st content -->
                            <div>
                                <h1 class="font-bold text-4xl pb-6">Overview
                                </h1>
                                <p class="pb-8">test
                                </p>
                                <hr class="pb-8">
                            </div>
                            <div class="grid grid-cols-2 gap-16 text-left">
                                <div class="font-bold text-gray-600 text-lg  uppercase">
                                    Gig title
                                </div>
                                <div>
                                    <textarea maxlength="100"
                                        class=" h-64 form-control block w-full resize px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 shadow-inner rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-non"
                                        id="exampleFormControlTextarea1" rows="3" placeholder="Create a title, maximum of 100 letters" require=""></textarea>
                                </div>
                                <div class="font-bold text-gray-600 text-lg uppercase">Category
                                </div>
                                <div class="text-left">
                                    <select type="" id="default_standard"
                                        class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300  peer"
                                        placeholder=" ">
                                        <option class="text-black" value="">Type of Category</option>
                                        <option class="text-black" value="">sample 1</option>
                                        <option class="text-black" value="">sample 2</option>
                                        <option class="text-black" value="">sample 3</option>
                                    </select>
                                </div>


                                <div class="">
                                </div>
                                <div class="flex justify-end">
                                    <x-button class="">Continue</x-button>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li data-te-stepper-step-ref class="w-[4.5rem] flex-auto">
                        <!-- 2nd Content -->
                        <div data-te-stepper-head-ref
                            class="flex cursor-pointer items-center leading-[1.3rem] no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] after:ml-2 after:h-px after:w-full after:flex-1 after:bg-[#e0e0e0] after:content-[''] hover:bg-[#f9f9f9] focus:outline-none  ">
                            <span data-te-stepper-head-icon-ref
                                class="my-6 mr-2 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-[#40464f]">
                                2
                            </span>
                            <span data-te-stepper-head-text-ref
                                class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content] ">
                                Pricing
                            </span>
                        </div>

                        <div data-te-stepper-content-ref
                            class="absolute left-0 w-full translate-x-[150%] p-16 transition-all duration-500 ease-in-out ">
                            <div>
                                <h1 class="font-bold text-4xl pb-6">Pricing
                                </h1>
                                <p class="pb-8">test
                                </p>
                                <hr class="pb-8">
                            </div>

                            <div class="p-5">

                                <div class="mx-auto ">

                                    <div class="grid grid-cols-2 gap-16 text-left">
                                        <div class="font-bold text-gray-600 text-lg uppercase">Package:
                                        </div>
                                        <div class="text-left">
                                            <select type="" id="default_standard"
                                                class="block py-2.5 px-0 w-full text-sm text-black bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-gray-300  peer"
                                                placeholder=" ">
                                                <option class="text-black" value="">Type of Package</option>
                                                <option class="text-black" value="">Bronze</option>
                                                <option class="text-black" value="">Silver</option>
                                                <option class="text-black" value="">Gold</option>
                                            </select>
                                        </div>

                                        <div class="font-bold text-gray-600 text-lg uppercase">Price:
                                        </div>
                                        <div class="text-left">
                                            <input placeholder="Enter price"
                                                class="border rounded p-2 px-2 w-96 appearance-none outline-none  text-gray-800"
                                                required>
                                        </div>
                                        <div class="font-bold text-gray-600 text-lg  uppercase">
                                            Description
                                        </div>
                                        <div>
                                            <textarea maxlength="500"
                                                class=" h-64 form-control block w-full resize px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 shadow-inner rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-non"
                                                id="exampleFormControlTextarea1" rows="3" placeholder="Describe your package" require=""></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="flex justify-end mt-6">
                                    <x-button class="">Continue</x-button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li data-te-stepper-step-ref class="w-[4.5rem] flex-auto">
                        <!--3rd content -->
                        <div data-te-stepper-head-ref
                            class="flex cursor-pointer items-center leading-[1.3rem] no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] after:ml-2 after:h-px after:w-full after:flex-1 after:bg-[#e0e0e0] after:content-[''] hover:bg-[#f9f9f9] focus:outline-none ">
                            <span data-te-stepper-head-icon-ref
                                class="my-6 mr-2 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-[#40464f]">
                                3
                            </span>
                            <span data-te-stepper-head-text-ref
                                class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content] ">
                                Description & FAQ
                            </span>
                        </div>
                        <div data-te-stepper-content-ref
                            class="absolute left-0 w-full translate-x-[150%] p-16 transition-all duration-500 ease-in-out">
                            <h1 class="font-bold text-4xl pb-6"> Description & FAQ
                            </h1>
                            <p class="pb-8">test</p>
                            <hr class="pb-8">

                            <div class="grid grid-cols-2 gap-16 text-left">
                                <div class="font-bold text-gray-600 text-lg uppercase">Description:
                                </div>
                                <div>
                                    <textarea maxlength="500"
                                        class=" h-64 form-control block w-full resize px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 shadow-inner rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-non"
                                        id="exampleFormControlTextarea1" rows="3" placeholder="Describe your service" require=""></textarea>
                                </div>
                                <div class="font-bold text-gray-600 text-lg uppercase">FAQ:
                                </div>
                                <div class="text-left">
                                    <input placeholder="Add a Question"
                                        class="border rounded p-2 px-2 w-full appearance-none outline-none  text-gray-800"
                                        required>
                                </div>
                                <div>

                                </div>
                                <div class="text-left">
                                    <textarea maxlength="300"
                                        class=" h-64 form-control block w-full resize px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 shadow-inner rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-non"
                                        id="exampleFormControlTextarea1" rows="3" placeholder="Add an Answer" require=""></textarea>
                                </div>
                                <div class="flex flex-row">
                                    <div class="">
                                    </div>
                                </div>
                                <div class="flex justify-end">
                                    <x-button>Continue</x-button>
                                </div>
                            </div>

                        </div>
                    </li>
                    <li data-te-stepper-step-ref class="w-[4.5rem] flex-auto">
                        <!--4th content -->
                        <div data-te-stepper-head-ref
                            class="flex cursor-pointer items-center pr-2 leading-[1.3rem] no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] hover:bg-[#f9f9f9] focus:outline-none  ">
                            <span data-te-stepper-head-icon-ref
                                class="my-6 mr-2 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-[#40464f]">
                                4
                            </span>
                            <span data-te-stepper-head-text-ref
                                class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content] ">
                                Portfolio
                            </span>
                        </div>
                        <div data-te-stepper-content-ref
                            class="absolute left-0 w-full translate-x-[150%] p-16 transition-all duration-500 ease-in-out">
                            <h1 class="font-bold text-4xl pb-6">Portfolio
                            </h1>
                            <p class="pb-8">Ensuring trust and safety is of utmost importance in our community. <br>
                                To
                                maintain
                                the security of your account, kindly verify your email and phone number.</p>
                            <hr class="pb-8">
                            <div class="grid grid-cols-2 gap-16 text-left">

                                <div class="font-bold text-gray-600 text-lg uppercase">
                                    Photos
                                </div>
                                <div class="text-left">
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none da"
                                        id="file_input" type="file">

                                </div>
                                <div class="font-bold text-gray-600 text-lg  uppercase">
                                    Videos
                                </div>
                                <div class="text-left">
                                    <input
                                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                                        id="file_input" type="file">

                                </div>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </x-guest-layout>

</x-guest-layout>
