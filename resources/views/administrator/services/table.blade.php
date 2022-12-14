@unless ($services->isEmpty())
<div class="overflow-x-auto">
    <table class="table-auto w-full">
        {{-- table header --}}
        <thead class="text-xs uppercase text-slate-50  rounded-sm">
            <tr>
                <th class="p-2">
                    <div class="font-semibold text-left">Service Name</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Service Category</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Service Price Range</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Service Status</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Action</div>
                </th>
            </tr>
        </thead>
        {{-- table body --}}
        <tbody class="text-sm font-medium divide-y text-slate-300 divide-slate-800">
            @foreach ($services as $service)
            <tr>
                <td class="p-2">
                    <p>{{ $service->service_name }}</p>
                </td>
                <td class="p-2 ">
                    <p>{{ $service->category_service->service_category }}</p>
                </td>
                <td class="p-2 ">
                    <p>₱{{ $service->service_price_range }}</p>
                </td>
                <td class="p-2 ">
                    @if ($service->is_available === 1)
                    <p class="text-indigo-500">Available</p>
                    @else
                    <p class="text-red-700">Not Available</p>
                    @endif
                </td>
                <td class="p-2 ">
                    <div>
                        <a href="{{ route('services.show', $service) }}"
                            class="inline-flex items-center gap-1 bg-indigo-500 hover:bg-indigo-600 text-white p-1 px-5 rounded">
                            More Details
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<div class="flex-col flex items-center justify-center">
    <div>
        <img src="" alt="There are currently no listed services.">
    </div>
    <div>
        <h1 class="text-center font-bold text-xl mt-8 uppercase">
            There are currently no listed services.
        </h1>
    </div>
</div>
@endunless
