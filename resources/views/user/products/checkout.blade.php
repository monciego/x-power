<x-app-layout>
    <div>
        <div class="py-16 px-4 md:px-6 2xl:px-0 flex justify-center items-center 2xl:mx-auto 2xl:container">
            <div class="flex flex-col justify-start items-start w-full space-y-9">
                <div class="flex justify-start flex-col items-start space-y-2">
                    <a href="{{ route('user-products.index') }}"
                        class="flex flex-row items-center  text-white hover:text-gray-500 space-x-1">
                        <svg class="fill-stroke" width="14" height="14" viewBox="0 0 14 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.91681 7H11.0835" stroke="currentColor" stroke-width="0.666667"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2.91681 7L5.25014 9.33333" stroke="currentColor" stroke-width="0.666667"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M2.91681 7.00002L5.25014 4.66669" stroke="currentColor" stroke-width="0.666667"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <p class="text-sm leading-none">Back</p>
                    </a>
                    <p class="text-3xl lg:text-4xl font-semibold leading-7 lg:leading-9  text-gray-50">
                        Checkout</p>
                    <p class="text-2xl leading-normal sm:leading-4  text-white">
                        {{ $product->category_product->product_category }}
                    </p>
                </div>

                @include('user.products.checkout-form')
            </div>
        </div>
    </div>
</x-app-layout>
