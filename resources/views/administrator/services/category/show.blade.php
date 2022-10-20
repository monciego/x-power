<x-app-layout>
    @section('title', 'Category Service')
    @forelse ($services as $service)
    <li>{{ $service->service_name }}</li>
    @empty
    <li>This category has no service listed.</li>
    @endforelse
</x-app-layout>
