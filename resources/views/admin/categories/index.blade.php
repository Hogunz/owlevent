<x-app-layout>
    <x-slot name="header">
        <h2 class="pb-6 text-3xl font-semibold leading-tight text-gray-800">
            {{ __('Categories') }}
        </h2>
    </x-slot>






    {{-- <div class="lg:p-4 sm:ml-64">
        <x-auth-session-status :status="session('status')"></x-auth-session-status>

        <div class="overflow-auto touch-auto bg-white shadow-sm sm:rounded-lg">
            <div class="border-b border-gray-200 bg-white lg:p-6">
                <div class="mb-2 flex justify-end">
                    <a href="{{ route('categories.create') }}">
                        <x-button>Create</x-button>
                    </a>
                </div>
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="px-3 py-2 uppercase tracking-tight">Name</th>
                            <th class="px-3 py-2 uppercase tracking-tight">
                                <span class="sr-only">
                                    Action
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td class="lg:px-3 lg:py-2 lg:text-center">{{ $category->name }}</td>
                                <td class="px-3 py-2 lg:text-center">
                                    <a href="{{ route('categories.show', $category) }}">
                                        <x-button>Show</x-button>
                                    </a>
                                    <a href="{{ route('categories.edit', $category) }}">
                                        <x-button>Edit</x-button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}


    

    <div class="lg:p-4 sm:ml-64">
        <x-auth-session-status :status="session('status')"></x-auth-session-status>
        <div class="mb-2 flex justify-end">
            <a href="{{ route('categories.create') }}">
                <x-button>Create</x-button>
            </a>
        </div>
        
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg lg:container lg:mx-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>

                        <th scope="col" class="px-6 py-3">
                            ID
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $category->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $category->name }}
                            </td>
                            <td class="flex items-center px-6 py-4 space-x-3">
                                {{-- <a href="{{ route('occupations.show', $occupation) }}">
                                    <x-button>Show</x-button>
                                </a> --}}
                                <a href="{{ route('categories.edit', $category) }}">
                                    <button class="font-medium text-green-600 hover:underline">Edit</button>
                                </a>
                                <form action="{{ route('categories.destroy', $category) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="font-medium text-red-600 hover:underline" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</x-app-layout>
