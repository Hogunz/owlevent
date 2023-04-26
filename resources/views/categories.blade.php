<x-guest-layout>



    <section class="container mx-auto p-8">
        <div class="flex flex-col">
            <div class="text-4xl mb-2 font-bold">Event Coordinator</div>
            <div class="text-base text-black/50 font-bold">Understanding the client's needs and objectives for the event
                and
                developing
                <br>
                a detailed plan and timeline for its execution.
            </div>
        </div>
    </section>
    <section class="container mx-auto p-8">
        <div class="grid lg:grid-cols-4 justify-items-center sm:grid-cols-1 gap-y-2 gap-x-0">
            @for ($i = 0; $i < 30; $i++)
                <div
                    class="flex lg:flex-col sm:flex-row items-center bg-white border border-gray-200 rounded-lg shadow  sm:max-w-xl lg:max-w-xs hover:bg-gray-100">
                    <div>
                        <div class="">
                            <a href="/service-profile">
                                <img class="object-cover lg:h-full sm:h-auto sm:w-96 lg:w-full sm:rounded-l-lg lg:rounded-t-lg"
                                    src="https://plus.unsplash.com/premium_photo-1669638781649-5802d884acd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                    alt="">
                            </a>

                        </div>
                    </div>

                    <div class=" justify-between p-4 leading-normal">
                        <div class="flex flex-row gap-4 items-center mb-4">
                            <img class="h-8 w-8 rounded-full ring-2 ring-white object-cover"
                                src="https://images.unsplash.com/photo-1555952517-2e8e729e0b44?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHBlcnNvbnxlbnwwfDF8MHx8&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60"
                                alt="">
                            <a href="/supplier-profile" class="href">
                                <p
                                    class="mb-2 text-sm font-bold tracking-tight text-gray-900 hover:underline cursor-pointer">
                                    ItsMeCJ</p>
                            </a>
                        </div>
                        <p class="mb-3 font-normal text-gray-700">Lorem Ipsum is simply
                            dummy
                            text of the
                            printing and typesetting industry.</p>
                        <div class="">
                            <ul class="flex justify-left mb-0 items-center">
                                <li>
                                    @for ($j = 0; $j < 5; $j++)
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star"
                                            class="w-4 text-yellow-300" role="img"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                            <path fill="currentColor"
                                                d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z">
                                            </path>
                                        </svg>
                                </li>
            @endfor
            <span>(23)</span>
            </ul>
        </div>
        </div>
        </div>
        @endfor
        </div>
    </section>


    <section class="border lg:bg-[#E8DFCA] sm:bg-white">

        <div class="lg:container lg:mx-auto lg:py-16 md:py-12 md:px-6 py-12 px-4">
            <h1 class="text-center  lg:text-4xl text-3xl lg:leading-9 leading-7 text-gray-800 font-semibold">
                FAQ's</h1>

            <div class="lg:mt-12 bg-[#F5EFE6] md:mt-10 mt-8 lg:py-7 lg:px-6 md:p-6 py-6 px-4 lg:w-8/12 w-full mx-auto">
                <div class="flex justify-between md:flex-row flex-col">
                    <div class="md:mb-0 mb-8 md:text-left text-center">
                        <h2 class="font-medium  text-xl leading-5 text-gray-800 lg:mb-2 mb-4">
                            Questions
                        </h2>
                        <p class="font-normal  text-sm leading-5 text-gray-600 md:w-8/12 md:ml-0 w-11/12 mx-auto">
                            If you don’t find your answer, Please contact us or Leave a Message, we’ll be more than
                            happy to assist you.</p>
                    </div>

                    <div class="flex justify-center items-center">
                        <div
                            class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800 flex bg-white md:justify-center justify-between items-center px-4 py-3 w-full">
                            <input class="focus:outline-none bg-white" type="text" placeholder="Search" />
                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg1.svg" alt="search">
                        </div>
                    </div>

                </div>
            </div>
            <div class="lg:w-8/12 w-full mx-auto">
                @for ($i = 0; $i < 4; $i++)
                    <!-- Question 1 -->
                    <hr class="w-full lg:mt-10 md:mt-12 md:mb-8 my-8" />

                    <div class="w-full md:px-6">
                        <div id="mainHeading" class="flex justify-between items-center w-full">
                            <div class="">
                                <p
                                    class="flex justify-center items-center  font-medium text-base leading-6 md:leading-4 text-gray-800">
                                    <span
                                        class="lg:mr-6 mr-4  lg:text-2xl md:text-xl text-lg leading-6 md:leading-5 lg:leading-4 font-semibold text-gray-800">Q1.</span>
                                    asdkhasdjkhasdkjh
                                </p>
                            </div>
                            <button aria-label="toggler"
                                class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-800"
                                data-menu>
                                <img class="transform  "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2.svg" alt="toggler">
                                <img class="transform  hidden "
                                    src="https://tuk-cdn.s3.amazonaws.com/can-uploader/faq-8-svg2dark.svg"
                                    alt="toggler">
                            </button>
                        </div>
                        <div id="menu" class="hidden mt-6 w-full">
                            <p class="text-base leading-6 text-gray-600  font-normal">
                                awdjhajwlkdhajkwdhakjwdhjkawhd</p>
                        </div>
                    </div>
                @endfor
            </div>


        </div>




    </section>


</x-guest-layout>

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
