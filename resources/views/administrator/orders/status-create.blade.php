<form action="{{ route('track-orders.update', $order) }}" method="POST" class="mb-4">
    @csrf
    @method('PUT')
    <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">
        Update Order Status
    </label>
    <select id="status" name="status"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option {{ $order->status == 'Processing' ? 'selected' : '' }} value="Processing">
            Processing
        </option>
        <option {{ $order->status == 'Packed' ? 'selected' : '' }} value="Packed">
            Packed
        </option>
        <option {{ $order->status == 'Shipped' ? 'selected' : '' }} value="Shipped">
            Shipped
        </option>
        <option {{ $order->status == 'Delivered' ? 'selected' : '' }} value="Delivered">
            Delivered
        </option>
    </select>

    <div class="mt-4">
        <label for="delivery_date" class="block mb-2 text-sm font-medium text-gray-300">
            Delivery Date
        </label>
        <input type="date" name="delivery_date" value="{{ $order->delivery_date->format('Y-m-d') }}" id="delivery_date"
            class="shadow-sm  text-sm rounded-lg block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white shadow-sm-light">
        @error('delivery_date')
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
        class="text-white mt-4 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
        Save Changes
    </button>
</form>
