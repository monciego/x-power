<x-app-layout>
    @section('title', 'Cart')
    <div class="py-10 px-2 sm:px-4 lg:px-8">
        <div class="pointer-events-auto w-full">
            <div class="flex h-full flex-col  bg-[#1a1f23] rounded-md shadow-xl">
                <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                    <div class="flex items-start justify-between">
                        <h2 class="text-lg font-medium text-white" id="slide-over-title">Cart
                        </h2>
                    </div>
                    <div class="mt-8">
                        <div class="flow-root">
                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                @forelse ($products as $product)
                                <li class="flex py-6">
                                    <div
                                        class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                        <img src="{{ Storage::url($product->product_image) }}"
                                            alt="{{ $product->product_name }}"
                                            class="h-full w-full object-cover object-center">
                                    </div>
                                    <div class="ml-4 flex flex-1 flex-col">
                                        <div>
                                            <div class="flex justify-between text-base font-semibold text-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <div>
                                                        <a href="#">{{ $product->product_name }}</a>
                                                    </div>

                                                </div>
                                                <p class="ml-4">₱{{ $product->product_price}}</p>
                                            </div>

                                            {{-- <p class="mt-1 text-sm font-medium text-gray-200">{{
                                                $order->product->category_product->product_category
                                                }}</p> --}}
                                        </div>
                                        <div class="flex mt-4 justify-between items-center">
                                            <span class="text-3xl font-bold text-white">₱{{ $product->product_price
                                                }}</span>

                                            <div>

                                                <a href="{{ route('checkout.index', $product->id) }}"
                                                    class="focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                                                    Buy Now
                                                </a>
                                                <form method="POST"
                                                    action="{{ route('cart.destroy', $product->cart_id) }}"
                                                    class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center ml-2">
                                                        Remove
                                                    </button>
                                                </form>
                                            </div>

                                        </div>
                                        {{-- <div class="flex flex-1 items-end justify-between text-sm">
                                            <div>
                                                <p class="text-gray-100">Placed {{ $order->created_at->diffForHumans()
                                                    }}
                                                </p>
                                                <p class="text-gray-100">Estimated Delivery Date:
                                                    {{ \Carbon\Carbon::parse($order->delivery_date)->isoFormat('MMM D
                                                    YYYY')
                                                    }}
                                                </p>
                                            </div>
                                            <div class="flex">
                                                <a href="{{ route('order.show', $order) }}"
                                                    class="font-bold underline text-indigo-800 hover:text-indigo-900">
                                                    View more
                                                </a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </li>
                                @empty
                                <h2 class="text-center text-white font-bold my-8 text-2xl">No Orders</h2>
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

                <a href="/ordernow" class="bg-blue-500 text-white p-4 flex items-center justify-center">
                    buy now
                </a>
            </div>
            {{-- <div class="mt-4">
                {{ $orders->links() }}
            </div> --}}
        </div>
    </div>
</x-app-layout>
