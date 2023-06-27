<x-guest-layout>
    <div class="py-12">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="border-b border-gray-200 bg-white p-6">
                <div class="mb-2 flex justify-end">
                    <x-auth-validation-errors></x-auth-validation-errors>
                </div>
                <table class="min-w-full table-auto">
                    <thead>
                        <tr class="bg-gray-300">
                            <th class="px-3 py-2 uppercase tracking-tight">Name</th>
                            <th class="px-3 py-2 uppercase tracking-tight">Status</th>
                            <th class="px-3 py-2 uppercase tracking-tight">
                                <span class="sr-only">
                                    Action
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                            <tr>
                                <td class="px-3 py-2 text-center">{{ $service->title }}</td>
                                <td class="px-3 py-2 text-center capitalize">{{ $service->status }}</td>
                                <td class="px-3 py-2 text-center">
                                    <form action="{{ route('services.approval.change', $service) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <x-button name="status" value="approved">Approve</x-button>
                                        <x-button name="status" value="declined">Declined</x-button>
                                    </form>

                                    <a href="">
                                        <x-button class="">Edit
                                        </x-button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-guest-layout>
