<form action="{{ route('service-history.store') }}" method="POST"
    class="flex flex-col xl:flex-row justify-center xl:justify-between space-y-6 xl:space-y-0 xl:space-x-6 w-full">
    @csrf
    <input type="hidden" name="service_id" id="service_id" value="{{ $service->id }}">
    <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">

    <div
        class="flex flex-col sm:flex-row xl:flex-col justify-center items-center  bg-gray-800 py-7 sm:py-0 xl:py-10 px-10 xl:w-full">
        <div class="flex flex-col justify-start items-start w-full space-y-4">
            <p class="text-xl md:text-2xl leading-normal  text-gray-50">
                {{ $service->service_name }}
            </p>
            <p class="text-base font-semibold leading-none  text-white">
                ₱{{ $service->service_price_range }}
            </p>
        </div>
    </div>

    <div class="p-8  bg-gray-800 flex flex-col lg:w-full xl:w-3/5">
        <div class="flex flex-row justify-center items-center mt-6">
            <hr class="border w-full" />
            <p class="flex flex-shrink-0 px-4 text-base leading-4  text-white">
                Avail Service
            </p>
            <hr class="border w-full" />
        </div>

        <x-auth-validation-errors class="my-4" :errors="$errors" />

        <div class="mt-8">
            <x-input-label for="customer_name" :value="__('Customer Name*')" />
            <x-text-input id="customer_name" class="block mt-1 w-full" type="text" name="customer_name"
                placeholder="Please enter your full name" :value="old('customer_name')"
                value="{{ Auth::user()->name }}" />
        </div>

        <div class="mt-8">
            <x-input-label for="email" :value="__('Email*')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                placeholder="Please enter your valid email" value="{{ Auth::user()->email }}" />

        </div>

        <div class="mt-8">
            <x-input-label for="subject" :value="__('Subject*')" />
            <x-text-input id="subject" class="block mt-1 w-full" type="text" name="subject"
                placeholder="Please state the problem/Availed Service" :value="old('subject')"
                value="{{ $service->service_name }}" required />
        </div>

        <div class="mt-8">
            <label for="message" class="block mb-2 text-sm font-medium text-gray-100">Your
                message*</label>
            <textarea id="message" name="message" rows="4"
                class="block p-2.5 w-full text-sm rounded-lg border bg-gray-700 border-gray-300 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                placeholder="Discuss the problem..."></textarea>
        </div>

        <div class="mt-8">
            <x-input-label for="contact_number" :value="__('Contact Number*')" />
            <x-text-input id="contact_number" class="block mt-1 w-full" type="number" name="contact_number"
                :value="old('contact_number')" placeholder="Please enter your contact number" />
        </div>

        <div class="mt-8">
            <x-input-label for="contact_person" :value="__('Contact Person')" />
            <x-text-input id="contact_person" class="block mt-1 w-full" type="text" name="contact_person"
                :value="old('contact_person')" placeholder="Please enter the contact person" />
        </div>

        <button
            class=" mt-8 border border-transparent hover:border-gray-300  bg-indigo-700 hover:bg-indigo-800 text-white  font-bold flex justify-center items-center py-4 rounded w-full">
            <div>
                <p class="text-base leading-4">Checkout {{ $service->service_name }}</p>
            </div>
        </button>
    </div>
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
