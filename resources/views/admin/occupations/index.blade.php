<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-3xl text-gray-800 leading-tight pb-6">
            {{ __('Occupations') }}
        </h2>
    </x-slot>

  


    <div class="p-4 sm:ml-64">
        <x-auth-session-status :status="session('status')"></x-auth-session-status>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="flex justify-end mb-2">
                    <a href="{{ route('occupations.create') }}">
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
                        @foreach ($occupations as $occupation)
                            <tr>
                                <td class="px-3 py-2 text-center">{{ $occupation->name }}</td>
                                <td class="px-3 py-2 text-center">
                                    <a href="{{ route('occupations.show', $occupation) }}">
                                        <x-button>Show</x-button>
                                    </a>
                                    <a href="{{ route('occupations.edit', $occupation) }}">
                                        <x-button>Edit</x-button>
                                    </a>
                                    <form action="{{ route('occupations.destroy', $occupation) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <x-button type="submit">Delete</x-button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
