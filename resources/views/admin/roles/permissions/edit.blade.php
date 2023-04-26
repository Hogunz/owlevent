<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight pb-6">
            {{ __('Permissions') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ route('permissions.update', $permission) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="mb-2">
                        <x-label>Name</x-label>
                        <x-input type="text" name="name" value="{{ $permission->name }}" required></x-input>
                    </div>

                    <div class="mb-2">
                        <x-button>Update</x-button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-app-layout>
