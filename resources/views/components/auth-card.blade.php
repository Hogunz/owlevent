{{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div> --}}
@props(['button' => null])

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
    <div class="relative p-4 w-full max-w-md h-full sm:h-auto">
        <div class="relative rounded-lg shadow">
            <div
                class="border rounded-lg bg-white py-6 px-6 lg:px-8 bg-gradient-to-b from-[#F5EFE6] via-[#E8DFCA] to-transparent">
                {{ $button }}
                <div>
                    {{ $logo }}
                </div>

                {{ $slot }}
            </div>
        </div>
    </div>
</div>
