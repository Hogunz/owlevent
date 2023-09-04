<x-app-layout>
    <x-slot name="header">
        <h2 class="pb-6 text-3xl font-semibold leading-tight text-gray-800">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="p-4 sm:ml-64">

        <x-auth-session-status :status="session('status')"></x-auth-session-status>

        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">

            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-300">
                        <th class="px-3 py-2 uppercase tracking-tight">ID</th>
                        <th class="px-3 py-2 uppercase tracking-tight">Name</th>
                        <th class="px-3 py-2 uppercase tracking-tight">First Name</th>
                        <th class="px-3 py-2 uppercase tracking-tight">Last Name</th>
                        <th class="px-3 py-2 uppercase tracking-tight">Address</th>
                        <th class="px-3 py-2 uppercase tracking-tight">Email</th>
                        <th class="px-3 py-2 uppercase tracking-tight">Business Name</th>
                        <th class="px-3 py-2 uppercase tracking-tight">Description</th>
                        <th class="px-3 py-2 uppercase tracking-tight">ID Card</th>
                        <th class="px-3 py-2 uppercase tracking-tight">Selfie Photo</th>

                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td class="px-3 py-2 text-center">{{ $user->id }}</td>
                        <td class="px-3 py-2 text-center">{{ $user->name }}</td>
                        <td class="px-3 py-2 text-center">{{ $user->first_name }}</td>
                        <td class="px-3 py-2 text-center">{{ $user->last }}</td>
                        <td class="px-3 py-2 text-center">{{ $user->address }}</td>
                        <td class="px-3 py-2 text-center">{{ $user->email }}</td>
                        <td class="px-3 py-2 text-center">{{ $user->business_name }}</td>
                        <td class="px-3 py-2 text-center">{{ $user->description }}</td>
                        <td class="px-3 py-2 text-center">
                            <img src="{{ asset('storage/' . $user->id_card) }}" alt="">
                        </td>
                        <td class="px-3 py-2 text-center">
                            <img src="  {{ asset('storage/' . $user->selfie_photo) }}" alt="">
                        </td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    </div>
</x-app-layout>
