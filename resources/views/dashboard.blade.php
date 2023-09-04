<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight pb-6">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg  mt-14">

            <div class="flex items-center justify-center h-48 mb-4 rounded bg-[#F5EFE6]/75  dark:bg-gray-800">
                <p class="text-2xl text-gray-400 dark:text-gray-500">
                    You're logged in! {{ Auth::user()->name }}
                </p>
            </div>

    
        </div>
    </div>



</x-app-layout>
