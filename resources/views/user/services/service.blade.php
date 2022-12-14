<div class="p-6 w-full mx-auto  lg:max-w-xl rounded-lg border shadow-md bg-gray-800 border-gray-700">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 mb-4" viewBox="0 0 24 24"
        style="fill: rgba(255, 252, 252, 1);transform: ;msFilter:;">
        <path
            d="m2.344 15.271 2 3.46a1 1 0 0 0 1.366.365l1.396-.806c.58.457 1.221.832 1.895 1.112V21a1 1 0 0 0 1 1h4a1 1 0 0 0 1-1v-1.598a8.094 8.094 0 0 0 1.895-1.112l1.396.806c.477.275 1.091.11 1.366-.365l2-3.46a1.004 1.004 0 0 0-.365-1.366l-1.372-.793a7.683 7.683 0 0 0-.002-2.224l1.372-.793c.476-.275.641-.89.365-1.366l-2-3.46a1 1 0 0 0-1.366-.365l-1.396.806A8.034 8.034 0 0 0 15 4.598V3a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.598A8.094 8.094 0 0 0 7.105 5.71L5.71 4.904a.999.999 0 0 0-1.366.365l-2 3.46a1.004 1.004 0 0 0 .365 1.366l1.372.793a7.683 7.683 0 0 0 0 2.224l-1.372.793c-.476.275-.641.89-.365 1.366zM12 8c2.206 0 4 1.794 4 4s-1.794 4-4 4-4-1.794-4-4 1.794-4 4-4z">
        </path>
    </svg>
    <div class="flex  items-center justify-between">
        <div class="flex flex-col md:flex-row item-center gap-2">
            <h5 class="text-2xl font-semibold tracking-tight text-white">
                {{ $service->service_name }}
            </h5>
            <div class="bg-slate-700 text-slate-50 text-sm py-2 px-4 rounded">
                {{ $service->category_service->service_category }}
            </div>
        </div>
    </div>
    @if ($service->service_description)
    <p class="my-2 font-normal text-gray-500 ">
        {!! $service->service_description !!}
    </p>
    @endif
    <p class="text-2xl font-medium text-gray-100 mt-2 mb-3">₱{{ $service->service_price_range }}</p>
    <p class="text-base font-medium text-gray-100 mt-2 mb-3">Service Time
        {{ \Carbon\Carbon::parse($service->service_start)->format('g:i A')}}
        -
        {{ \Carbon\Carbon::parse($service->service_end)->format('g:i A')}}
    </p>
    @php
    $first = \Carbon\Carbon::create($service->service_start);
    $second = \Carbon\Carbon::create($service->service_end);
    $diff = \Carbon\Carbon::now()->isBetween($first, $second);
    @endphp
    @if($service->is_available === 0)
    <div class="flex mt-4 justify-between items-center">
        <button
            class="focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white bg-red-600 hover:bg-red-700 focus:ring-red-800">
            Not Available
        </button>
    </div>
    @elseif (!$diff)
    <div class="flex mt-4 justify-between items-center">
        <button
            class="focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white bg-red-600 hover:bg-red-700 focus:ring-red-800">
            Not Available
        </button>
    </div>
    @else
    <div class="flex mt-4 justify-between items-center">
        <a href="{{ route('avail-service.index', $service) }}"
            class="focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
            Avail Service
        </a>
    </div>
    @endif


</div>
