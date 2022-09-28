<x-app-layout>
    @foreach ($services as $service)
    <li>{{ $service->service_name }}</li>
    @endforeach
</x-app-layout>
