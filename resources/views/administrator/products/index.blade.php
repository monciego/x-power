<x-app-layout>
    @section('title', 'Products')
    <div class="col-span-full xl:col-span-6  bg-[#1a1f23] shadow-lg rounded-sm  ">
        <header class="px-5 py-4 border-b border-slate-700 flex justify-between items-center">
            <h2 class="font-semibold text-slate-50">Products</h2>
            <div>
                <span class="px-4">There are <span class="font-bold">
                        {{ $available_product }}</span> products available.</span>
                <a href="{{ route('product-categories.index') }}"
                    class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-slate-700 hover:bg-slate-800 text-white">
                    <span class="xs:block text-sm ml-2">Product Categories</span>
                </a>
                <a href="{{ route('products.create') }}"
                    class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-700 hover:bg-indigo-800 text-white">
                    <span class="xs:block text-sm ml-2">Add Product</span>
                </a>
            </div>

        </header>
        <div class="p-3">
            @include('administrator.products.table')
        </div>
    </div>
    <div class="mt-4">
        {{ $products->links() }}
    </div>
</x-app-layout>
