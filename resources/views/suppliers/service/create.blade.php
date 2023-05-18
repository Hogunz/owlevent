<x-guest-layout>
    <div class="container mx-auto bg-white" x-data="gig()">
        <ul data-te-stepper-init
            class="relative m-0 flex min-h-full list-none justify-between overflow-hidden p-0 transition-[height] duration-200 ease-in-out">
            <li data-te-stepper-step-ref data-te-stepper-step-active class="w-[4.5rem] flex-auto">
                <div data-te-stepper-head-ref
                    class="flex cursor-pointer items-center pl-2 leading-[1.3rem] no-underline after:ml-2 after:h-px after:w-full after:flex-1 after:bg-[#e0e0e0] after:content-[''] hover:bg-[#f9f9f9] focus:outline-none">
                    <span data-te-stepper-head-icon-ref
                        class="my-6 mr-2 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-[#40464f]">
                        1
                    </span>
                    <span data-te-stepper-head-text-ref
                        class="font-medium text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content]">
                        Overview
                    </span>
                </div>
                <div data-te-stepper-content-ref class="absolute w-full p-16 transition-all duration-500 ease-in-out">
                    <!--1st content -->
                    <div>
                        <h1 class="pb-6 text-4xl font-bold">Overview
                        </h1>
                        <p class="pb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis
                            mattis
                            ex, in tristique libero. Integer urna ante, dapibus ac maximus vel, cursus quis sem.
                            Proin
                            turpis arcu, vehicula non tortor ut, sodales luctus erat. Maecenas ligula libero,
                            feugiat
                            eget malesuada id, imperdiet sagittis tellus. Maecenas consectetur eget nisl laoreet
                            sollicitudin. Donec hendrerit mi et risus consectetur dapibus. Sed congue, ex id viverra
                            mattis, augue eros condimentum orci, a volutpat augue leo a massa. Praesent pulvinar
                            urna
                            lorem, vel vulputate velit laoreet mollis. Quisque venenatis consectetur leo efficitur
                            tempor. Aliquam congue mi posuere, pharetra odio eget, posuere enim. Vivamus cursus sem
                            at
                            imperdiet ornare. Aliquam ac enim massa. Sed et semper massa, sit amet consequat lectus.
                        </p>
                        <hr class="pb-8">
                    </div>
                    <div class="grid grid-cols-2 gap-16 text-left">
                        <div class="text-lg font-bold uppercase text-gray-600">
                            Gig title
                        </div>
                        <div>
                            <textarea x-model="title" :maxLength="titleLimit"
                                class="form-control focus:outline-non m-0 block h-20 w-full resize rounded border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 shadow-inner transition ease-in-out focus:border-gray-600 focus:bg-white focus:text-gray-700"
                                id="exampleFormControlTextarea1" placeholder="Create a title, maximum of 100 letters" require=""></textarea>
                            <div class="text-right" x-text="title.length + `/` + titleLimit"></div>
                        </div>
                        <div class="text-lg font-bold uppercase text-gray-600">Category
                        </div>
                        <div class="text-left">
                            <select type="" id="default_standard" x-model="category_id"
                                class="peer block w-full appearance-none border-0 border-b-2 border-gray-300 bg-transparent py-2.5 px-0 text-sm text-black focus:border-gray-300 focus:outline-none focus:ring-0"
                                placeholder=" ">
                                <option value="" selected hidden>Type of Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="text-lg font-bold uppercase text-gray-600">Description:
                        </div>
                        <div>
                            <textarea :maxlength="descriptionLimit" x-model="description"
                                class="form-control focus:outline-non m-0 block h-64 w-full resize rounded border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 shadow-inner transition ease-in-out focus:border-gray-600 focus:bg-white focus:text-gray-700"
                                id="exampleFormControlTextarea1" rows="3" placeholder="Describe your service" require=""></textarea>
                            <div class="text-right" x-text="description.length + `/` + descriptionLimit"></div>
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
                    class="flex cursor-pointer items-center leading-[1.3rem] no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] after:ml-2 after:h-px after:w-full after:flex-1 after:bg-[#e0e0e0] after:content-[''] hover:bg-[#f9f9f9] focus:outline-none">
                    <span data-te-stepper-head-icon-ref
                        class="my-6 mr-2 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-[#40464f]">
                        2
                    </span>
                    <span data-te-stepper-head-text-ref
                        class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content]">
                        Pricing
                    </span>
                </div>

                <div data-te-stepper-content-ref
                    class="absolute left-0 w-full translate-x-[150%] p-16 transition-all duration-500 ease-in-out">
                    <div>
                        <h1 class="pb-6 text-4xl font-bold">Pricing
                        </h1>
                        <p class="pb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis
                            mattis ex, in tristique libero. Integer urna ante, dapibus ac maximus vel, cursus quis
                            sem. Proin turpis arcu, vehicula non tortor ut, sodales luctus erat. Maecenas ligula
                            libero, feugiat eget malesuada id, imperdiet sagittis tellus. Maecenas consectetur eget
                            nisl laoreet sollicitudin. Donec hendrerit mi et risus consectetur dapibus. Sed congue,
                            ex id viverra mattis, augue eros condimentum orci, a volutpat augue leo a massa.
                            Praesent pulvinar urna lorem, vel vulputate velit laoreet mollis. Quisque venenatis
                            consectetur leo efficitur tempor. Aliquam congue mi posuere, pharetra odio eget, posuere
                            enim. Vivamus cursus sem at imperdiet ornare. Aliquam ac enim massa. Sed et semper
                            massa, sit amet consequat lectus.
                        </p>
                        <hr class="pb-8">
                    </div>

                    <div class="p-5">
                        <div class="mx-auto grid grid-cols-3 gap-4">
                            <template x-for="(package, index) in packages" :key="`p` + index">
                                <div class="relative flex flex-col space-y-4 rounded border-2 p-3">
                                    <div class="absolute top-0 right-1">
                                        <button type="button"
                                            class="rounded bg-red-500 p-1 text-xs text-white hover:bg-red-300"
                                            x-show="packages.length > 1" @click="removePackage(index)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-3 w-3">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <label for=""
                                            class="text-lg font-bold uppercase text-gray-600">Package</label>
                                        <input type="text" x-model="package.package"
                                            class="w-full appearance-none rounded border p-2 px-2 text-gray-800 outline-none">
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <label for=""
                                            class="text-lg font-bold uppercase text-gray-600">Price</label>
                                        <input type="text" x-model="package.price"
                                            class="w-full appearance-none rounded border p-2 px-2 text-gray-800 outline-none">
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <label for=""
                                            class="text-lg font-bold uppercase text-gray-600">Description</label>
                                        <textarea x-model="package.description"
                                            class="form-control focus:outline-non m-0 block h-64 w-full resize rounded border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 shadow-inner transition ease-in-out focus:border-gray-600 focus:bg-white focus:text-gray-700"
                                            id="exampleFormControlTextarea1"></textarea>
                                    </div>
                                </div>
                            </template>

                            <button type="button"
                                class="rounded border-2 border-dashed p-6 text-xl font-bold uppercase tracking-wide text-gray-500"
                                @click="addPackage()" x-show="packages.length < 3">Add Package</button>


                        </div>

                        <div class="mt-6 flex justify-end">
                            <x-button class="">Continue</x-button>
                        </div>
                    </div>
                </div>
            </li>
            <li data-te-stepper-step-ref class="w-[4.5rem] flex-auto">
                <!--3rd content -->
                <div data-te-stepper-head-ref
                    class="flex cursor-pointer items-center leading-[1.3rem] no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] after:ml-2 after:h-px after:w-full after:flex-1 after:bg-[#e0e0e0] after:content-[''] hover:bg-[#f9f9f9] focus:outline-none">
                    <span data-te-stepper-head-icon-ref
                        class="my-6 mr-2 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-[#40464f]">
                        3
                    </span>
                    <span data-te-stepper-head-text-ref
                        class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content]">
                        Frequently Asked Questions
                    </span>
                </div>
                <div data-te-stepper-content-ref
                    class="absolute left-0 w-full translate-x-[150%] p-16 transition-all duration-500 ease-in-out">
                    <h1 class="pb-6 text-4xl font-bold">Frequently Asked Questions
                    </h1>
                    <p class="pb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis mattis
                        ex, in tristique libero. Integer urna ante, dapibus ac maximus vel, cursus quis sem. Proin
                        turpis arcu, vehicula non tortor ut, sodales luctus erat. Maecenas ligula libero, feugiat
                        eget malesuada id, imperdiet sagittis tellus. Maecenas consectetur eget nisl laoreet
                        sollicitudin. Donec hendrerit mi et risus consectetur dapibus. Sed congue, ex id viverra
                        mattis, augue eros condimentum orci, a volutpat augue leo a massa. Praesent pulvinar urna
                        lorem, vel vulputate velit laoreet mollis. Quisque venenatis consectetur leo efficitur
                        tempor. Aliquam congue mi posuere, pharetra odio eget, posuere enim. Vivamus cursus sem at
                        imperdiet ornare. Aliquam ac enim massa. Sed et semper massa, sit amet consequat lectus.
                    </p>
                    <hr class="pb-8">
                    <div class="flex flex-col gap-4">
                        <template x-for="(faq, index) in faqs" :key="`f` + index">
                            <div class="relative flex flex-col space-y-4 border-2 p-2">
                                <div class="absolute top-0 left-2">
                                    <button type="button"
                                        class="rounded bg-red-500 p-1 text-xs text-white hover:bg-red-300"
                                        x-show="faqs.length > 1" @click="removeFaq(index)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-3 w-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                        </svg>
                                    </button>
                                </div>
                                <div class="grid grid-cols-2">
                                    <label class="text-lg font-bold uppercase text-gray-600">Question</label>
                                    <input type="text" x-model="faq.question"
                                        class="w-full appearance-none rounded border p-2 px-2 text-gray-800 outline-none">
                                </div>
                                <div class="grid grid-cols-2">
                                    <label class="text-lg font-bold uppercase text-gray-600">Answer</label>
                                    <textarea x-model="faq.answer"
                                        class="form-control focus:outline-non m-0 block h-20 w-full resize rounded border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-1.5 text-base font-normal text-gray-700 shadow-inner transition ease-in-out focus:border-gray-600 focus:bg-white focus:text-gray-700"
                                        id="exampleFormControlTextarea1"></textarea>
                                </div>
                            </div>
                        </template>
                        <button type="button"
                            class="rounded border-2 border-dashed p-6 text-xl font-bold uppercase tracking-wide text-gray-500"
                            @click="addFaq()">Add Faq</button>
                    </div>
                </div>
            </li>
            <li data-te-stepper-step-ref class="w-[4.5rem] flex-auto">
                <!--4th content -->
                <div data-te-stepper-head-ref
                    class="flex cursor-pointer items-center pr-2 leading-[1.3rem] no-underline before:mr-2 before:h-px before:w-full before:flex-1 before:bg-[#e0e0e0] before:content-[''] hover:bg-[#f9f9f9] focus:outline-none">
                    <span data-te-stepper-head-icon-ref
                        class="my-6 mr-2 flex h-[1.938rem] w-[1.938rem] items-center justify-center rounded-full bg-[#ebedef] text-sm font-medium text-[#40464f]">
                        4
                    </span>
                    <span data-te-stepper-head-text-ref
                        class="text-neutral-500 after:flex after:text-[0.8rem] after:content-[data-content]">
                        Portfolio
                    </span>
                </div>
                <div data-te-stepper-content-ref
                    class="absolute left-0 w-full translate-x-[150%] p-16 transition-all duration-500 ease-in-out">
                    <h1 class="pb-6 text-4xl font-bold">Portfolio
                    </h1>
                    <p class="pb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis mattis
                        ex, in tristique libero. Integer urna ante, dapibus ac maximus vel, cursus quis sem. Proin
                        turpis arcu, vehicula non tortor ut, sodales luctus erat. Maecenas ligula libero, feugiat
                        eget malesuada id, imperdiet sagittis tellus. Maecenas consectetur eget nisl laoreet
                        sollicitudin. Donec hendrerit mi et risus consectetur dapibus. Sed congue, ex id viverra
                        mattis, augue eros condimentum orci, a volutpat augue leo a massa. Praesent pulvinar urna
                        lorem, vel vulputate velit laoreet mollis. Quisque venenatis consectetur leo efficitur
                        tempor. Aliquam congue mi posuere, pharetra odio eget, posuere enim. Vivamus cursus sem at
                        imperdiet ornare. Aliquam ac enim massa. Sed et semper massa, sit amet consequat lectus.
                    </p>
                    <hr class="pb-8">
                    <div class="grid grid-cols-5 gap-4">
                        <template x-for="(upload, index) in files" :key="`u` + index">
                            <div class="relative">
                                <div class="absolute top-0 left-2">
                                    <button type="button"
                                        class="rounded bg-red-500 p-1 text-xs text-white hover:bg-red-300"
                                        @click="removeFile(index)">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-3 w-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                        </svg>
                                    </button>
                                </div>
                                <div x-show="upload.file.type.startsWith('image/')">
                                    <img :src="upload.previewUrl" alt="Uploaded Image">
                                </div>
                                <div x-show="upload.file.type.startsWith('video/')">
                                    <video :src="upload.previewUrl" controls></video>
                                </div>
                            </div>
                        </template>
                        <input type="file" accept="image/*,video/*" class="hidden" x-ref="file"
                            @change="addFile(event)">
                        <button type="button" @click="$refs.file.click()"
                            class="h-60 w-full rounded border-2 border-dashed p-6 text-xl font-bold uppercase tracking-wide text-gray-500">
                            Add Upload
                        </button>
                    </div>
                </div>
            </li>
        </ul>

    </div>
</x-guest-layout>

<script>
    function readFileData(file) {
        return new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.onload = () => resolve(reader.result);
            reader.onerror = reject;
            reader.readAsDataURL(file);
        });
    }

    function gig() {
        return {
            title: "",
            titleLimit: 100,
            category_id: "",
            packages: [{
                package: '',
                price: '',
                description: '',
            }],
            description: "",
            descriptionLimit: 500,
            faqs: [{
                question: '',
                answer: '',
            }],
            files: [],
            checkLimit() {
                return this.title > this.titleLimit
            },
            addPackage() {
                this.packages.push({
                    package: '',
                    price: '',
                    description: '',
                })
            },
            removePackage(i) {
                this.packages.splice(i, 1)
            },
            addFaq() {
                this.faqs.push({
                    question: '',
                    answer: '',
                })
            },
            removeFaq(i) {
                this.faqs.splice(i, 1)
            },
            async addFile(event) {

                const files = event.target.files
                for (let i = 0; i < files.length; i++) {
                    this.files.push({
                        file: files[i],
                        previewUrl: await readFileData(files[i])
                    })
                }

            },
            removeFile(i) {
                this.files.splice(i, 1)
            }
        }
    }
</script>
