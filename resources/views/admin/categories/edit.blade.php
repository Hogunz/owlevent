<x-app-layout>
    <x-slot name="header">
        <h2 class="pb-6 text-3xl font-semibold leading-tight text-gray-800">
            {{ __('Categories') }}
        </h2>
    </x-slot>


    <div class="lg:p-4 sm:ml-64">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="border-b border-gray-200 bg-white lg:p-6">
                <form action="{{ route('categories.update', $category) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-2">
                        <x-label>Name</x-label>
                        <x-input type="text" name="name" value="{{ $category->name }}" required></x-input>
                    </div>
                    <div class="mb-2">
                        <x-button>Update</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
