<x-app-layout>
    <div
        class="p-6 w-full mx-auto lg:max-w-xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-4" viewBox="0 0 24 24"
            style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
            <path
                d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z">
            </path>
        </svg>
        <div class="flex items-center justify-between">
            <div class="flex item-center gap-2">
                <h5 class="text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
                    {{ $service->service_name }}
                </h5>
                <div class="bg-slate-700 text-sm text-white rounded px-6 py-1">
                    <p>{{ $service->category_service->service_category }}</p>
                </div>
            </div>
            <div>
                @if ($service->is_available === 1)
                <span class="bg-indigo-700 text-white px-4 rounded text-sm py-1">
                    Available
                </span>
                @else
                <span class="bg-red-700 text-white px-4 rounded text-sm py-1">
                    Out of Stock
                </span>
                @endif
            </div>
        </div>
        @if ($service->service_description)
        <p class="my-2 font-normal text-gray-500 dark:text-gray-400">
            {{ $service->service_description }}
        </p>
        @endif
        <p class="text-2xl font-medium mt-2 mb-3">₱{{ $service->service_price_range }}</p>
    </div>
</x-app-layout>
