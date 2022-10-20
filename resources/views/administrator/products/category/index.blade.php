<x-app-layout>
    @section('title', 'Product Categories')
    <div class="col-span-full xl:col-span-6  bg-[#1a1f23] shadow-lg rounded-sm  ">
        <header class="px-5 py-4 border-b border-slate-700 flex justify-between items-center">
            <h2 class="font-semibold text-slate-50">Product Categories</h2>
            <a href="{{ route('product-categories.create') }}"
                class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-700 hover:bg-indigo-800 text-white">
                <span class="xs:block text-sm ml-2">Add Product Category</span>
            </a>
        </header>
        <div class="p-3">
            {{-- @include('administrator.products.table') --}}
        </div>
        <div class="p-3 grid grid-cols-6 gap-6">
            @foreach ($categories as $category)
            <a href="{{ route('product-categories.show', $category) }}" class="col-span-6 sm:col-span-6 lg:col-span-2">
                <div class="block p-4   bg-gray-800 border-gray-700 hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight0 text-white">
                        {{ $category->product_category }}
                    </h5>
                </div>
            </a>
            @endforeach
        </div>

    </div>
    <div class="mt-4">
        {{-- {{ $products->links() }} --}}
    </div>
</x-app-layout>
