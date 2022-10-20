<x-app-layout>
    @section('title', 'Product Categories')
    @forelse ($products as $product)
    <li>{{ $product->product_name }}</li>
    @empty
    <li>This category has no product listed.</li>
    @endforelse
</x-app-layout>
