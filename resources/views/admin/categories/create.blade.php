<x-app-layout>
    <x-slot name="header">
        <h2 class="pb-6 text-3xl font-semibold leading-tight text-gray-800">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="border-b border-gray-200 bg-white p-6">
                <form action="{{ route('categories.store') }}" method="post">
                    @csrf
                    <div class="mb-2">
                        <x-label>Name</x-label>
                        <x-input type="text" name="name" required></x-input>
                    </div>

                    <div class="mb-2">
                        <x-button>Create</x-button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
