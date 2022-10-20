<x-app-layout>
    @section('title', 'Create Service')
    <div class="px-2 md:px-40">
        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="mb-4 font-medium text-lg">Add Service</h2>

            <div class="mb-6">
                <label for="service_name" class="block mb-2 text-sm font-medium text-gray-300">
                    Service Name
                </label>
                <input type="text" name="service_name" id="service_name" value="{{ old('service_name') }}"
                    class="shadow-sm  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white shadow-sm-light">
                @error('service_name')
                <div class="flex items-center gap-1 mt-1 ml-1">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="#cc0000">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p class="text-red-600 font-medium text-sm">
                        {{ $message }}
                    </p>
                </div>
                @enderror
            </div>

            <div class="mb-6">
                @if ($categories->count() === 0)
                <a href="{{ route('service-categories.index') }}"
                    class="mt-4 px-4 py-2 font-medium text-sm flex items-center justify-center  border border-transparent rounded leading-5 shadow-sm transition duration-150 ease-in-out bg-slate-600 hover:bg-slate-700 text-white">
                    <svg class="w-3 h-3 fill-current opacity-50 shrink-0" viewBox="0 0 16 16">
                        <path
                            d="M15 7H9V1c0-.6-.4-1-1-1S7 .4 7 1v6H1c-.6 0-1 .4-1 1s.4 1 1 1h6v6c0 .6.4 1 1 1s1-.4 1-1V9h6c.6 0 1-.4 1-1s-.4-1-1-1z" />
                    </svg>
                    <span class="xs:block text-sm ml-2">Add Categories</span>
                </a>
                @else
                <label for="category_service_id" class="block mb-2 text-sm font-medium text-gray-400">Select an
                    option</label>
                <select id="category_service_id" name="category_service_id"
                    class="text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                    <option selected disabled hidden>Choose Category</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" @if (old('category_service_id')==$category->id)
                        selected="selected" @endif >
                        {{ $category->service_category }}</option>
                    @endforeach
                </select>
                @endif
                @error('category_service_id')
                <div class="flex items-center gap-1 mt-1 ml-1">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="#cc0000">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p class="text-red-600 font-medium text-sm">
                        {{ $message }}
                    </p>
                </div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="service_price_range" class="block mb-2 text-sm font-medium text-gray-300">
                    Service Price Range
                </label>
                <div class="relative">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5  text-gray-400" viewBox="0 0 36 36" version="1.1" fill="rgb(156, 163 ,175)"
                            preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>peso-solid</title>
                            <path d="M14.18,13.8V16h9.45a5.26,5.26,0,0,0,.08-.89,4.72,4.72,0,0,0-.2-1.31Z"
                                class="clr-i-solid clr-i-solid-path-1"></path>
                            <path d="M14.18,19.7h5.19a4.28,4.28,0,0,0,3.5-1.9H14.18Z"
                                class="clr-i-solid clr-i-solid-path-2"></path>
                            <path d="M19.37,10.51H14.18V12h8.37A4.21,4.21,0,0,0,19.37,10.51Z"
                                class="clr-i-solid clr-i-solid-path-3"></path>
                            <path
                                d="M17.67,2a16,16,0,1,0,16,16A16,16,0,0,0,17.67,2Zm10.5,15.8H25.7a6.87,6.87,0,0,1-6.33,4.4H14.18v6.54a1.25,1.25,0,1,1-2.5,0V17.8H8.76a.9.9,0,1,1,0-1.8h2.92V13.8H8.76a.9.9,0,1,1,0-1.8h2.92V9.26A1.25,1.25,0,0,1,12.93,8h6.44a6.84,6.84,0,0,1,6.15,4h2.65a.9.9,0,0,1,0,1.8H26.09a6.91,6.91,0,0,1,.12,1.3,6.8,6.8,0,0,1-.06.9h2a.9.9,0,0,1,0,1.8Z"
                                class="clr-i-solid clr-i-solid-path-4"></path>
                            <rect x="0" y="0" width="36" height="36" fill-opacity="0" />
                        </svg>
                    </div>
                    <input value="{{ old('service_price_range') }}" type="text" name="service_price_range"
                        id="service_price_range"
                        class=" border text-sm rounded-lg  block w-full pl-10 p-2.5  bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                </div>
                @error('service_price_range')
                <div class="flex items-center gap-1 mt-1 ml-1">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="#cc0000">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p class="text-red-600 font-medium text-sm">
                        {{ $message }}
                    </p>
                </div>
                @enderror
            </div>

            <div class="mb-6">
                <label for="service_description" class="block mb-2 text-sm font-medium text-gray-400">
                    Service Description (optional)</label>
                <textarea name="service_description" id="service_description" rows="4"
                    class="block p-2.5 w-full text-sm rounded-lg border  bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"></textarea>
            </div>

            <div class="flex items-start mb-6">
                <div class="flex items-center h-5">
                    <input checked id="is_available" type="checkbox" name="is_available"
                        class="w-4 h-4 rounded border us:ring-3  bg-gray-700 border-gray-600 focus:ring-blue-600 ring-offset-gray-800">
                </div>
                <label for="is_available" class="ml-2 text-sm font-medium text-gray-300"> Check if this
                    service is available
                </label>
            </div>
            <button type="submit"
                class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Create Service
            </button>
        </form>
    </div>

</x-app-layout>

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>
