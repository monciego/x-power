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

    <button type="submit"
        class="text-white mt-4 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
        Update Status
    </button>
</form>
