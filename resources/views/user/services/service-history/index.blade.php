<x-app-layout>
    @section('title', 'My Orders')
    <div class="py-10 px-2 sm:px-4 lg:px-8">
        <div class="pointer-events-auto w-full">
            <div class="flex h-full flex-col bg-[#1a1f23] rounded-md shadow-xl">
                <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                    <div class="flex items-start justify-between">
                        <h2 class="text-lg font-medium text-white" id="slide-over-title">
                            Availed Services
                        </h2>
                    </div>
                    <div class="mt-8">
                        <div class="flow-root">
                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                @forelse ($serviceHistory as $service)
                                <li class="flex py-6">
                                    <div class="ml-4 flex flex-1 flex-col">
                                        <div>
                                            <div class="flex justify-between text-base font-semibold text-gray-50">
                                                <div class="flex items-center gap-3">
                                                    <div>
                                                        <a href="#">{{$service->service->service_name }}</a>
                                                    </div>
                                                </div>

                                                <p class="ml-4">₱{{$service->service->service_price_range }}</p>
                                            </div>
                                            <p
                                                class="mt-1 bg-gray-700 px-4 py-2 rounded my-3 inline-block text-sm font-medium text-gray-200">
                                                {{ $service->service->category_service->service_category }}
                                            </p>
                                        </div>
                                        <div class="flex flex-1 items-end justify-between text-sm">
                                            <p class="text-gray-100">Transaction time:
                                                {{$service->created_at->diffForHumans() }}
                                            </p>
                                            <div class="flex">
                                                <a href="{{ route('service-history.show', $service) }}"
                                                    class="font-bold underline text-indigo-800 hover:text-indigo-900">
                                                    View more
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @empty
                                <h2 class="text-center text-white font-bold my-8 text-2xl">No Availed Service</h2>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200 py-6 flex items-center justify-center px-4 sm:px-6">
                    <a href="{{ route('user-services.index') }}"
                        class="font-medium text-indigo-600  hover:text-indigo-500">
                        Avail more service
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>
            </div>
            <div class="mt-4">
                {{ $serviceHistory->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
