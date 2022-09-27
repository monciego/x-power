<x-app-layout>
    <div class="col-span-full xl:col-span-6  bg-[#1a1f23] shadow-lg rounded-sm  ">
        <header class="px-5 py-4 border-b border-slate-700 flex justify-between items-center">
            <h2 class="font-semibold text-slate-50">Services</h2>
            <div>
                <a href=""
                    class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-slate-700 hover:bg-slate-800 text-white">
                    <span class="xs:block text-sm ml-2">Service Categories</span>
                </a>
                <a href="{{ route('services.create') }}"
                    class="px-4 py-2 font-medium text-sm inline-flex items-center justify-center border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-indigo-700 hover:bg-indigo-800 text-white">
                    <span class="xs:block text-sm ml-2">Add Service</span>
                </a>
            </div>

        </header>
        <div class="p-3">
            @include('administrator.services.table')
        </div>
    </div>
    {{-- <div class="mt-4">
        {{ $products->links() }}
    </div> --}}
</x-app-layout>
