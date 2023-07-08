<x-app-layout>
    <x-slot name="header">
        <h2 class="pb-6 text-3xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-auth-session-status :status="session('status')"></x-auth-session-status>

        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="border-b border-gray-200 bg-white p-6">
                <div class="mb-2 flex justify-end">
                    <a href="{{ route('roles.create') }}">
                        <x-button>Create</x-button>
                    </a>
                </div>
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="px-3 py-2 uppercase tracking-tight">ID</th>
                            <th class="px-3 py-2 uppercase tracking-tight">Name</th>
                            <th class="px-3 py-2 uppercase tracking-tight">
                                <span class="sr-only">
                                    Action
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-3 py-2 text-center">{{ $user->id }}</td>
                                <td class="px-3 py-2 text-center">{{ $user->name }}</td>
                                <td class="px-3 py-2 text-center">
                                    <a href="{{ route('users.show', $user) }}">
                                        <x-button>Show</x-button>
                                    </a>
                                    <a href="{{ route('users.edit', $user) }}">
                                        <x-button>Edit</x-button>
                                    </a>
                                    {{-- <form action="{{ route('users.destroy', $user) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <x-button type="submit">Delete</x-button>
                                    </form> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</x-app-layout>
