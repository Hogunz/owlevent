<x-guest-layout>
    <section>
        <div class="container mx-auto mt-6 bg-white" x-data="gig()">
            <ol id="stepper"
                class="flex w-full items-center text-center text-sm font-medium text-gray-500 dark:text-gray-400 sm:text-base">
                <li id="step1"
                    class="after:border-1 flex cursor-pointer items-center pl-2 leading-[1.3rem] text-[#7895B2] after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 dark:after:border-gray-700 sm:after:inline-block sm:after:content-[''] md:w-full xl:after:mx-10">
                    <span
                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                        <svg aria-hidden="true" class="mr-2 h-4 w-4 sm:h-5 sm:w-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Overview </span>
                    </span>
                </li>
                <li id="step2"
                    class="after:border-1 flex cursor-pointer items-center after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 after:content-[''] dark:after:border-gray-700 sm:after:inline-block md:w-full xl:after:mx-10">
                    <span
                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                        <span class="mr-2">2</span>
                        <span>Pricing </span>
                    </span>
                </li>
                <li id="step3"
                    class="after:border-1 flex cursor-pointer items-center after:mx-6 after:hidden after:h-1 after:w-full after:border-b after:border-gray-200 after:content-[''] dark:after:border-gray-700 sm:after:inline-block md:w-full xl:after:mx-10">
                    <span
                        class="flex items-center after:mx-2 after:text-gray-200 after:content-['/'] dark:after:text-gray-500 sm:after:hidden">
                        <span class="mr-2">3</span>
                        Frequently <span class="hidden sm:ml-2 sm:inline-flex">Asked</span><span
                            class="hidden sm:ml-2 sm:inline-flex">Question</span>
                    </span>
                </li>
                <li id="step4" class="flex cursor-pointer items-center">
                    <span class="mr-2">4</span>
                    Portfolio
                </li>

            </ol>

            <div id="content1" class="w-full p-16 transition-all duration-500 ease-in-out">
                <!--1st content -->
                <div>
                    <h1 class="pb-6 text-4xl font-bold">Overview
                    </h1>
                    <p class="pb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis

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
                        <select type="" id="default_standard" x-model.number="category_id"
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
                </div>

            </div>


            <div id="content2" class="w-full p-16 transition-all duration-500 ease-in-out">
                <div>
                    <h1 class="pb-6 text-4xl font-bold">Pricing
                    </h1>
                    <p class="pb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis

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
                                    <input type="text" x-model.number="package.price"
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
                </div>
            </div>

            <div id="content3" class="w-full p-16 transition-all duration-500 ease-in-out">
                <h1 class="pb-6 text-4xl font-bold">Frequently Asked Questions
                </h1>
                <p class="pb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis mattis

                </p>
                <hr class="pb-8">
                <div class="flex flex-col space-y-4 p-6">
                    <template x-for="(faq, index) in faqs" :key="`f` + index">
                        <div class="relative flex flex-col space-y-4 border-2 p-3">
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
                                <label for=""
                                    class="text-lg font-bold uppercase text-gray-600">Question</label>
                                <input type="text" x-model="faq.question"
                                    class="w-full appearance-none rounded border p-2 px-2 text-gray-800 outline-none">
                            </div>
                            <div class="grid grid-cols-2">
                                <label for="" class="text-lg font-bold uppercase text-gray-600">Answer</label>
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

            <div id="content4" class="w-full p-16 transition-all duration-500 ease-in-out">
                <h1 class="pb-6 text-4xl font-bold">Portfolio
                </h1>
                <p class="pb-8">Ensuring trust and safety is of utmost importance in our community. <br>
                    To
                    maintain
                    the security of your account, kindly verify your email and phone number.</p>
                <hr class="pb-8">
                {{-- <div class="grid grid-cols-5 gap-4">
                    <template x-for="(upload, index) in files" :key="`u` + index">
                        <div class="relative">
                            <template x-if="('id' in upload)">
                                <div>
                                    <div class="absolute top-0 left-2">
                                        <button type="button"
                                            class="rounded bg-red-500 p-1 text-xs text-white hover:bg-red-300"
                                            @click="removeFile(index)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="h-3 w-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 12h-15" />
                                            </svg>
                                        </button>
                                    </div>
                                    <img :src="`/storage/` + upload.url" alt="">
                                </div>
                            </template>
                            <template x-if="!('id' in upload)">
                                <div>
                                    <div class="absolute top-0 left-2">
                                        <button type="button"
                                            class="rounded bg-red-500 p-1 text-xs text-white hover:bg-red-300"
                                            @click="removeFile(index)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="h-3 w-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 12h-15" />
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

                        </div>
                    </template>
                    <input type="file" accept="image/*,video/*" class="hidden" x-ref="file"
                        @change="addFile(event)">
                    <button type="button" @click="$refs.file.click()"
                        class="h-60 w-full rounded border-2 border-dashed p-6 text-xl font-bold uppercase tracking-wide text-gray-500">
                        Add Upload
                    </button>
                </div> --}}

                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <div class="text-2xl font-semibold">Pictures</div>
                        <div class="grid grid-cols-3 gap-2">
                            <template x-for="(currentImage, index) in currentImages" :key="`cU` + index">
                                <div class="relative">
                                    <div class="absolute top-0 left-2">
                                        <button type="button"
                                            class="rounded bg-red-500 p-1 text-xs text-white hover:bg-red-300"
                                            @click="removeImage(index, true)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="h-3 w-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 12h-15" />
                                            </svg>
                                        </button>
                                    </div>
                                    <img :src="`/storage/` + currentImage.url" alt="Uploaded Image">
                            </template>
                            <template x-for="(upload, index) in images" :key="`i` + index">
                                <div class="relative">
                                    <div class="absolute top-0 left-2">
                                        <button type="button"
                                            class="rounded bg-red-500 p-1 text-xs text-white hover:bg-red-300"
                                            @click="removeImage(index)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="h-3 w-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 12h-15" />
                                            </svg>
                                        </button>
                                    </div>
                                    <img :src="upload.previewUrl" alt="Uploaded Image">
                                </div>
                            </template>
                            <input type="file" accept="image/*" class="hidden" x-ref="image"
                                @change="addImage(event)">
                            <button type="button" @click="$refs.image.click()"
                                class="h-60 w-full rounded border-2 border-dashed p-6 text-xl font-bold uppercase tracking-wide text-gray-500">
                                Add Image
                            </button>
                        </div>
                    </div>
                    <div>
                        <div class="text-2xl font-semibold mb-4">Videos</div>
                        <div class="grid grid-cols-3 gap-2">
                            <template x-for="(currentVideo, index) in currentVideos" :key="`cV` + index">
                                <div class="relative">
                                    <div class="absolute -top-2 -left-2">
                                        <button type="button"
                                            class="rounded bg-red-500 p-1 text-xs text-white hover:bg-red-300"
                                            @click="removeVideo(index, true)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="h-3 w-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 12h-15" />
                                            </svg>
                                        </button>
                                    </div>
                                    <video :src="`/storage/` + currentVideo.url" alt="Uploaded Image">
                            </template>
                            <template x-for="(upload, index) in videos" :key="`v` + index">
                                <div class="relative">
                                    <div class="absolute top-0 left-2">
                                        <button type="button"
                                            class="rounded bg-red-500 p-1 text-xs text-white hover:bg-red-300"
                                            @click="removeVideo(index)">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="h-3 w-3">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M19.5 12h-15" />
                                            </svg>
                                        </button>
                                    </div>
                                    <video :src="upload.previewUrl" controls></video>
                                </div>
                            </template>
                            <input type="file" accept="video/*" class="hidden" x-ref="video"
                                @change="addVideo(event)">
                            <button type="button" @click="$refs.video.click()"
                                class="h-60 w-full rounded border-2 border-dashed p-6 text-xl font-bold uppercase tracking-wide text-gray-500">
                                Add Video
                            </button>
                        </div>
                    </div>
                </div>


                <div class="mt-6 flex justify-end">
                    <x-button class="" @click="submit()">Continue</x-button>
                </div>

            </div>
        </div>
    </section>
    @push('head-script')
        <script>
            function readFileData(file) {
                return new Promise((resolve, reject) => {
                    const reader = new FileReader();
                    reader.onload = () => resolve(reader.result);
                    reader.onerror = reject;
                    reader.readAsDataURL(file);
                });
            }
        </script>
    @endpush

    @push('script')
        <script>
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
                    currentImages: [],
                    currentVideos: [],
                    images: [],
                    videos: [],
                    init() {
                        var gig = @json($gig);
                        this.title = gig.title
                        this.category_id = gig.category_id
                        this.description = gig.description
                        this.packages = gig.gig_packages
                        this.faqs = gig.faqs
                        var files = gig.gig_uploads
                        this.currentImages = files.filter((f) => {
                            return f.type == "image"
                        })
                        this.currentVideos = files.filter((f) => {
                            return f.type == "video"
                        })
                    },
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
                    async addImage(event) {

                        const files = event.target.files

                        for (let i = 0; i < files.length; i++) {
                            const file = files[i]

                            const previewUrl = await readFileData(file)
                            this.images.push({
                                file,
                                previewUrl
                            })
                        }
                    },
                    async addVideo(event) {

                        const files = event.target.files

                        for (let i = 0; i < files.length; i++) {
                            const file = files[i]

                            const previewUrl = await readFileData(file)
                            this.videos.push({
                                file,
                                previewUrl
                            })
                        }
                    },
                    removeImage(i, current = false) {
                        if (current)
                            this.currentImages.splice(i, 1)
                        else
                            this.images.splice(i, 1)
                    },
                    removeVideo(i, current = false) {
                        if (current)
                            this.currentVideos.splice(i, 1)
                        else
                            this.videos.splice(i, 1)
                    },
                    submit() {
                        const forms = new FormData()

                        forms.append('title', this.title)
                        forms.append('category_id', this.category_id)
                        forms.append('description', this.description)
                        forms.append('packages', JSON.stringify(this.packages))
                        forms.append('faqs', JSON.stringify(this.faqs))
                        for (var i = 0; i < this.images.length; i++) {
                            var file = this.images[i].file;
                            // Assuming `file` property holds the actual File object
                            forms.append('images[]', file);
                        }
                        for (var i = 0; i < this.videos.length; i++) {
                            var file = this.videos[i].file;
                            // Assuming `file` property holds the actual File object
                            forms.append('videos[]', file);
                        }

                        forms.append('currentImages', JSON.stringify(this.currentImages))
                        forms.append('currentVideos', JSON.stringify(this.currentVideos))

                        const url = "{{ route('gigs.update', $gig) }}"
                        axios.post(url, forms, {
                            headers: {
                                'Content-Type': 'multipart/form-data'
                            }
                        }).then(response => {
                            console.log(response)
                            location.href = "/gigs/{{ $gig->id }}"
                        }).catch(error => {
                            alert(error.response.data.message)
                            // alert(error)
                        })
                    }
                }
            }
        </script>
    @endpush

</x-guest-layout>

<script>
    const stepper = document.getElementById('stepper');
    const step1 = document.getElementById('step1');
    const step2 = document.getElementById('step2');
    const step3 = document.getElementById('step3');
    const step4 = document.getElementById('step4');
    step1.addEventListener('click', () => {
        scrollToElement('content1');
    });

    step2.addEventListener('click', () => {
        scrollToElement('content2');
    });

    step3.addEventListener('click', () => {
        scrollToElement('content3');
    });
    step4.addEventListener('click', () => {
        scrollToElement('content4');
    });

    function scrollToElement(id) {
        const element = document.getElementById(id);
        const offsetTop = element.offsetTop;
        window.scrollTo({
            top: offsetTop,
            behavior: 'smooth'
        });
    }
</script>
