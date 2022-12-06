<x-app-layout>
    @section('title', isset($service) ? $service->service_name : 'Service')
    <div
        class="p-6 w-full mx-auto lg:w-full bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
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

        <div class="flex items-center gap-3">
            <a href="{{ route('services.edit', $service->id) }}"
                class="inline-flex gap-1 items-center py-2 px-3 text-sm font-medium text-center  rounded  focus:ring-4 focus:outline-none  bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                Edit
            </a>


            <form method="POST" action=""
                class=" cursor-pointer gap-1 items-center py-2 px-3 text-sm font-medium text-center  rounded  focus:ring-4 focus:outline-none  bg-red-600 hover:bg-red-700 focus:ring-red-800">
                @csrf
                @method('DELETE')
                <button class="inline">
                    Delete
                </button>
            </form>
            {{--
            <a href="#"
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
</x-app-layout>
