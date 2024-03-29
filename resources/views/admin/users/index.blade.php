<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight pb-6">
            {{ __('Roles') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-auth-session-status :status="session('status')"></x-auth-session-status>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-end mb-2">
                    <a href="{{ route('roles.create') }}">
                        <x-button>Create</x-button>
                    </a>
                </div>
                <table class="table-auto min-w-full">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="tracking-tight px-3 py-2 uppercase">Name</th>
                            <th class="tracking-tight px-3 py-2 uppercase">
                                <span class="sr-only">
                                    Action
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-3 py-2 text-center">{{ $user->name }}</td>
                                <td class="px-3 py-2 text-center">
                                    <a href="{{ route('users.show', $user) }}">
                                        <x-button>Show</x-button>
                                    </a>
                                    <a href="{{ route('users.edit', $user) }}">
                                        <x-button>Edit</x-button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>
