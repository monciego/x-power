<x-app-layout>
    @section('title', 'Create Category')
    <div class="px-2 md:px-40">
        <form action="{{ route('service-categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="mb-4 font-medium text-lg">Add service Category</h2>

            <div class="mb-6">
                <label for="service_category" class="block mb-2 text-sm font-medium text-gray-300">
                    Service Category Name
                </label>
                <input type="text" name="service_category" id="service_category" value="{{ old('service_category') }}"
                    class="shadow-sm  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white shadow-sm-light">
                @error('service_category')
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


            <button type="submit"
                class="text-white focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
                Create Category
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
