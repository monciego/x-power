@foreach ($products as $product)
<div>
    <div
        class="relative h-80 w-full overflow-hidden rounded-lg sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
        @if ($product->product_image)
        <img src="{{ Storage::url($product->product_image) }}" alt="{{ $product->product_name }}"
            class="h-full w-full object-cover object-center">
        @else
        <img class="h-full w-full object-cover object-center" src="{{ asset('images/no-image.jpg') }}" alt="No Image">
        @endif
    </div>
    <h3 class="mt-6 text-sm text-gray-50">
        <a href="#">
            {{ $product->category_product->product_category }}
        </a>
    </h3>
    <p class="text-lg font-semibold text-white">{{ $product->product_name }}</p>
    @if ($product->product_description)
    <p class="text-gray-300 my-2 text-sm">
        {{ $product->product_description }}
    </p>
    @endif

    <div class="flex justify-between items-center">
        <span class="text-3xl font-bold text-white">₱{{ $product->product_price }}</span>
        <a href="{{ route('checkout.index', $product) }}"
            class="focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center text-white bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">
            Buy Now
        </a>
    </div>
</div>
@endforeach
