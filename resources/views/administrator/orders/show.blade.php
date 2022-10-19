<x-app-layout>
    <div class="py-10 px-2 sm:px-4 lg:px-8">

        @include('administrator.orders.status-create')
        <!-- component -->
        <main class="p-10 rounded-md w-full h-full bg-[#1a1f23]">
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-8">
                <div class="flex flex-col justify-start">
                    <div class=" h-[18rem]"> <img src=" {{ Storage::url($order->product->product_image) }}"
                            alt="{{ $order->product->product_name }}" class="h-full w-full object-cover object-center">
                    </div>
                </div>
                <div class="flex flex-col mt-4 md:mt-0">
                    <div class="flex flex-col">
                        <div class="flex items-center gap-3">
                            <div>
                                <h1 class="capitalize text-3xl text-white font-bold">{{ $order->product->product_name }}
                                </h1>
                            </div>
                            <div class="bg-slate-700 rounded text-white py-2 px-4">
                                {{ $order->status }}
                            </div>
                        </div>
                        <p class="text-slate-100 text-xl">{{ $order->product->category_product->product_category }}</p>
                        <h2 class="text-2xl my-3 text-white">₱{{ $order->product->product_price }}</h2>
                        @if ($order->product->product_description)
                        <p class="text-lg text-gray-100	">
                            {{ $order->product->product_description }}
                        </p>
                        @endif
                        <p class="text-lg text-white">Order {{ $order->transaction_number }}</p>
                        <p class="text-md mb-4 text-slate-200">Placed {{ $order->created_at->diffForHumans() }}</p>

                        <hr>

                        <div class="mt-4 ">

                            <div class="flex items-center gap-3">
                                <p class="text-base text-white font-bold">
                                    {{ $order->full_name }}
                                </p>
                                <span class="font-regular text-slate-200">{{ $order->contact_number }}</span>
                            </div>
                            <p class="text-base text-white ">
                                <a class="underline" href="mailto::{{ $order->email }}">{{ $order->email }}</a>
                            </p>
                            <p class="text-base text-white font-bold">
                                {{ $order->shipping_address }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</x-app-layout>
