<x-app-layout>
    @section('title', 'Category Service')
    @foreach ($services as $service)
    <li>{{ $service->service_name }}</li>
    @endforeach
</x-app-layout>
