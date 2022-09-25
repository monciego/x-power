{{-- @unless ($products->isEmpty()) --}}
<div class="overflow-x-auto">
    <table class="table-auto w-full">
        {{-- table header --}}
        <thead class="text-xs uppercase text-slate-50  rounded-sm">
            <tr>
                <th class="p-2">
                    <div class="font-semibold text-left">Product Name</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Product Category</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Product Price</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Product Status</div>
                </th>
                <th class="p-2">
                    <div class="font-semibold text-left">Action</div>
                </th>
            </tr>
        </thead>
        {{-- table body --}}
        <tbody class="text-sm font-medium divide-y text-slate-300 divide-slate-100">
            {{-- row --}}
            {{-- @foreach ($products as $product) --}}
            <tr>
                <td class="p-2">
                    <p>Windshield Bags</p>
                </td>
                <td class="p-2 ">
                    <p>Windshields & Fairings</p>
                </td>
                <td class="p-2 ">
                    <p>₱100.00</p>
                </td>
                <td class="p-2 ">
                    <p class="text-red-700">Out of Stock</p>
                </td>
                <td class="p-2 ">
                    <div>
                        <button
                            class="inline-flex items-center gap-1 bg-indigo-500 hover:bg-indigo-600 text-white p-1 px-5 rounded">
                            More Details
                        </button>
                    </div>
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
</div>
{{-- @else --}}
{{-- <div class="flex-col flex items-center justify-center">
    <div>
        <img src="" alt="There are currently no listed products.">
    </div>
    <div>
        <h1 class="text-center font-bold text-xl mt-8 uppercase">
            There are currently no listed products.
        </h1>
    </div>
</div> --}}
{{-- @endunless --}}
