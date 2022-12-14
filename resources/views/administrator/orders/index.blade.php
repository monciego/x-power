<x-app-layout>
    @section('title', 'Orders')
    <div class="py-10">
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Product name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Customer Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Order Date
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Status
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Price
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Location
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $order->product->product_name }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $order->full_name }}
                        </td>
                        <td class="py-4 px-6">
                            {{ \Carbon\Carbon::parse($order->created_at)->isoFormat('MMM D YYYY')}}
                        </td>
                        <td class="py-4 px-6">
                            {{ $order->status }}
                        </td>
                        <td class="py-4 px-6">
                            <?php
                                $price = $order->product->product_price;
                                $ship_fee = $order->product->shipping_fee;
                                $total_fee = $price + $ship_fee;
                            ?>
                            ???{{ $total_fee }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $order->shipping_address }}
                        </td>
                        <td class="py-4 px-6">
                            <a href="{{ route('track-orders.show', $order) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Manage</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
