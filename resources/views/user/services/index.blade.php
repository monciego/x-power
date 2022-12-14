<x-app-layout>
    @section('title', 'Services')
    <div class="py-10 px-2 sm:px-4 lg:px-8">
        <form class="flex items-center">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="search"
                    class="text-sm rounded-lg block w-full pl-10 p-2.5  bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search" name="search" />
            </div>
            <button type="submit"
                class="p-2.5 ml-2 text-sm font-medium text-white rounded-lg border border-blue-700  focus:ring-4 focus:outline-none  bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>

    <x-success-message />
    <x-danger-message />


    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-10">
        <div class="mx-auto max-w-2xl lg:max-w-none">
            <h2 class="text-2xl font-bold text-white">Services
                <span class="text-lg">({{ $available_product }} available services)</span>
            </h2>
            <div class="mt-6 space-y-4 lg:grid lg:grid-cols-2 lg:gap-4 lg:space-y-0">
                @forelse ($services as $service)
                @include('user.services.service')
                @empty
                <h2 class="text-3xl font-bold  text-white">No Available Services</h2>
                @endforelse
            </div>
        </div>

        <div class="mt-4">
            {{ $services->links() }}
        </div>
    </div>

</x-app-layout>
