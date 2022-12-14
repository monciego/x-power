<x-app-layout>
    @section('title', 'Service Category')
    <div class="col-span-full xl:col-span-6  bg-[#1a1f23] shadow-lg rounded-sm  ">
        <header class="px-5 py-4 border-b border-slate-700 flex justify-between items-center">
            <h2 class="font-semibold text-slate-50">Service Categories</h2>
            <a href="{{ route('service-categories.create') }}"
                class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-700 hover:bg-indigo-800 text-white">
                <span class="xs:block text-sm ml-2">Add Service Category</span>
            </a>
        </header>
        <div class="p-3">
            {{-- @include('administrator.products.table') --}}
        </div>
        <div class="p-3 grid grid-cols-6 gap-6">
            @foreach ($categories as $category)
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <div class="block p-4   bg-gray-800 border-gray-700 hover:bg-gray-700">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight0 text-white">
                        {{ $category->service_category }}
                    </h5>
                    <div class="flex items-center gap-3 mt-4">
                        <div>
                            @include('administrator.services.category.delete')
                        </div>
                        <div>
                            <a class="py-2 px-3 text-sm font-medium text-center  rounded  focus:ring-4 focus:outline-none  bg-indigo-600 hover:bg-indigo-700 focus:ring-indigo-800"
                                href="{{ route('service-categories.show', $category) }}">
                                Details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <div class="mt-4">
        {{-- {{ $products->links() }} --}}
    </div>
</x-app-layout>
