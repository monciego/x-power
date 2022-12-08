<x-app-layout>
    @section('title', isset($product) ? $product->product_name : 'Product')
    <div class="mx-auto w-full lg:w-[90%] rounded-lg border shadow-md bg-gray-900 border-gray-700">
        <div class="h-[18rem]">
            @if ($product->product_image)
            <img class="rounded-t-lg h-full w-full object-cover" src="{{ Storage::url($product->product_image) }}"
                alt="{{ $product->product_name }}">
            @else
            <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('images/no-image.jpg') }}"
                alt="No Image">
            @endif

        </div>
        <div class="p-5">
            <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-4">
                    <h5 class=" text-2xl font-bold tracking-tight text-white">
                        {{ $product->product_name }}
                    </h5>
                    <span class="bg-slate-700 text-white px-4 rounded text-sm py-1">
                        {{ $product->category_product->product_category }}
                    </span>
                </div>

                @if ($product->is_available === 1)
                <span class="bg-indigo-700 text-white px-4 rounded text-sm py-1">
                    Available
                </span>
                @else
                <span class="bg-red-700 text-white px-4 rounded text-sm py-1">
                    Out of Stock
                </span>
                @endif
            </div>
            <p class="mb-3 font-normal text-lg text-gray-100">Product Price: ₱{{ $product->product_price }}</p>
            <p class="mb-3 font-normal text-lg text-gray-100">Shipping fee: ₱{{ $product->shipping_fee }}</p>
            @if ($product->product_description)
            <p class="mb-3 font-normaltext-gray-400">{!! $product->product_description !!}</p>
            @endif

            <div class="flex items-center gap-3">
                <a href="{{ route('products.edit', $product) }}"
                    class="inline-flex gap-1 items-center py-2 px-3 text-sm font-medium text-center  rounded  focus:ring-4 focus:outline-none  bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                    </svg>
                    Edit
                </a>

                @include('administrator.products.delete')

                {{-- <a href="#"
                    class="inline-flex gap-1 items-center py-2 px-3 text-sm font-medium text-center  rounded  focus:ring-4 focus:outline-none  bg-red-600 hover:bg-red-700 focus:ring-red-800">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                    </svg>
                    Delete
                </a> --}}
            </div>

        </div>
    </div>

    <div class="w-full lg:w-[90%] mx-auto mt-4">
        <a href="{{ route('products.index') }}"
            class="text-indigo-500 inline-flex items-center gap-2  hover:text-indigo-400 hover:border-b-2 border-indigo-400 pb-2 transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>
            Back to product page </a>
    </div>
</x-app-layout>
