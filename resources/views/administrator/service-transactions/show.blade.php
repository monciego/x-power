<x-app-layout>
    @section('title', isset($serviceHistory) ? $serviceHistory->service->service_name : 'serviceHistory')
    <div class="py-10 px-2 sm:px-4 lg:px-8">
        <!-- component -->
        <main class="p-10 rounded-md w-full h-full bg-[#1a1f23]">
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-8">
                <div>
                    <h2>Subject: <span class="font-bold">{{ $serviceHistory->subject }}</span></h2>
                    <hr class="my-4">
                    <p>
                        {!! $serviceHistory->message !!}
                    </p>
                </div>
                <div class="flex flex-col mt-4 md:mt-0">

                    <div class="flex flex-col">
                        <div class="flex items-center gap-3">
                            <div>
                                <h1 class="capitalize text-3xl text-white font-bold">
                                    {{ $serviceHistory->service->service_name }}
                                </h1>
                            </div>
                        </div>
                        <p class="text-slate-100 text-xl">
                            {{ $serviceHistory->service->category_service->service_category }}
                        </p>
                        <h2 class="text-2xl my-3 text-white">
                            ₱{{ $serviceHistory->service->service_price_range }}
                        </h2>
                        @if ($serviceHistory->service->service_description)
                        <p class="text-lg text-gray-100	">
                            {{ $service->product->product_description }}
                        </p>
                        @endif
                        <p class="text-lg text-white">
                            Transaction #: {{ $serviceHistory->transaction_number }}
                        </p>
                        <p class="text-md mb-4 text-slate-200">
                            Transaction Time: {{ $serviceHistory->created_at->diffForHumans() }}
                        </p>
                        <hr>
                        <div class="mt-4 ">

                            <div class="flex items-center gap-3">
                                <p class="text-base text-white font-bold">
                                    {{ $serviceHistory->customer_name }}
                                </p>
                                <span class="font-regular text-slate-200">
                                    {{ $serviceHistory->contact_number }}
                                </span>
                            </div>
                            <p class="text-base text-white ">
                                <a class="underline" href="mailto::{{ $serviceHistory->email }}">
                                    {{ $serviceHistory->email }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</x-app-layout>
