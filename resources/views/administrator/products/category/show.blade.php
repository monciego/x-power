<x-app-layout>
    @section('title', 'Product Categories')
    @foreach ($products as $product)
    <li>{{ $product->product_name }}</li>
    @endforeach
</x-app-layout>
