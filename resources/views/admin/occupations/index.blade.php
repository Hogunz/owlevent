<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight pb-6">
            {{ __('Occupations') }}
        </h2>
    </x-slot>

  


 


    <div class="lg:p-4 sm:ml-64">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg lg:container lg:mx-auto">


            <div class="mb-2 flex justify-end">
                <div class="mb-2 flex justify-end">
                    <a href="{{ route('occupations.create') }}">
                        <x-button>Create</x-button>
                    </a>
                </div>
                <x-auth-validation-errors></x-auth-validation-errors>
            </div>
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
                    @foreach ($occupations as $occupation)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $occupation->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $occupation->name }}
                            </td>
                            <td class="flex items-center px-6 py-4 space-x-3">
                                {{-- <a href="{{ route('occupations.show', $occupation) }}">
                                    <x-button>Show</x-button>
                                </a> --}}
                                <a href="{{ route('occupations.edit', $occupation) }}">
                                    <button class="font-medium text-green-600 hover:underline">Edit</button>
                                </a>
                                <form action="{{ route('occupations.destroy', $occupation) }}" method="post">
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
