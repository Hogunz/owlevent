<x-app-layout>
    <x-slot name="header">
        <h2 class="pb-6 text-3xl font-semibold leading-tight text-gray-800">
            {{ __('Supplier') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg container mx-auto">
            <div class="mb-2 flex justify-end">
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
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($suppliers as $supplier)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $supplier->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $supplier->name }}
                            </td>
                            <td class="px-6 py-4">
                                @if ($supplier->status == 'approved')
                                    <span
                                        class=" mr-2 rounded-full bg-green-100 px-2.5 py-0.5 text-xs font-medium uppercase text-green-800">Approved</span>
                                @else
                                    <span
                                        class="mr-2 rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium uppercase text-[#32393a]">{{ $supplier->status }}</span>
                                @endif
                            </td>
                            <td class="flex items-center px-6 py-4 space-x-3">
                                <form action="{{ route('suppliers.approval.change', $supplier) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="font-medium text-green-600 hover:underline" name="status"
                                        value="approved">Approve</button>
                                    <button class="font-medium text-red-600 hover:underline" name="status"
                                        value="declined">Declined</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
