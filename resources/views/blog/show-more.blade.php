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
    <section class="container mx-auto lg:p-24 sm:p-8">
        <div class="grid lg:grid-cols-3 sm:grid-cols-1 lg:gap-y-12 sm:gap-y-2">
            @for ($i = 0; $i < 30; $i++)
                <div
                    class="flex lg:flex-col overflow-hidden sm:flex-row items-center bg-white border border-gray-200 rounded-lg shadow  sm:max-w-xl lg:max-w-sm hover:bg-gray-100">
                    <div class="">
                        <a href="/blog/index">
                            <img class="object-cover lg:h-full sm:h-auto sm:w-96 lg:w-full sm:rounded-l-lg lg:rounded-t-lg hover:scale-105 transition ease-in-out duration-300"
                                src="https://plus.unsplash.com/premium_photo-1669638781649-5802d884acd5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                alt="">
                    </div>
                    <div class=" justify-between p-4 leading-normal">
                        <p class="mb-3 font-bold text-lg text-gray-700">Lorem Ipsum is simply
                            dummy
                            text of the
                            printing and typesetting industry.</p>

                    </div>
                    </a>
                </div>
            @endfor
        </div>
    </section>
</x-guest-layout>
