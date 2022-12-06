<x-app-layout>
    @section('title', 'Orders')
    <div class="py-10">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Transaction #
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Service Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Customer Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Transaction Date
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Service Price
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($serviceHistory as $service)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td class="py-4 px-6">
                            {{ $service->transaction_number }}
                        </td>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $service->service->service_name }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $service->customer_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ \Carbon\Carbon::parse($service->created_at)->isoFormat('MMM D YYYY')}}
                        </td>
                        <td class="py-4 px-6">
                            ₱{{ $service->service->service_price_range }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="{{ route('service-transactions.show', $service->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Manage</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
