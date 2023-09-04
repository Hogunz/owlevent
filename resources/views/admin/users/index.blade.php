<x-app-layout>
    <x-slot name="header">
        <h2 class="pb-6 text-3xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>

   


    <div class="lg:p-4 sm:ml-64">
        <x-auth-session-status :status="session('status')"></x-auth-session-status>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg lg:container lg:mx-auto">
            <div class="mb-2 flex justify-end">
                <a href="{{ route('roles.create') }}">
                    <x-button>Create</x-button>
                </a>
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
                    @foreach ($users as $user)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $user->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->name }}
                            </td>
                            <td class="flex items-center px-6 py-4 space-x-3">
                                <a href="{{ route('users.show', $user) }}">
                                    <button class="font-medium text-blue-600 hover:underline">Show</button>
                                </a>
                                <a href="{{ route('users.edit', $user) }}">
                                    <button class="font-medium text-green-600 hover:underline">Edit</button>
                                </a>
                               
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
