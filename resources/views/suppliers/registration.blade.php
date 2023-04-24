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
                            Personal Info
                        </span>
                    </div>
                    <div data-te-stepper-content-ref
                        class="absolute w-full p-16 transition-all duration-500 ease-in-out">
                        <!--1st content -->
                        <div>
                            <h1 class="font-bold text-4xl pb-6">Personal Information
                            </h1>
                            <p class="pb-8">Provide some details about yourself. These details will be visible
                                <br>on your public profile, allowing potential buyers to gain a better understanding of
                                you.
                            </p>
                            <hr class="pb-8">
                        </div>
                        <div class="grid grid-cols-2 gap-16 text-left">
                            <div class="font-bold text-gray-600 text-lg uppercase">Business
                                Owner
                            </div>
                            <div class="text-left">
                                <input placeholder="First Name"
                                    class="border rounded p-2 px-2 w-64 appearance-none outline-none  text-gray-800"
                                    required>
                                <input placeholder="Last Name"
                                    class="border rounded p-2 px-2 w-64 appearance-none outline-none  text-gray-800"
                                    required>
                            </div>
                            <div class="font-bold text-gray-600 text-lg uppercase">Business
                                Name
                            </div>
                            <div class="text-left">
                                <input placeholder="Enter your Business Name"
                                    class="border rounded p-2 px-2 w-96 appearance-none outline-none  text-gray-800"
                                    required>
                            </div>
                            <div class="font-bold text-gray-600 text-lg  uppercase">Address
                            </div>
                            <div class="text-left">
                                <input placeholder="Enter your Address"
                                    class="border rounded p-2 px-2 w-96 appearance-none outline-none  text-gray-800"
                                    required>
                            </div>
                            <div class="font-bold text-gray-600 text-lg  uppercase">
                                Description
                            </div>
                            <div>
                                <textarea maxlength="500"
                                    class=" h-64 form-control block w-full resize px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 shadow-inner rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-non"
                                    id="exampleFormControlTextarea1" rows="3" placeholder="Tell me about yourself or your work" require=""></textarea>
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
                            Professional Info
                        </span>
                    </div>

                    <div data-te-stepper-content-ref
                        class="absolute left-0 w-full translate-x-[150%] p-16 transition-all duration-500 ease-in-out ">
                        <div>
                            <h1 class="font-bold text-4xl pb-6">Professional Information
                            </h1>
                            <p class="pb-8">This is your opportunity to showcase your strengths to potential buyers
                                <br>
                                and
                                detail how you acquired your skills, certifications, and experience.
                            </p>
                            <hr class="pb-8">
                        </div>

                        <div class="p-5">

                            <div class="mx-auto ">
                                <div>

                                    <div class="font-bold text-gray-600 text-lg leading-8 uppercase h-6 mx-2 mt-3 mb-6">
                                        Your Occupation</div>

                                    <div class="grid grid-rows-3 grid-flow-col gap-4 mt-4 ">
                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Event Coordinator or Planner
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Event Stylist
                                                </label>
                                            </div>
                                        </div>


                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Caterer
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Hair & Make Up Artist
                                                </label>
                                            </div>
                                        </div>


                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Hotels & Venues
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Fashion Designers
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Baker
                                                </label>
                                            </div>
                                        </div>


                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Emcees or Host
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Graphic Designer
                                                </label>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Entertainer (Band, Musicians & Singers)
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Skills -->
                                    <div
                                        class="font-bold text-gray-600 text-lg leading-8 uppercase h-6 mx-2 mt-10 mb-6">
                                        Skills</div>


                                    <div class="grid grid-rows-3 grid-flow-col gap-4 mt-4 ">
                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Articles & Blog Posts
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Email Copy
                                                </label>
                                            </div>
                                        </div>


                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Press Releases
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Research & Summaries
                                                </label>
                                            </div>
                                        </div>


                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Technical Writing
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Website Content
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Business Names & Slogan
                                                </label>
                                            </div>
                                        </div>


                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Game Writing
                                                </label>
                                            </div>
                                        </div>

                                        <div>
                                            <div class="form-check">
                                                <input
                                                    class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="flexCheckDefault">
                                                    Product Descriptions
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
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
                            Link Accounts
                        </span>
                    </div>
                    <div data-te-stepper-content-ref
                        class="absolute left-0 w-full translate-x-[150%] p-16 transition-all duration-500 ease-in-out">
                        <h1 class="font-bold text-4xl pb-6">Link Your Account
                        </h1>
                        <p class="pb-8">Investing time in verifying and linking your accounts can enhance your
                            credibility
                            and <br> assist us in providing you with additional business opportunities. <br> Rest
                            assured
                            that your
                            information will be kept confidential and secure.</p>
                        <hr class="pb-8">

                        <div class="grid grid-cols-2 gap-16 text-left">
                            <div class="flex items-center flex-row">
                                <div class="h-8 w-8">
                                    <img src="img/icon/google.png" alt="">
                                </div>
                                <div class="font-bold text-gray-600 pl-2 text-xl">Google
                                </div>
                            </div>
                            <div class="">
                                <button
                                    class="bg-[#6DCFF6] hover:bg-[#6DCFF6]/75 text-white font-semibold py-2 px-4 border border-[#6DCFF6] rounded">
                                    Connect
                                </button>
                            </div>
                            <div class="flex flex-row">
                                <div class="h-8 w-8">
                                    <img src="img/icon/facebook.png" alt="">
                                </div>
                                <div class="font-bold text-gray-600 pl-2 text-xl">Facebook
                                </div>
                            </div>
                            <div class="">
                                <button
                                    class="bg-[#6DCFF6] hover:bg-[#6DCFF6]/75 text-white font-semibold py-2 px-4 border border-[#6DCFF6] rounded">
                                    Connect
                                </button>
                            </div>
                            <div class="flex flex-row">
                                <div class="h-8 w-8">
                                    <img src="img/icon/twitter.png" alt="">
                                </div>
                                <div class="font-bold text-gray-600 pl-2 text-xl">Twitter
                                </div>
                            </div>
                            <div class="">
                                <button
                                    class="bg-[#6DCFF6] hover:bg-[#6DCFF6]/75 text-white font-semibold py-2 px-4 border border-[#6DCFF6] rounded">
                                    Connect
                                </button>
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
                            Account Security
                        </span>
                    </div>
                    <div data-te-stepper-content-ref
                        class="absolute left-0 w-full translate-x-[150%] p-16 transition-all duration-500 ease-in-out">
                        <h1 class="font-bold text-4xl pb-6">Account Security
                        </h1>
                        <p class="pb-8">Ensuring trust and safety is of utmost importance in our community. <br> To
                            maintain
                            the security of your account, kindly verify your email and phone number.</p>
                        <hr class="pb-8">
                        <div class="grid grid-cols-2 gap-16 text-left">
                            <div class="font-bold text-gray-600 text-lg uppercase">
                                Email Address
                            </div>
                            <div class="text-left">
                                <input placeholder="Enter your Email Address"
                                    class="border rounded p-2 px-2 w-96 appearance-none outline-none  text-gray-800"
                                    {{ auth()->user() ? 'readonly' : '' }} value="{{ auth()->user()->email ?? '' }}"
                                    required>
                            </div>
                            <div class="font-bold text-gray-600 text-lg uppercase">
                                Government-Issued ID Card
                            </div>
                            <div class="text-left">


                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none da"
                                    id="file_input" type="file">

                            </div>
                            <div class="font-bold text-gray-600 text-lg  uppercase">
                                Take a Selfie Photo
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
