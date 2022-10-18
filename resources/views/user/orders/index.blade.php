<x-app-layout>
    <div class="py-10 px-2 sm:px-4 lg:px-8">
        <div class="pointer-events-auto w-full">
            <div class="flex h-full flex-col  bg-white shadow-xl">
                <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                    <div class="flex items-start justify-between">
                        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">My Orders
                        </h2>
                    </div>
                    <div class="mt-8">
                        <div class="flow-root">
                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                @forelse ($orders as $order)
                                <li class="flex py-6">
                                    <div
                                        class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                        <img src="{{ Storage::url($order->product->product_image) }}"
                                            alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="ml-4 flex flex-1 flex-col">
                                        <div>
                                            <div class="flex justify-between text-base font-semibold text-gray-900">
                                                <h3>
                                                    <a href="#">{{ $order->product->product_name }}</a>
                                                </h3>
                                                <p class="ml-4">₱{{ $order->product->product_price }}</p>
                                            </div>
                                            <p class="mt-1 text-sm font-medium text-gray-800">{{
                                                $order->product->category_product->product_category
                                                }}</p>
                                        </div>
                                        <div class="flex flex-1 items-end justify-between text-sm">
                                            <p class="text-gray-500">Placed {{ $order->created_at->diffForHumans() }}
                                            </p>
                                            <div class="flex">
                                                <a href=""
                                                    class="font-bold underline text-indigo-800 hover:text-indigo-900">
                                                    View more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @empty
                                <h2 class="text-center font-bold my-8 text-2xl">No Orders</h2>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200 py-6 flex items-center justify-center px-4 sm:px-6">
                    <a href="{{ route('user-products.index') }}"
                        class="font-medium text-indigo-600  hover:text-indigo-500">
                        Continue Shopping
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>
            <div class="mt-4">
                {{ $orders->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
