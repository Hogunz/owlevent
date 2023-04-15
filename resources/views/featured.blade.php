<x-guest-layout>
    <section>
        <div class="">
            <div class="container mx-auto p-8" style="">
                <div class="bg-cover bg-center  h-auto text-white py-24 px-10 object-fill rounded-t-lg"
                    style="background-image: url(https://plus.unsplash.com/premium_photo-1664438942214-fee803f245b5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80">
                    <div class="md:w-1/2">
                        <p class="text-3xl font-bold">Discover a World of Fun and Excitement
                            Our Featured Events Have Something for Everyone!</p>
                    </div>
                </div> <!-- container -->
                <br>
            </div>
        </div>
    </section>
    <section class="container mx-auto">
        <div class="columns-2 sm:columns-1 md:columns-3 lg:columns-4 p-8">
            @for ($i = 0; $i < 10; $i++)
                <img class="mb-4"
                    src="https://images.unsplash.com/photo-1661956603025-8310b2e3036d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" />
            @endfor
        </div>
    </section>




</x-guest-layout>
