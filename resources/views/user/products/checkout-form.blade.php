<form action="{{ route('order.store') }}" method="POST"
    class="flex flex-col xl:flex-row justify-center xl:justify-between space-y-6 xl:space-y-0 xl:space-x-6 w-full">
    @csrf
    <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
    <input type="hidden" name="status" id="status" value="Processing">
    <div
        class="flex flex-col sm:flex-row xl:flex-col justify-center items-center  bg-gray-800 py-7 sm:py-0 xl:py-10 px-10 xl:w-full">
        <div class="flex flex-col justify-start items-start w-full space-y-4">
            <p class="text-xl md:text-2xl leading-normal  text-gray-50">
                {{ $product->product_name }}
            </p>
            <p class="text-base font-semibold leading-none  text-white">
                Product Price: <span class="">
                    ₱{{ $product->product_price }}
                </span>
            </p>
            <p class="text-base font-semibold leading-none  text-white">
                Shipping Fee: <span class="">
                    ₱{{
                    $product->shipping_fee }}</p>
            </span>

            <?php

            $price = $product->product_price;
            $ship_fee = $product->shipping_fee;
            $total_fee = $price + $ship_fee;

            ?>

            <p class="text-xl font-semibold leading-none  text-white">
                Total Fee: <span class="font-bold">
                    ₱{{ $total_fee }}</p>
            </span>


        </div>
        <div class="mt-6 w-full sm:mt-0 xl:my-10 xl:px-20 h-80  sm:w-96 xl:w-auto py-8 rounded">
            <img class="rounded h-full w-full object-cover" src="{{ Storage::url($product->product_image) }}"
                alt="{{ $product->product_name }}" />
        </div>
    </div>

    <div class="p-8  bg-gray-800 flex flex-col lg:w-full xl:w-3/5">
        <div class="flex flex-row justify-center items-center mt-6">
            <hr class="border w-full" />
            <p class="flex flex-shrink-0 px-4 text-base leading-4  text-white">
                Cash on Delivery
            </p>
            <hr class="border w-full" />
        </div>

        <x-auth-validation-errors class="my-4" :errors="$errors" />

        <div class="mt-8">
            <x-input-label for="full_name" :value="__('Full Name*')" />
            <x-text-input id="full_name" class="block mt-1 w-full" type="text" name="full_name"
                placeholder="Please enter your full name" :value="old('full_name')" value="{{ Auth::user()->name }}" />
        </div>

        <div class="mt-8">
            <x-input-label for="email" :value="__('Email*')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="Please enter your valid email" value="{{ Auth::user()->email }}" />

        </div>

        <div class="mt-8">
            <x-input-label for="contact_number" :value="__('Contact Number*')" />
            <x-text-input id="contact_number" class="block mt-1 w-full" type="number" name="contact_number"
                :value="old('contact_number')" placeholder="Please enter your contact number" />
        </div>

        <div class="mt-8">
            <x-input-label for="shipping_address" :value="__('Shipping Address*')" />
            <x-text-input id="shipping_address" class="block mt-1 w-full" type="text" name="shipping_address"
                :value="old('shipping_address')" placeholder="Please enter the shipping address" />
        </div>

        <button
            class=" mt-8 border border-transparent hover:border-gray-300  bg-indigo-700 hover:bg-indigo-800 text-white  font-bold flex justify-center items-center py-4 rounded w-full">
            <div>
                <p class="text-base leading-4">Checkout {{ $product->product_name }}</p>
            </div>
        </button>
    </div>
    @csrf
</form>



<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
