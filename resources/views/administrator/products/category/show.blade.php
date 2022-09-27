<x-app-layout>
    @foreach ($products as $product)
    <li>{{ $product->product_name }}</li>
    @endforeach
</x-app-layout>
