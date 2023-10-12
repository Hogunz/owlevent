<x-guest-layout>
    <div class="bg-white" x-data="registration()">
        <div class="lg:container lg:mx-auto ">
            <ul data-te-stepper-init
                class="relative m-0 flex list-none justify-between overflow-hidden p-0 transition-[height] duration-200 ease-in-out text-sm w-full">
                <li data-te-stepper-step-ref data-te-stepper-step-active class="w-[4.5rem] flex-auto ">
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
                        class="absolute w-full lg:p-16 p-4 transition-all duration-500 ease-in-out">
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
                        <div class="grid md:grid-cols-2 md:gap-16 grid-cols-1 gap-2 text-left">
                            <div class="font-bold text-gray-600 text-lg uppercase">Business
                                Owner
                            </div>
                            <div class="text-left ">
                                <input placeholder="First Name" x-model="first_name"
                                    class="border rounded p-2 px-2 mb-2 w-64 appearance-none outline-none  text-gray-800"
                                    required>
                                <input placeholder="Last Name" x-model="last_name"
                                    class="border rounded p-2 px-2 w-64 appearance-none outline-none  text-gray-800"
                                    required>
                            </div>
                            <div class="font-bold text-gray-600 text-lg uppercase">Business
                                Name
                            </div>
                            <div class="text-left">
                                <input placeholder="Enter your Business Name" x-model="business_name"
                                    class="border rounded p-2 px-2 lg:w-96 w-full appearance-none outline-none  text-gray-800"
                                    required>
                            </div>
                            <div class="font-bold text-gray-600 text-lg uppercase">Address
                            </div>
                            <div class="text-left">
                                <input placeholder="Enter your Full Address" x-model="address"
                                    class="border rounded p-2 px-2 lg:w-96 w-full appearance-none outline-none text-gray-800"
                                    required>
                            </div>
                            <div class="font-bold text-gray-600 text-lg uppercase">
                                Description
                            </div>
                            <div>
                                <textarea maxlength="500" x-model="description"
                                    class=" h-64 form-control block w-full resize px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 shadow-inner rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-gray-600 focus:outline-non"
                                    id="exampleFormControlTextarea1" rows="3" placeholder="Tell me about yourself or your work" require=""></textarea>
                            </div>
                            <div class="">
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
                        class="absolute left-0 w-full translate-x-[150%] lg:p-16 p-4 transition-all duration-500 ease-in-out ">
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

                                    <div class="grid lg:grid-cols-4 grid-cols-1 gap-4 mt-4">
                                        @foreach ($occupations as $occupation)
                                            <div>
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                        type="checkbox" value="{{ $occupation->id }}"
                                                        x-model.number="occupations"
                                                        id="{{ 'occupation-' . $occupation->id }}">
                                                    <label class="form-check-label inline-block text-gray-800"
                                                        for="{{ 'occupation-' . $occupation->id }}">
                                                        {{ $occupation->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                    <!--Skills -->
                                    <div
                                        class="font-bold text-gray-600 text-lg leading-8 uppercase h-6 mx-2 mt-10 mb-6">
                                        Skills</div>
                                    <div class="grid lg:grid-cols-4 grid-cols-1 gap-4 mt-4">
                                        @foreach ($skills as $skill)
                                            <div>
                                                <div class="form-check">
                                                    <input
                                                        class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                        type="checkbox" value="{{ $skill->id }}"
                                                        x-model.number="skills" id="{{ 'skill-' . $skill->id }}">
                                                    <label class="form-check-label inline-block text-gray-800"
                                                        for="{{ 'skill-' . $skill->id }}">
                                                        {{ $skill->name }}
                                                    </label>
                                                </div>
                                            </div>
                                        @endforeach
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
                        class="absolute left-0 w-full translate-x-[150%] lg:p-16 p-4 transition-all duration-500 ease-in-out">
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
                                    <img src="images/icon/google.png" alt="">
                                </div>
                                <div class="font-bold text-gray-600 pl-2 text-xl">Google
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <template x-if="google_id && google_id.length > 0">
                                    <button
                                        class="border
                                    rounded-lg px-8 py-2 text-black bg-transparent hover:border-black">
                                        Linked</button>
                                </template>

                                <template x-if="!google_id || google_id.length === 0">
                                    <button
                                        class="border rounded-lg px-8 py-2 text-black bg-transparent  hover:border-black"
                                        @click="event.preventDefault();connect('google')">Connect</button>
                                </template>

                            </div>
                            <div class="flex flex-row">
                                <div class="h-8 w-8">
                                    <img src="/images/icon/facebook.png" alt="">
                                </div>
                                <div class="font-bold text-gray-600 pl-2 text-xl">Facebook
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <template x-if="fb_id && fb_id.length > 0">
                                    <button
                                        class="border rounded-lg px-8 py-2 text-black bg-transparent  hover:border-black">
                                        Linked</button>
                                </template>

                                <template x-if="!fb_id || fb_id.length === 0">
                                    <button
                                        class="border rounded-lg px-8 py-2 text-black bg-transparent  hover:border-black"
                                        @click="event.preventDefault();connect('facebook')">Connect</button>
                                </template>
                            </div>
                            <div class="flex flex-row">
                                <div class="h-8 w-8">
                                    <img src="/images/icon/twitter.png" alt="">
                                </div>
                                <div class="font-bold text-gray-600 pl-2 text-xl">Twitter
                                </div>
                            </div>
                            <div class="flex justify-end">
                                <template x-if="twitter_id && twitter_id.length > 0">
                                    <button
                                        class="border rounded-lg px-8 py-2 text-black bg-transparent  hover:border-black">
                                        Linked</button>
                                </template>

                                <template x-if="!twitter_id || twitter_id.length === 0">
                                    <button
                                        class="border rounded-lg px-8 py-2 text-black bg-transparent  hover:border-black"
                                        onclick="event.preventDefault();">Connect</button>
                                </template>
                            </div>
                            <div class="flex flex-row">
                                <div class="">
                                </div>
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
                        class="absolute left-0 w-full translate-x-[150%] lg:p-16 p-4 transition-all duration-500 ease-in-out">
                        <h1 class="font-bold text-4xl pb-6">Account Security
                        </h1>
                        <p class="pb-8">Ensuring trust and safety is of utmost importance in our community. <br> To
                            maintain
                            the security of your account, kindly verify your email and phone number.</p>
                        <hr class="pb-8">
                        <div class="grid md:grid-cols-2 md:gap-16 grid-cols-1 gap-2 text-left">
                            <div class="font-bold text-gray-600 text-lg uppercase">
                                Email Address
                            </div>
                            <div class="text-left">
                                <input placeholder="Enter your Email Address"
                                    class="border rounded p-2 px-2 w-96 appearance-none outline-none  text-gray-800"
                                    x-model="email" required>
                            </div>
                            <div class="font-bold text-gray-600 text-lg uppercase">
                                Government-Issued ID Card
                            </div>
                            <div class="text-left">
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none da"
                                    id="file_input" accept="image/*" type="file"
                                    @change="id_card = $event.target.files[0]">

                            </div>
                            <div class="font-bold text-gray-600 text-lg  uppercase">
                                Take a Selfie Photo
                            </div>
                            <div class="text-left">
                                <input
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                                    id="file_input" accept="image/*" type="file"
                                    @change="selfie = $event.target.files[0]">
                            </div>

                        </div>
                        <div class="flex justify-end mt-5">
                            <x-button @click="submit()">Submit</x-button>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    @push('script')
        <script>
            function registration() {
                return {
                    //first page
                    first_name: '',
                    last_name: '',
                    business_name: '',
                    address: '',
                    description: '',
                    //second page
                    occupations: [],
                    skills: [],
                    //third page
                    google_id: null,
                    fb_id: null,
                    twitter_id: null,
                    //fourth page
                    email: null,
                    id_card: null,
                    selfie: null,
                    drivers: {
                        google: '',
                        facebook: ''
                    },
                    init() {
                        // this.email = "{{ auth()->user()->email }}"
                        // this.google_id = "{{ auth()->user()->google_id }}"
                        // this.fb_id = "{{ auth()->user()->fb_id }}"
                        // this.twitter_id = "{{ auth()->user()->twitter_id }}"
                        const userPromise = Promise.resolve(this.getUser())
                        userPromise.then((response) => {
                            this.google_id = response.data.google_id
                            this.fb_id = response.data.fb_id
                            this.email = response.data.email
                        })

                    },
                    submit() {
                        const forms = new FormData()

                        forms.append('first_name', this.first_name)
                        forms.append('last_name', this.last_name)
                        forms.append('last_name', this.last_name)
                        forms.append('business_name', this.business_name)
                        forms.append('address', this.address)
                        forms.append('description', this.description)
                        forms.append('occupations', JSON.stringify(this.occupations))
                        forms.append('skills', JSON.stringify(this.skills))
                        forms.append('id_card', this.id_card)
                        forms.append('selfie_photo', this.selfie)

                        var url = '/supplier/register'
                        axios.post(url, forms, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }).then((response) => {
                            // console.log(response);
                            location.href = "/";
                        }).catch((error) => {
                            console.log(error.response)
                        })

                    },
                    connect(driver) {
                        var url = '/auth/' + driver

                        const socialWindow = window.open(url, '_blank', 'height=500,width=500')
                        socialWindow.focus()

                        var popupTick = setInterval(() => {
                            if (socialWindow.closed) {
                                clearInterval(popupTick)
                                //get users social id
                                const userPromise = new Promise((res, rej) => {
                                    res(this.getUser())
                                })
                                userPromise.then(response => {
                                    switch (driver) {
                                        case 'google':
                                            this.google_id = response.data.google_id
                                            break
                                        case 'facebook':
                                            this.fb_id = response.data.fb_id
                                    }
                                })
                                // location.reload()
                            }
                        }, 500);
                    },
                    async getUser() {
                        return await axios.get('/get-user')

                    }
                }

            }
        </script>
    @endpush
</x-guest-layout>
